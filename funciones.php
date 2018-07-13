<?
	include("conn.php");

	class funciones
	{
		public $Mensaje="";
		
		public function __construct(/*posibles datos*/)
		{
			$this -> Mensaje = "Objeto Funciones Creado Correctamente";
		}

		public function nueva_estacion($nombre, $localizacion)
			{
				
				$sql="INSERT INTO Estaciones (nombre, localizacion) VALUES ('$nombre', '$localizacion')";
				$obj = new conn;
				$res= $obj -> ExecSql($sql);
				return void;
			}

		public function modificar_estacion($nombre, $localizacion)
			{
				
				$sql="UPDATE Estaciones SET localizacion='".$localizacion."' WHERE nombre='".$nombre."'";

				$obj = new conn;
				$res= $obj -> ExecSql($sql);
				return void;
			}

		public function listado_estaciones()

			{
				$sql="SELECT nombre, localizacion FROM Estaciones";

				$obj = new conn;
				$res= $obj -> ExecSql($sql);

				echo "<table width=50% border=1>";
				while (odbc_fetch_row($res))
				{
					echo "<tr>";
					$nombre=odbc_result($res, 1);
					$localizacion=odbc_result($res, 2);
					echo "<td>".$nombre."</td>";
					echo "<td>".$localizacion."</td>";
					echo "</tr>";
				}
				echo "</table>"
				return void;
			}

		public function nueva_bicicleta($id, $marca, $color, $tamano, $estacion)
			{
				
				$sql="INSERT INTO Bicicletas (id, marca, color, tamano, estacion) VALUES ('$id', '$marca', '$color', $tamano, '$estacion')";
				$obj = new conn;
				$res= $obj -> ExecSql($sql);
				return void;
			}

		public function modificar_bicicleta($id, $marca, $color, $tamano, $estacion)
			{
				
				$sql="UPDATE Bicicletas SET marca='".$marca."', color='".$color."', tamano=".$tamano.", estacion='".$estacion."' WHERE id='".$id."'";
				$obj = new conn;
				$res= $obj -> ExecSql($sql);
				return void;
			}
	}
	