<?php
	include("funciones.php");
?>
	<form name="form" method="POST" action="">
		<table>
			<tr>
				<td></td><td></td><td>Nombre:</td><td><input type=text name=nombre></td>
			</tr>
			<tr>
				<td></td><td></td><td>Localizacion:</td><td><input type=text name=localizacion></td>
			</tr>
			<tr>
				<td></td><td></td><td><input type=submit value=enviar></td>
			</tr>
		</table>
	</form>
<?
	// $obj = new funciones;
	// $log = $Obj -> listado_estaciones();
?>