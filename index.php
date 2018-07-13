<?php
	
	include("funciones.php")
	/*$Obj = new conn;

	$Obj -> NomBDD = "bicyti";
	$Obj -> UserBDD = "root";
	$Obj -> PassBDD = "Heroboy6543";
	$Obj -> HostBDD = "localhost";

	$Prb = $Obj -> ExecSql("select 2 as 'Num'");
	$Datos = mysqli_fetch_array($Prb);
	echo $Datos['Num'];
	*/
	$obj = new funciones;
	$log = $Obj -> listado_estaciones();
?>