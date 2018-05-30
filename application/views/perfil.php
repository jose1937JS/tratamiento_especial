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
					<li class="collection-item" style="padding: 10px"><b>Tratamiento Especial :</b>
						
						<table class="highlight responsive-table">
							<thead>
								<th>Materia</th>
								<th>Solicitud</th>
								<th>Unid. Cred</th>
								<th colspan="2" class="center">Aprobar</th>
							</thead>
							<tbody>
								<?php foreach($infor as $value): ?>
									<tr>
										<td><?= $value->materia ?></td>
										<td><?= $value->tratamiento_esp ?></td>
										<td class="center"><?= $value->unidades ?></td>
										<td class="center">
											<?php if($value->aprobado == 'false'){
												echo anchor("inicio_controller/aprobar_sol/$value->id",'<i class="material-icons">thumb_up</i>', 'data-tooltip="Aprobar Solicitud / No aplica" class="tooltiped btn waves-effect waves-light btn-small orange" style="padding: 0 8px"');
											} else {
												echo anchor("inicio_controller/aprobar_sol/$value->id",'<i class="material-icons">thumb_up</i>', 'data-tooltip="Solicitud Aprobada" class="tooltiped btn waves-effect waves-light btn-small green disabled" style="padding: 0 8px"');
											}
											?>
											
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
		<iframe class="right" src="<?= base_url() ?>application/third_party/<?= $infor[1]->constancia_notas ?>" frameborder="0" width="48%" height="550px"></iframe>
	</div>

</main>