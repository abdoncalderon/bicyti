<?php
	class conn
	{
		public $NomBDD="Nombre de la base de datos";
		public $UserBDD="Usuario de la base de datos";
		public $PassBDD="Clave de acceso a la base de datos";
		public $HostBDD="Host de la base de datos";
		public $Mensaje="";
		public $Conection;
		public function __construct(/*posibles datos*/)
		{
			$this -> Mensaje = "Objeto Creado Correctamente";
		}

		public function ExecSql($SQL)
		{
			$this -> Conection=mysqli_connect($this -> HostBDD,$this -> UserBDD,$this -> PassBDD) or die(mysqli_connect_error());
			$Db=mysqli_select_db($this -> Conection, $this -> NomBDD) or die(mysqli_connect_error());
			$Result = mysqli_query($this -> Conection, $SQL) or die(mysqli_connect_error());
			$Cerr=mysqli_close($this -> Conection);
			return $Result;
		}
	}
?>