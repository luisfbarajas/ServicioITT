<?php
class RegistroExamen
{
    private $Examen = null;
    private $Pago = null;
    private $id = null;
    private $Folio = null;
    private $conexion = null;
    private $hora = null;
    protected $Fechas = "fechas_examen";
    private $idFecha = 0;
    public function __construct($id, $folio, $Examen, $Pago, $conexion)
    {
        $this->id = $this->parseInt($id);
        $this->Pago = substr($Pago, 0, 10);
        $this->Examen = $Examen;
        $this->Folio = $this->parseInt($folio);
        $this->conexion = $conexion;
    }

    private function getDate($fecha)
    {
        $result = date_create_from_format('d/m/y', $fecha);
        return DateTime::createFromFormat('Y-m-d', $fecha)->format('Y-m-d');;
    }
    private function parseInt($number)
    {
        $result = (int)$number;
        return $result;
    }
    private function getDateID($fecha)
    {
        $Query = "SELECT id, HORARIO FROM {$this->Fechas} WHERE FECHA = '{$fecha}' LIMIT 1";
        $execute = mysqli_query($this->conexion, $Query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
    public function InsertData()
    {
        try {
            $this->setDateData();
            $Query = "INSERT INTO `r_examen` (`id`, `ID_FECHAS`, `ID_ALUMNO`, `HORA`, `FechaPago`, `FolioPago`) VALUES (NULL, {$this->idFecha}, $this->id, '{$this->hora}', '{$this->Pago}', {$this->Folio});";
            $execute = mysqli_query($this->conexion, $Query);
            mysqli_close($this->conexion);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $execute;
    }
    private function setDateData()
    {
        $datos = $this->getDateID($this->Examen);
        $this->idFecha = $datos['id'];
        $this->hora = $datos['HORARIO'];

    }
}

if (isset($_POST)) {
    $Id = $_POST['id'];
    $FolioP = $_POST['FolioP'];
    $FechaExamen = $_POST['FechaExamen'];
    $FechaPago = $_POST['FechaPago'];
    // $Id = 14;
    // $FolioP = 123545698;
    // $FechaExamen = '2018-12-31';
    // $FechaPago = '2018-12-31';

    include_once '../Conexion.php';
    $registro = new RegistroExamen($Id, $FolioP, $FechaExamen, $FechaPago, $conexion);

    $excecute = $registro->InsertData();
    echo $excecute;
}
