<?php

class qrgenerator
{
    //propiedades
    private $Id;
    private $Nombre;
    private $Apellidos;
    private $Carrera;
    private $Semestre;
    private $F_Examen;
    private $FolioPago;
    private $SalonExamen;
    private $Hr;

        //constructor
    public function __construct($Id, $Nombre, $Semestre, $Apellidos, $Carrera, $F_Examen, $FolioPago, $SalonExamen, $Hr)
    {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Carrera = $Carrera;
        $this->Semestre = $Semestre;
        $this->F_Examen = $F_Examen;
        $this->FolioPago = $FolioPago;
        $this->SalonExamen = $SalonExamen;
        $this->Hr = $Hr;
    }
    public function generate()
    {
        include_once '../libs/phpqrcode/qrlib.php';

        //Declaramos una carpeta temporal para guardar la imagenes generadas
        $dir = 'temp/';
            
        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);

            //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir . 'test.png';

            //Parametros de Condiguración

        $tamaño = 3; //Tamaño de Pixel
        $level = 'H'; //Precisión Baja
        $framSize = 3; //Tamaño en blanco
        $contenido = 5; //Texto

            //Enviamos los parametros a la Función para generar código QR 
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 

            //Mostramos la imagen generada
        return '<img src="' . $dir . basename($filename) . '" /><hr/>';
    }
    public function DeleteQrFile($dir)
    {
        $count = 0;
        $dir = rtrim($dir, "/\\") . "/";

        $list = dir($dir);

        while (($file = $list->read()) !== false) {
            if ($file === "." || $file === "..") continue;
            if (is_file($dir . $file)) {
                unlink($dir . $file);
                $count++;
            } elseif (is_dir($dir . $file)) {
                $count += DeleteQrFile($dir . $file);
            }
        }
        rmdir($dir);
        return $count;

    }

}

$funcion = new qrGenerator(6, 'luis', 11, 'barajas', 'isc', '10/10/2018', 1236544789, 'lab-idiomas', '13:00');
$dir = 'temp';
// $qr = $funcion->DeleteQrFile($dir);
$qr = $funcion->generate();
echo $qr;