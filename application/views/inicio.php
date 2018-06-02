<br>

<div class="headpdf">
	<div class="row">
		<div class="col s2">
			<img src="<?= base_url() ?>application/views/assets/images/unerg.png" width="150px" height="80px">
		</div>
		<div class="col s8 center bold">
			<span>UNIVERSIDAD RÓMULO GALLEGOS</span><br>
			<span>ÁREA DE INGENIERÍA EN SISTEMAS</span><br>
			<span>PROGRAMA DE INGENIERÍA EN INFORMÁTICA</span><br>
			<span>SOLICITUDES PARA TRATAMIENTOS ESPECIALES</span>
			<!-- <h6 id="tit"></h6> -->
		</div>
		<div class="col s2">
			<img src="<?= base_url() ?>application/views/assets/images/AIS.jpg" width="90px" height="80px">
		</div>
	</div>
</div>
	
<div class="container" id="app">
	<div class="card">
		<div class="card-content">
			<div class="row asd">
				<?= form_open('inicio_controller/filtro', "id='formu'") ?>
					<div class="input-field col s4">
						<select name="filtro" id="filtro">
							<option disabled selected>Escoge una opcion</option>
							<option value="1">Extra Crédito</option>
							<option value="2">Examen Extraordinario</option>
							<option value="3">Paralelo</option>
							<option value="4">Proyecto de Grado I</option>
							<option value="5">Último Semestre</option>
							<option value="true">Aprobados</option>
						</select>
						<label>Filtrar por:</label>
					</div>
					<div class="col s1">
						<button style="margin-top: 23px" type="submit" class="btn blue waves-effect waves-light"><i class="material-icons">send</i></button>
					</div>
				</form>
				<?= form_open('inicio_controller/filtro_ced', "class='col s5'") ?>
					<div class="input-field">
						<i class="material-icons prefix">search</i>
						<input type="text" name="search" id="search" required placeholder="Cédula a buscar" class="validate" pattern="[0-9]{7,9}">
					</div>
				</form>
				<div class="col s2">
					<button id="pdf" style="margin-top: 23px" class="btn waves-effect waves-light right red tooltiped" data-tooltip="PDF" data-position="top" type="button">
						<i class="material-icons">table_chart</i>
					</button>
				</div>
			</div>
			<table class="highlight">
				<thead>
					<tr>
						<th>Aprob.</th>
						<th>CEDULA</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>TELEFONO</th>
						<th>EMAIL</th>
						<th>TRATAMIENTO ESPECIAL</th>
						<th colspan="2" class="center func">FUNCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($est->result() as $val): ?>
						<tr>
							<td><?php ($val->aprobado == 'false')? print("<i class='material-icons tooltiped red-text' data-tooltip='no aplica'>close</i>") : print("<i class='material-icons tooltiped green-text' data-tooltip='aprobado'>check</i>") ?></td>
							<td><?= $val->cedula ?></td>
							<td><?= $val->nombre ?></td>
							<td><?= $val->apellido ?></td>
							<td><?= $val->telefono ?></td>
							<td><?= $val->email ?></td>
							<td><li><?= $val->tratamiento_esp ?></li></td>
							<?php if ($usuario == "admin"): ?>
								<td class="func">
									<?= anchor("admin/informacion/$val->id_estudiante", '<i class="material-icons">info</i>', ["class" => "btn btn-small waves-effect waves-light blue tooltiped btn-floating", "data-tooltip" => "Información"]) ?>
								</td>
								<!-- <td><a href="#editar" class="modal-trigger btn btn-small waves-effect waves-light orange tooltiped btn-floating" data-tooltip="Editar"><i class="material-icons">edit</i></a></td> -->
								<td class="func"><?= anchor("admin/eliminar/$val->id", '<i class="material-icons">delete</i>', ["class" => "btn btn-small waves-effect waves-light red tooltiped btn-floating", "data-tooltip" => "Eliminar"]) ?></td>
							<?php elseif($usuario == "secretaria"): ?>
								<td class="func">
									<?= anchor("admin/informacion/$val->id_estudiante", '<i class="material-icons">info</i>', ["class" => "btn btn-small waves-effect waves-light blue tooltiped btn-floating", "data-tooltip" => "Información"]) ?>
								</td>
								<!-- <td><?= anchor("admin/editar/$val->id_estudiante", '<i class="material-icons">edit</i>', 'class="disabled btn btn-small btn-floating"') ?></td> -->
								<td class="func">
									<?= anchor("admin/eliminar/$val->id", '<i class="material-icons">delete</i>', 'class="disabled btn btn-small btn-floating"') ?>
								</td>
							<?php endif ?>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot class="func">
					<tr>
						<th>Aprob.</th>
						<th>CEDULA</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>TELEFONO</th>
						<th>EMAIL</th>
						<th>TRATAMIENTO ESPECIAL</th>
						<th colspan="2" class="center">FUNCIONES</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>

<!-- <div id="editar" class="modal">
	<div class="modal-content">
		<h4>Modal Header</h4>
		<div class="card container">
			<div class="card-content">
				<?= form_open('inicio_controller/editar/') ?>
					<div class="row">
						<div class="input-field col s4">
							<input type="number" disabled id="cedula">
							<label for="nombre">Cédula</label>
						</div>
						<div class="input-field col s4">
							<i class="prefix material-icons">face</i>
							<input type="text" name="nombre" id="nombre" class="validate">
							<label for="nombre">Nombre</label>
						</div>
						<div class="input-field col s4">
							<i class="prefix material-icons">face</i>
							<input type="text" name="apelido" id="apelido" class="validate">
							<label for="apelido">Apelido</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="prefix material-icons">phone</i>
							<input type="number" name="telefono" id="telefono" class="validate">
							<label for="telefono">Teléfono</label>
						</div>
						<div class="input-field col s6">
							<i class="prefix material-icons">email</i>
							<input type="email" name="email" id="email" class="validate">
							<label for="email">Correo Electrónico</label>
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light red"><i class="material-icons">edit</i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> -->