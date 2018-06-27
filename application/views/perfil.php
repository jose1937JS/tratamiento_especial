<br>
<main class="container">
	
	<div class="row">

		<div class="card col s6">
			<div class="card-content">
				<div class="row">
					<div class="col offset-s10 ">
						<?php $idd = $infor[1]->id_estudiante ?>
						<?= anchor("pdfsingular/$idd", 'PDF', ['class'=>"btn red waves-light waves-light right", 'id'=>"pdfperfil"]) ?>
					</div>
				</div>
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
										<td class="center"><a title="editar unidad" onclick="document.getElementById('idunidad').value = <?= $value->idunidad ?>; document.getElementById('unidad').setAttribute('placeholder', <?= $value->unidades ?>)" class="waves-effect waves-light btn red modal-trigger" href="#edit"><?= $value->unidades ?></a></td>
										<td class="center">
											<?php if ($usuario == 'admin') {
												if($value->aprobado == 'false'){
													echo anchor("inicio_controller/aprobar_sol/$value->id/true",'<i class="material-icons">thumb_up</i>', 'data-tooltip="Aprobar Solicitud" class="tooltiped btn waves-effect waves-light btn-small orange" style="padding: 0 8px"');
												}
												else {
													echo anchor("inicio_controller/aprobar_sol/$value->id/false",'<i class="material-icons">thumb_down</i>', 'data-tooltip="Desaprobar Solicitud" class="tooltiped btn waves-effect waves-light btn-small green" style="padding: 0 8px"');
												}
											}
											else {
												if($value->aprobado == 'false'){
													echo anchor("inicio_controller/aprobar_sol/$value->id/true",'<i class="material-icons">thumb_up</i>', 'data-tooltip="Aprobar Solicitud" class="tooltiped btn waves-effect waves-light btn-small orange disabled" style="padding: 0 8px"');
												}
												else {
													echo anchor("inicio_controller/aprobar_sol/$value->id/false",'<i class="material-icons">thumb_down</i>', 'data-tooltip="Desaprobar Solicitud" class="tooltiped btn waves-effect waves-light btn-small green disabled" style="padding: 0 8px"');
												}
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

<div class="modal" id="edit" style="width: 400px">
	<div class="modal-content">
		<?= form_open('Inicio_controller/editarUnidad') ?>

			<input type="hidden" name="idunidad" id="idunidad">
			<input type="hidden" name="idest" value="<?= $infor[1]->idest ?>">

			<h5 class="center">Editar Unidad Curricular</h5>
			<br>
			<div class="input-field">
				<input type="number" name="unidad" id="unidad" placeholder="" autofocus="">
				<label for="unidad">Unidad de Crédito Actual</label>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn red">ACTUALIZAR</button>
			</div>
		</form>
	</div>
</div>