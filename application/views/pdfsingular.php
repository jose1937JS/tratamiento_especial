<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/materialize/css/materialize.css">
	<style>
		p {

		}
		div.firma {
			margin-top: 180px;
		}
		.raya {
			margin: auto;
			border-bottom: 1px solid;
			width: 250px;
		}
	</style>
</head>
<body>

	<div class="headpdf">
		<div class="row">
			<div class="col s2">
				<img src="<?= base_url() ?>application/views/assets/images/unerg.png" width="150px" height="80px">
			</div>
			<div class="col s8 center bold">
				<span>UNIVERSIDAD RÓMULO GALLEGOS</span><br>
				<span>ÁREA DE INGENIERÍA EN SISTEMAS</span><br>
				<span>PROGRAMA DE INGENIERÍA EN INFORMÁTICA</span><br>
				<span>SOLICITUD PARA TRATAMIENTOS ESPECIALES</span>
				<!-- <h6 id="tit"></h6> -->
			</div>
			<div class="col s2">
				<img src="<?= base_url() ?>application/views/assets/images/AIS.jpg" width="90px" height="80px">
			</div>
		</div>
	</div>
	<br>
	<p>San Juan de los Morros, <?= date("l d F o H:i:s") ?></p>
	<br>
	<p>El estudiante <b><?= $pdf[0]->nombre .' '. $pdf[0]->apellido ?></b> titular de la cédula de identidad <b><?= $pdf[0]->cedula  ?></b> estudiante del Área de Ingeniería en Sistemas de ésta casa de estudios ha solicitado el(los) siguiente(s) tratamiento(s) especial(es) : </p>
	
	<table class="  container">
		<thead>
			<th>Materia</th>
			<th>Solicitud</th>
			<th>Unid. Cred</th>
			<th colspan="2" class="center">¿Aprobado?</th>
		</thead>
		<tbody>
			<?php foreach($pdf as $value): ?>
				<tr>
					<td><?= $value->materia ?></td>
					<td><?= $value->tratamiento_esp ?></td>
					<td class="center"><?= $value->unidades ?></td>
					<td class="center">
						<?php if($value->aprobado == 'false'){
							echo "NO";
						}
						else {
							echo "SI";
						}
						?>
						
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br>

	<div class="row firma">
		<div class="raya"></div>
		<p class="center">Fulanito de Tal :</p>
		<p class="center">Cargo Importante</p>
	</div>

	<script src="<?= base_url() ?>/application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script>
		$(function(){
			print()
			setInterval(function(){
				history.back()
			}, 1000)
		})
	</script>
</body>
</html>