<?php

class RegistroExamen
{
    private $Examen = null;
    private $Pago = null;
    private $id = null;
    private $Folio = null;
    private $conexion = null;
    private $hora = null;
    private $date = null;
    protected $Fechas = "fechas_examen";
    private $idFecha = 0;

    public function __construct($id, $folio, $Examen, $Pago, $conexion)
    {
        $this->id = $this->parseInt($id);
        $this->Pago = substr($Pago, 0, 10);
        $this->Examen = $Examen;
        $this->Folio = $this->parseInt($folio);
        $this->conexion = $conexion;
        $this->date = date('Y-m-d', strtotime('-1 day'));
    }
    private function getDate($fecha)
    {
        $result = date_create_from_format('d/m/y', $fecha);
        return DateTime::createFromFormat('Y-m-d', $fecha)->format('Y-m-d');;
    }
    private function parseInt($number)
    {
        $result = (float)$number;
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
        $cupo = $this->getcupo($this->Examen);
        $current_Date = getdate();
        $fecha_actual = $current_Date['year'] . "/" . $current_Date['mon'] . "/" . $current_Date['mday'];
        $fecha_e = strtotime($fecha_actual);
        $fecha_entrada = strtotime($this->Examen);
        if ($fecha_e > $fecha_entrada) {
            return 'Fecha pasada, escoge otra fecha.';
        } else {

            try {
                $this->setDateData();
                if ($this->checkFolioPago()) {
                    if ($cupo > 0) {
                        $Query = "INSERT INTO `r_examen` (`id`, `ID_FECHAS`, `ID_ALUMNO`, `HORA`, `FechaPago`, `FolioPago`,`FechaActual`) VALUES (NULL, {$this->idFecha}, $this->id, '{$this->hora}', '{$this->Pago}', {$this->Folio},'{$this->date}');";
                        $execute = mysqli_query($this->conexion, $Query);
                        if ($execute) {
                            $this->lesscupo($cupo - 1);
                            return $execute;
                        } else {
                            return $this->ErrorValidate();
                        }
                    } else {
                        return 'Grupo saturado, escoge otra fecha';
                    }

                } else {
                    return 'Folio ya registrado. Contacte con el coordinador de lenguas extranjeras.';
                }

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
    }
    private function lesscupo($cupo)
    {
        $query = "UPDATE {$this->Fechas} SET cupo = {$cupo} WHERE id = {$this->idFecha}";
        $execute = mysqli_query($this->conexion, $query);
    }

    public function getcupo($fecha)
    {
        try {
            $query = "SELECT cupo FROM {$this->Fechas} WHERE FECHA = '{$fecha}'";
            $execute = mysqli_query($this->conexion, $query);
            $result = mysqli_fetch_assoc($execute);
            return $result['cupo'];
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    private function checkFolioPago()
    {
        try {
            $Query = "SELECT COUNT(*) as row FROM `r_examen` WHERE FolioPago = {$this->Folio}";
            $execute = mysqli_query($this->conexion, $Query);
            $result = mysqli_fetch_assoc($execute);
            if ($result['row'] == 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    private function ErrorValidate()
    {
        if (!$this->ValidateDate()) {
            return 'Fecha no registrada para examen';
        } elseif ($this->validateStudent()) {
            return 'Alumno no registrado';
        } else {
            return 'Error en registro, contacte con el coordinador de lenguas extrajeras.';
        }
    }
    private function ValidateDate()
    {

        try {
            if (is_null($this->idFecha)) {
                $this->idFecha = 0;
            }
            $query = "SELECT * FROM `fechas_examen` WHERE id={$this->idFecha}";
            $excecute = mysqli_query($this->conexion, $query);
            $result = mysqli_num_rows($excecute);
            if ($result > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }
    private function validateStudent()
    {
        try {
            if (is_null($this->id)) {
                $this->id = 0;
            }
            $query = "SELECT COUNT(*) FROM alumno WHERE id = {$this->id}";
            $execute = mysqli_query($this->conexion, $query);
            $result = mysqli_num_rows($execute);
            if ($result > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    private function setDateData()
    {
        $datos = $this->getDateID($this->Examen);
        $this->idFecha = $datos['id'];
        $this->hora = $datos['HORARIO'];

    }
}

if ($_POST) {
    $Id = $_POST['id'];
    $FolioP = $_POST['FolioP'];
    $FechaExamen = $_POST['FechaExamen'];
    $FechaPago = $_POST['FechaPago'];
// $Id = 14;
// $FolioP = 30659;
// $FechaExamen = '2019-02-09';
// $FechaPago = '2018/12/31';
    include_once '../Conexion.php';
    $registro = new RegistroExamen($Id, $FolioP, $FechaExamen, $FechaPago, $conexion);

    $excecute = $registro->InsertData();
    echo $excecute;
} else {
    echo "No post detecte";
}