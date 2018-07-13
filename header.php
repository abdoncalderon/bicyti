<!DOCTYPE html>
	<html>
	<head>
		<title>Bicyti</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<header>
			<h1 class="cabecera">Bicyti</h1>
		</header>
		<nav class="menu">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Operaciones</a>
					<ul>
						<li class="<?php echo $pagina == 'reservas' ? 'active' : ''; ?>"><a href="?p=reservas">Reservas</a></li>
						<li class="<?php echo $pagina == 'entregas' ? 'active' : ''; ?>"><a href="?p=entregas">Entregas</a></li>
						<li class="<?php echo $pagina == 'devoluciones' ? 'active' : ''; ?>"><a href="?p=devoluciones">Devoluciones</a></li>
					</ul>
				</li>
				<li><a href="#">Herramientas</a>
					<ul>
						<li class="<?php echo $pagina == 'estaciones' ? 'active' : ''; ?>"><a href="?p=estaciones">Estaciones</a></li>
						<li class="<?php echo $pagina == 'bicicletas' ? 'active' : ''; ?>"><a href="?p=bicicletas">Bicicletas</a></li>
						<li class="<?php echo $pagina == 'usuarios' ? 'active' : ''; ?>"><a href="?p=usuarios">Usuarios</a></li>
					</ul>
				</li>
				<li><a href="#">Reportes</a>
					<ul>
						<li class="<?php echo $pagina == 'repgeneral' ? 'active' : ''; ?>"><a href="?p=repgeneral">Reporte General</a></li>
						<li class="<?php echo $pagina == 'repmantenimientos' ? 'active' : ''; ?>"><a href="?p=repmantenimientos">Mantenimientos</a></li>
						<li class="<?php echo $pagina == 'repusuarios' ? 'active' : ''; ?>"><a href="?p=repusuarios">Reporte por Usuario</a></li>
					</ul>
				</li>
				<li><a href="#">Ayuda</a></li>
			</ul>
		</nav>