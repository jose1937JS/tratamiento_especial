<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tratamiento Especial AIS</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/font/icon.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/css/app.css">
</head>
<body class="grey lighten-4">
	<div class="navbar-fixed ">
		<nav class="blue z-depth-3">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo"><img style="width:130px; margin-top:3px" src="<?= base_url() ?>/application/views/assets/images/unerg.png"></a>
				<ul class="right hide-on-med-and-down">
					<li><?= anchor("$usuario", '<i class="material-icons left">home</i> Inicio') ?></li>
					<li><?= anchor("$usuario/aprobados", '<i class="material-icons left">check</i>Aprobados') ?></li>
					<li><a href="#" class="dropdown-trigger" data-target="salir">
						<?= $usuario ?> <i class="material-icons right">keyboard_arrow_down</i>
					</a></li>
					<ul id="salir" class="dropdown-content">
						<li><?= anchor('login_controller/logout', 'Salir', 'class="center blue lighten-1 white-text"') ?></a></li>
					</ul>
				</ul>
			</div>
		</nav>
	</div>