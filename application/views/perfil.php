<br>
<main class="container">
	
	<div class="row">

		<div class="card col s6">
			<div class="card-content">
				<ul class="collection with-header">
					<li class="collection-header"><span class="flow-text"><?= $infor[1]->nombre.' '.$infor[1]->apellido ?></span></li>
					<li class="collection-item"><b>Cédula :</b> <?= $infor[1]->cedula ?></li>
					<li class="collection-item"><b>Teléfono :</b> <?= $infor[1]->telefono ?></li>
					<li class="collection-item"><b>Email :</b> <?= $infor[1]->email ?></li>
					<li class="collection-item"><b>Tratamiento Especial :</b>
						<!-- <ul class="collapsible">
							<?php foreach($infor as $value): ?>
								<li>
									<div class="collapsible-header ">
										<table>
											<tr>
												<td><?= $value->tratamiento_esp ?></td>
												<td><?php ($value->aprobado == '0')? print("<i class='material-icons tooltiped' data-tooltip='aprobado'>check</i>") : print("<i class='material-icons tooltiped' data-tooltip='no aplica'>check</i>") ?></td>
												<td><button class="btn waves-effect waves-light btn-small green" style="padding: 0 8px"><i class="material-icons">face</i></button></div></td>
											</tr>
										</table>
									</div>	
									<div class="collapsible-body">ldadaskdjaskljdlasdj</div>

								</li>
								
							<?php endforeach ?>
						</ul> -->
						<table class="highlight responsive-table">
							<thead>
								<th>Solicitud</th>
								<th>Estatus</th>
								<th colspan="2" class="center">Acciones</th>
							</thead>
							<tbody>
								<?php foreach($infor as $value): ?>
									<tr>
										<td><?= $value->tratamiento_esp ?></td>
										<td><?php ($value->aprobado == '0')? print("<i class='material-icons tooltiped' data-tooltip='no aplica'>close</i>") : print("<i class='material-icons tooltiped' data-tooltip='aprobado'>check</i>") ?></td>
										<td>
											<?= anchor("inicio_controller/aprobar_sol/$value->id_estudiante",'<i class="material-icons">thumb_up</i>', 'data-tooltip="Aprobar Solicitud" class="tooltiped btn waves-effect waves-light btn-small green" style="padding: 0 8px"') ?>
										</td>
										<td>
											<button data-target="materias" data-tooltip="Informacíón" class="tooltiped modal-trigger btn waves-effect waves-light btn-small blue darken-2" style="padding: 0 8px">
												<i class="material-icons">info</i>
											</button>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</li>
					<li class="collection-item"><b>Observación :</b> <?= $infor[1]->observacion ?></li>
				</ul>
			</div>
		</div>
		<!-- <iframe class="right" src="<?= base_url() ?>application/third_party/<?= $infor[1]->constancia_notas ?>" frameborder="0" width="47%" height="520px"></iframe> -->
	</div>

</main>

<div class="modal" id="materias" style="width: 30%;">
	<div class="modal-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitatio</p>
	</div>
</div>