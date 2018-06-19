<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<style>
		body {
			background: url('<?= base_url() ?>/application/views/assets/images/AREA.jpg');
			background-size: cover;
			background-attachment: fixed;
			background-position: center
		}

		.card {
			width: 35%;
			margin: auto;
			position: absolute;
			top: 0; right: 0; bottom: 0; left: 0;
			height: 300px;
			opacity: .93;
		}

		input[type=password]:not(.browser-default):focus:not([readonly]) + label {
			color: #4285f4;
		}

		input[type=password]:not(.browser-default):focus:not([readonly]) {
			border-bottom: 1px solid #4285f4;
			  -webkit-box-shadow: 0 1px 0 0 #4285f4;
			          box-shadow: 0 1px 0 0 #4285f4;
		}
		
		.dropdown-content li > a, .dropdown-content li > span {
			color: #4285f4;
		}
	</style>
</head>
<body>

	<div class="card hoverable">
		<div class="card-content">
			<span class="card-title center">Login Estudiantes</span><br>
			<?= form_open('login_controller/login_check_est')  ?>
				<div class="input-field">
					<i class="material-icons prefix">group</i>
					<input type="text" maxlength="10" name="ced" required id="ced" required="">
					<label for="ced">Cédula</label>
				</div>
				<br>
				<!-- <div class="input-field">
					<i class="material-icons prefix">vpn_key</i>
					<input id="pass" type="password" name="pass" maxlength="10" required>
					<label for="pass">Contraseña</label>
				</div> -->
				<br>
				<div class="center">
					<button class="btn waves-effect waves-light blue" type="submit">Comprobar</button>
					<!-- <button type="button" data-target="reg" class="btn deep-orange modal-trigger waves-effect waves-light">Nuevo</button> -->
				</div>
			</form>
		</div>
	</div>


	<!-- <div id="reg" class="modal modal-fixed-footer">
		<?= form_open("registrar") ?>
			<div class="modal-content">
				<h4 class="center" style="font-weight: 300">Registrar Nuevo Estudiante</h4>
				<br>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">fiber_pin</i>
						<input type="text" name="cedula" id="cedula" required class="validate" pattern="[0-9]{7,9}$">
						<label for="cedula">Cédula</label> 
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">face</i>
						<input type="text" name="nombre" id="nombre" required class="validate" >
						<label for="nombre">Nombre</label> 
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">face</i>
						<input type="text" name="apellido" id="apellido" required class="validate">
						<label for="apellido">Apellido</label> 
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">phone</i>
						<input type="text" name="telefono" id="telefono" class="validate" pattern="[0-9]{10,11}$">
						<label for="telefono">Teléfono</label class="validate">
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" required class="validate" id="email">
						<label for="correo">Correo</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">vpn_key</i>
						<input type="email" name="clave" required id="clave">
						<label for="clave">Contraseña</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn red waves-effect waves-light">Registrarse</button>
			</div>
		</form>
	</div> -->

	<script src="<?= base_url() ?>/application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/materialize/js/materialize.min.js"></script>

<!-- 	<script>
		$(function(){
			$('.modal').modal();
		})
	</script> -->
</body>
</html>