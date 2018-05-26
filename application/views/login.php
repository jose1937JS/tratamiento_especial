<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<style>
		.card {
			width: 35%;
			margin: auto;
			position: absolute;
			top: 0; right: 0; bottom: 0; left: 0;
			height: 330px;
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
			<span class="card-title center">Inicio de sesión</span><br>
			<?= form_open('login_controller/login')  ?>
				<div class="input-field">
					<i class="material-icons prefix">group</i>
					<select name="user">
						<option value="admin">Admin</option>
						<option selected value="secretaria">Secretaria</option>
					</select>
					<label>Usuario</label>
				</div>
				<br>
				<div class="input-field">
					<i class="material-icons prefix">vpn_key</i>
					<input id="pass" type="password" name="pass">
					<label for="pass">Contraseña</label>
				</div>
				<button class="btn waves-effect waves-light blue" type="submit">Entrar</button>
			</form>
		</div>
	</div>

	<script src="application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="application/views/assets/materialize/js/materialize.min.js"></script>
	<script>
		$(function(){
			$('select').formSelect();
		})
	</script>
</body>
</html>