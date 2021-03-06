<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tratamiento Especial AIS</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/font/icon.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/css/app.css">
</head>
<body class="grey lighten-5">
	<div class="navbar-fixed ">
		<nav class="blue z-depth-3">
			<div class="nav-wrapper container">
				<div class="left">
					<a href="#" class="brand-logo left">
						<img style="width:130px; margin-top:3px" src="<?= base_url() ?>/application/views/assets/images/unerg.png">
					</a>
				</div>
				<ul class="left hide-on-med-and-down" class="right" style="margin-left: 150px">
					<li><h5 class="">AREA DE INGENIERIA EN SISTEMAS</h5></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li><?= anchor("$usuario", '<i class="material-icons left">home</i> Inicio') ?></li>
					<!-- <li><?= anchor("$usuario/aprobados", '<i class="material-icons left">check</i>Aprobados') ?></li> -->
					<li><a href="#" class="dropdown-trigger" data-target="salir">
						<?= $usuario ?> <i class="material-icons right">keyboard_arrow_down</i>
					</a></li>
					<ul id="salir" class="dropdown-content">
						<?php if($usuario == "admin"): ?>
							<li style="margin-top: 10px"><?php if($id[0]->campo == '0'){
								echo anchor("activar/1", 'ON', ['class'=>"lighten-1 white-text btn green", 'title'=> "Activar Formulario", 'style'=> 'padding-bottom: 30px']);
							}
							else {
								echo anchor("activar/0", 'OFF', ['class'=>"lighten-1 white-text btn red", 'title'=> "Desactivar Formulario", 'style'=> 'padding-bottom: 30px']);
							}
							?></li>
						<?php else: ?>
							<li style="margin-top: 10px"><?php if($id[0]->campo == '0'){
								echo anchor("activar/1", 'ON', ['class'=>"lighten-1 white-text btn green disabled", 'title'=> "Activar Formulario"]);
							}
							else {
								echo anchor("activar/0", 'OFF', ['class'=>"lighten-1 white-text btn red disabled", 'title'=> "Desactivar Formulario"]);
							}
							?></li>
						<?php endif ?>
						<li class="divider" tabindex="-1"></li>
						<li><a class="waves-effect waves-light modal-trigger center" href="#modal1">Cambiar Contraseña</a></li>
						<li class="divider" tabindex="-1"></li>
						<li><?= anchor('login_controller/logout', 'Salir', 'class="center lighten-1 black-text"') ?></a></li>
					</ul>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Modal Structure -->
	<div id="modal1" class="modal" style="width: 400px">
		<?= form_open('Inicio_controller/cambioClave', "id='a'") ?>
			<div class="modal-content">
				<h4 class="center">Cambio de clave</h4>
				<br>
				<div class="row">
					<div class="col">
						<label for="ante">Antigua Contraseña</label>
						<input type="password" id="ante" onchange="if (this.value != <?= $clave ?>) { $('#a').submit(function(e){ e.preventDefault(); alert('La  clave anterior es incorrecta') }) }">
					</div>
					<div class="col">
						<label for="despues">Nueva Contraseña</label>
						<input type="password" id="despues" name="nueva">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="modal-action modal-close waves-effect waves-green btn red">CAMBIAR</a>
			</div>
		</form>
	</div>