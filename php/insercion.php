<?php 
include("../Conexion.php");
include("Verificacion.php");
include("DatosUsuario.php");
class InsertUser
{
	private $Nombre = null;
	private $Apellido = null;
	private $Semetre = null;
	private $Nctrl = null;
	private $Carrera = null;
	private $pass = null;
	private $correo = null;
	private $confirmacionpass = null;
	private $genero = null;
	private $ExPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/';
	private $ExCorreo = '/^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})*@([a-zA-Z]{2,})\.([a-zA-Z]{2,3})(\.([a-zA-Z]{2,3}))?$/';
	private $ExNctrl = '/^[c|C]{1}[0-9]{8}$|^[0-9]{8}$/';
	private $conexion = null;
	protected $TUsuario;
	protected $TAlumno;
	private $datosusuario;
	private $verificacion;


	public function __construct($conexion, $Nombre, $Apellido, $Semetre, $Nctrl, $Carrera, $pass, $correo, $confirmacionpass, $genero, $TAlumno, $TUsuario, DatosUsuario $datousuario, Verificacion $verificacion)
	{
		$this->conexion = $conexion;
		$this->Nombre = $Nombre;
		$this->Apellido = $Apellido;
		$this->Semetre = $Semetre;
		$this->Nctrl = $Nctrl;
		$this->Carrera = $Carrera;
		$this->pass = $pass;
		$this->correo = $correo;
		$this->confirmacionpass = $confirmacionpass;
		$this->genero = $genero;
		$this->TUsuario = $TUsuario;
		$this->TAlumno = $TAlumno;
		$this->datosusuario = $datousuario;
		$this->verificacion = $verificacion;
	}

	public function RegisterUser()
	{
		if ($this->validValues()) {
			if ($this->checkEmailAndNctrl()) {
				if (preg_match($this->ExPass, $this->pass) && preg_match($this->ExCorreo, $this->correo)) {
					$this->insertAlumno();
					$this->insertUser();
					return true;
				} else {
					return $this->errorHandler(2);
				}
			} else {
				return $this->errorHandler(1);
			}
		} else {
			return $this->errorHandler(0);
		}

	}

	private function errorHandler($type)
	{
		switch ($type) {
			default:
				return 'Datos invalidos';
				break;
			case 1:
				return $this->errorMail();
				break;
			case 2:
				return $this->checkMailAndPass();
				break;
		}
	}
	private function errorMail(){
		if(!$this->verificacion->VerificacionEmail($this->correo)){
			return 'Correo ya registrado';
		}else {
			return 'Número de control ya registrado';
		}
	}
	private function checkMailAndPass(){
		if (preg_match($this->ExPass, $this->pass)){
			return 'Correo invalido';
		}else{
			return 'Contraseña debil';
		}
	}
	private function checkEmailAndNctrl()
	{
		if ($this->verificacion->VerificacionEmail($this->correo) && $this->verificacion->VerificarNctrl($this->Nctrl)) {
			return true;
		} else {
			return false;
		}
	}

	private function insertAlumno()
	{
		$query = "INSERT INTO {$this->TAlumno} (`name`, `last_name`, `nctrl`, `CARRERA`, `semestre`, `genero`) VALUES ( '{$this->Nombre}', '{$this->Apellido}','{$this->Nctrl}', '{$this->Carrera}', {$this->Semetre}, '{$this->genero}')";
		$execute = mysqli_query($this->conexion, $query);
	}

	private function insertUser()
	{
		$id_alumno = $this->getUserID();
		$this->pass = $this->encrypPass($this->pass);
		$Query = "INSERT INTO {$this->TUsuario} (`id_alumno`, `email`, `pass`, `active`, `tipo`) VALUES ($id_alumno, '{$this->correo}', '{$this->pass}', '0', '1')";
		$execute = mysqli_query($this->conexion,$Query);
	}

	private function getUserID()
	{
		$result = $this->datosusuario->Datos($this->Nctrl, $this->conexion, $this->TAlumno);
		return $result;
	}

	private function encrypPass($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	private function validValues()
	{
		if (isset($this->Nombre) && isset($this->Apellido) && isset($this->Semetre) && isset($this->Nctrl) && isset($this->Carrera) && isset($this->pass) && isset($this->correo)
			&& isset($this->confirmacionpass) && isset($this->genero)) {
			return true;
		} else {
			return false;
		}
	}
}


if ($_POST) {
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Nctrl = $_POST['Nctrl'];
	$Carrera = $_POST['carrera'];
	$pass = $_POST['pass'];
	$correo = $_POST['email'];
	$confirmacionpass = $_POST['passconfirm'];
	$genero = $_POST['genero'];
	$Semetre = $_POST['semestre'];
	$call = new InsertUser(
		$conexion,
		$Nombre,
		$Apellido,
		$Semetre,
		$Nctrl,
		$Carrera,
		$pass,
		$correo,
		$confirmacionpass,
		$genero,
		$alumno,
		$usuario,
		new DatosUsuario(),
		new Verificacion()
	);
	echo $call->RegisterUser();
}



