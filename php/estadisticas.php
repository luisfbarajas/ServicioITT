<?php

class Estadisticas
{

    private $conexion = null;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getMan($table)
    {
        $query = "SELECT COUNT(genero) as genero from {$table} WHERE genero='h'  GROUP BY genero";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
    public function getFemale($table)
    {
        $query = "SELECT COUNT(genero) as genero from {$table} WHERE genero='f'  GROUP BY genero";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
  
    // 1 = ingeniería en sistemas computacionales
    // 2 = ingeniería Biomedica
    // 3 = Contador publico
    // 4 = ingeniería Electromecanica
    // 5 = ingeniería Industrial
    // 6 = ingeniería Telecomunicaciones
    // 7 = ingeniería informatica
    // 8 = ingeniería aeroespacial
    // 9 = ingeniería Nanotecnologia
    // 10 = Arquitectura
    // 11 = ingeniería Civil



    public function getCarrera($table, $Carrera)
    {
        $result = null;
        switch ($Carrera) {
            case 1:
                $result = $this->getDataCarrer('ISC', $table);
                break;
            case 2:
                $result = $this->getDataCarrer('IBM', $table);
                break;
            case 3:
                $result = $this->getDataCarrer('contador publico', $table);
                break;
            case 4:
                $result = $this->getDataCarrer('IEM',$table);
                break;
            case 5: 
                $result = $this->getDataCarrer('II',$table);
                break;
            case 6:
                $result = $this->getDataCarrer('TICS',$table);
                break;
            case 7:
                $result = $this->getDataCarrer('IInf',$table);
                break;
            case 8:
                $result = $this->getDataCarrer('IA',$table);
                break;
            case 9:
                $result = $this->getDataCarrer('Nano',$table);
                break;
            case 10 : 
                $result = $this->getDataCarrer('Arqui',$table);
                break;
            case 11:
                $result = $this->getDataCarrer('IC', $table);
                break;
            default:
                return 0;
        }
        return $result;
    }
    private function getDataCarrer($tipe, $table)
    {
        $query = "SELECT COUNT(CARRERA) as carrera from {$table} WHERE CARRERA='{$tipe}' GROUP BY CARRERA";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }

    public function getSemestreCount($table,$semestre,$tipe){
        $result = null;
        switch($tipe){
            case 1:
                $result= $this->CountSemester($table,$semestre);
                break;
            case 2 :
                $result= $this->countUpperSemestre($table,$semestre);
                break;
            default:
                $result = $this->countlowerSemestre($table,$semestre);
                break;
        }
        return $result;
    }

    private function CountSemester($table,$semester){
        $query = "SELECT COUNT(semestre) as semestre from {$table} WHERE semestre='{$semester}' GROUP BY semestre";
        $execute = mysqli_query($this->conexion,$query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
    private function countlowerSemestre($table,$semester){
        $query = "SELECT COUNT(semestre) as semestre from {$table} WHERE semestre <='{$semester}' GROUP BY semestre";
        $execute = mysqli_query($this->conexion,$query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
    private function countUpperSemestre($table,$semester){
        $query = "SELECT COUNT(semestre) as semestre from {$table} WHERE semestre >='{$semester}' GROUP BY semestre";
        $execute = mysqli_query($this->conexion,$query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
}
