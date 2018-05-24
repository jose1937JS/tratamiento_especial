	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tratamiento Especial AIS</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/font/icon.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/slick/slick.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/slick/slick-theme.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/css/app.css">
</head>
<body class="grey lighten-4">
	
	<div class="navbar-fixed ">
		<nav class="blue z-depth-3">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo"><img style="width:130px; margin-top:3px" src="<?= base_url() ?>/application/views/assets/images/unerg.png"></a>
				
			</div>
		</nav>
	</div>
	
	<br>

	<main class="container">

		<div class="row slik">
			
			<div class="col">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url() ?>/application/views/assets/images/extra-credito-agregado-puntos-colección-de-foto__k24086553.jpg">
					</div>
					<div class="card-content">
						<span class="card-title">Extra Crédito</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt.</p>
					</div>
				</div>
			</div>
		
			<div class="col">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url() ?>/application/views/assets/images/exam.jpg">
					</div>
					<div class="card-content">
						<span class="card-title">Exámenes Extraordinarios</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt.</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url() ?>/application/views/assets/images/icono-home-1.png">
					</div>
					<div class="card-content">
						<span class="card-title">Último Semestre</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt.</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url() ?>/application/views/assets/images/libros-universitarios_23-2147508412.jpg">
					</div>
					<div class="card-content">
						<span class="card-title">Paralelo</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt.</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?= base_url() ?>/application/views/assets/images/367283.png">
					</div>
					<div class="card-content">
						<span class="card-title">Proyecto de Grado I</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt.</p>
					</div>
				</div>
			</div>

		</div>

		<br>

		<div class="card">
			<div class="card-content">
				<span class="card-title">Formaliza tu Tratamiento Especial</span><br>
				<?= form_open_multipart('solicitud_controller/aniadir') ?>
					<div class="row">
						<div class="input-field col s4">
							<i class="material-icons prefix">fiber_pin</i>
							<input type="number" name="cedula" id="cedula" required class="validate">
							<label for="cedula">Cédula</label> 
						</div>
						<div class="input-field col s4">
							<i class="material-icons prefix">face</i>
							<input type="text" name="nombre" id="nombre" required class="validate">
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
							<input type="number" name="telefono" id="telefono">
							<label for="telefono">Teléfono</label class="validate">
						</div>
						<div class="input-field col s4">
							<i class="material-icons prefix">email</i>
							<input type="email" name="email" required class="validate" id="email">
							<label for="correo">Correo</label>
						</div>
						<div class="file-field input-field col s4">
							<div class="btn blue waves-effect waves-light">
								<span>PDF</span>
								<input type="file" require name="constancia" accept=".pdf" >
							</div>
							<div class="file-path-wrapper">
								<input type="text" class="file-path validate" id="constancia" placeholder="Sube tu constancia de notas" required>
							</div>
						</div>
							
					</div>

					<div class="row">
						<div class="input-field col s4">
							<!-- <i class="material-icons prefix">check</i>
							<select multiple name="tratamiento[]" id="tratamiento">
								<option disabled selected>Escoge una opcion</option>
								<option value="1">Extra Crédito</option>
								<option value="2">Examen Extraordinario</option>
								<option value="3">Paralelo</option>
								<option value="4">Proyecto de Grado I</option>
								<option value="5">Último Semestre</option>
							</select>
							<label>Tratamiento Especial</label> -->

							<i class="material-icons prefix">check</i>
							<select name="extracredito">
								<option selected>Selecciona</option>
								<option value="1">Extra Crédito</option>
							</select>
							<label>Extra Crédito</label>
						</div>
						<div class="input-field col s2">
							<select name="credm1">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>1ra Materia</label>
						</div>
						<div class="input-field col s2">
							<select name="credm2">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>2ra Materia</label>
						</div>
						<div class="input-field col s2">
							<select name="credm3">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>3ra Materia</label>
						</div>
						<div class="input-field col s2 ">
							<input type="number" name="credcred" id="credcred">
							<label for="credcred">Créditos a solicitar</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<i class="material-icons prefix">check</i>
							<select name="extraordinario">
								<option selected>Selecciona</option>
								<option value="2">Extraordinario</option>
							</select>
							<label>Extraordinario</label>
						</div>
						<div class="input-field col s4">
							<select name="extm1">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>1ra Materia</label>
						</div>
						<div class="input-field col s4">
							<select name="extm2">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>2ra Materia</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<i class="material-icons prefix">check</i>
							<select name="paralelo">
								<option selected>Selecciona</option>
								<option value="3">Paralelo</option>
							</select>
							<label>Paralelo</label>
						</div>
						<div class="input-field col s4">
							<select name="parm1">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>1ra Materia</label>
						</div>
						<div class="input-field col s4">
							<select name="parm2">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>2ra Materia</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<i class="material-icons prefix">check</i>
							<select name="ultsemestre">
								<option selected>Selecciona</option>
								<option value="5">Último Semestre</option>
							</select>
							<label>Último Semestre</label>
						</div>
						<div class="input-field col s2">
							<select name="ultsemm1">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>1ra Materia</label>
						</div>
						<div class="input-field col s2">
							<select name="ultsemm2">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>2ra Materia</label>
						</div>
						<div class="input-field col s2">
							<select name="ultsemm3">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>
								<option value="9"></option>
								<option value="10"></option>
							</select>
							<label>3ra Materia</label>
						</div>
						<div class="input-field col s2">
							<input type="number" name="ultsemcred" id="ultsemcred">
							<label for="ultsemcred">Créditos a solicitar</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<i class="material-icons prefix">check</i>
							<select name="grado1">
								<option selected >Selecciona</option>
								<option value="4">Proyecto de Grado I</option>
							</select>
							<label>Proyecto de Grado I</label>
						</div>
						<div class="input-field col s8">
							<i class="material-icons prefix">announcement</i>
							<textarea class="materialize-textarea" id="obs" name="obs"></textarea>
							<label for="obs">Observación</label>
						</div>
					</div>
					<div class="row">
						<button type="sutmit" class="btn waves-effect waves-light blue right">Enviar</button>
					</div>
				</form>
			</div>
		</div>

	</main>

	<script src="<?= base_url() ?>/application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/materialize/js/materialize.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/slick/slick.js"></script>

	<script>
		$(function(){

			$('.slik').slick({
				dots: true,
				autoplay: true,
				autoplaySpeed: 1000,
				infinite : true,
				slidesToShow: 4,
				slidesToScroll: 1
			});


			$('select').formSelect();


			// $('#form').submit(function(e){
			// 	e.preventDefault();

			// 	$.ajax({
			// 		method : "post",
			// 		url : "http://127.0.0.1/JFLO/6mill/index.php/solicitud_tratamiento_especial/aniadir",
			// 		data : $('#form').serialize()
			// 	})

			// 	.always(function(){
			// 		$('#nombre').val('');
			// 		$('#apellido').val('');
			// 		$('#cedula').val('');
			// 		$('#email').val('');
			// 		$('#telefono').val('');
			// 		$('#constancia').val('');
			// 		$('#obs').val('');
			// 		$('#tratamiento').val('Escoge una opcion');
			// 	})

			// 	.done(function(d){
			// 		M.toast({ html: '<i class="material-icons green">info</i>&nbsp;&nbsp; Formulario enviado exitosamente!' });
			// 		console.log(d);
			// 	});
			// })
		})
	</script>
</body>
</html>