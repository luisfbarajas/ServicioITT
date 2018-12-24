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
    private $email;
    private $ncontrol;

        //constructor
    public function __construct($Id, $Nombre, $Semestre, $Apellidos, $Carrera, $F_Examen, $FolioPago, $email, $ncontrol)
    {
        $this->Id = $this->cleanSpaces($Id);
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Carrera = $Carrera;
        $this->Semestre = $Semestre;
        $this->F_Examen = $F_Examen;
        $this->FolioPago = $FolioPago;
        $this->email = $email;
        $this->ncontrol = $ncontrol;
    }
    private function cleanSpaces($dataToClean){
        $cleanData = trim($dataToClean," ");
        return $cleanData;
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
        $filename = $dir . "{$this->Id}.png";

            //Parametros de Condiguración

        $tamaño = 3; //Tamaño de Pixel
        $level = 'H'; //Precisión Baja
        $framSize = 3; //Tamaño en blanco

            //Enviamos los parametros a la Función para generar código QR 
        QRcode::png($this->MakeContentQR(), $filename, $level, $tamaño, $framSize); 

            //Mostramos la imagen generada
        return '<img src="' . $dir . basename($filename) . '" /><hr/>';
    }
    //genera el contenido para insertar en codigo QR
    private function MakeContentQR(){
        $content = "{$this->Nombre} {$this->Apellidos}\n{$this->email}\n{$this->Carrera}\n
                    {$this->Semestre}\n{$this->ncontrol}\n{$this->FolioPago}\n{$this->F_Examen}";

        return $content;
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

if($_POST){
$funcion = new qrGenerator($_POST['id'], $_POST['nombre'], $_POST['semestre'], $_POST['apellido'], $_POST['carrera'], $_POST['FechaExamen'], $_POST['FolioP'], $_POST['email'], $_POST['nControl']);
$qr = $funcion->generate();
echo $qr;
}