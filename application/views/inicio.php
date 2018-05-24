<br>
<div class="container" id="app">
	<div class="card">
		<div class="card-content">
			<?= form_open('inicio_controller/filtro') ?>
				<div class="row">
					<div class="input-field col s4">
						<select name="filtro" required>
							<option disabled selected>Escoge una opcion</option>
							<option value="1">Extra Crédito</option>
							<option value="2">Examen Extraordinario</option>
							<option value="3">Paralelo</option>
							<option value="4">Proyecto de Grado I</option>
							<option value="5">Último Semestre</option>
						</select>
						<label>Filtrar por:</label>
					</div>
					<div class="col s1">
						<button style="margin-top: 23px" type="submit" class="btn blue waves-effect waves-light"><i class="material-icons">send</i></button>
					</div>
					<div class="col s4 offset-s3">
						<button style="margin-top: 23px" class="btn waves-effect waves-light right red tooltiped" data-tooltip="PDF" data-position="top">
							<i class="material-icons">table_chart</i>
						</button>
					</div>
				</div>
			</form>
			<table class="highlight responsive-table display" id="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>CEDULA</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>TELEFONO</th>
						<th>EMAIL</th>
						<th>TRATAMIENTO ESPECIAL</th>
						<th colspan="3" class="center">FUNCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($est->result() as $val): ?>
						<tr>
							<td><?= $val->id_estudiante ?></td>
							<td><?= $val->cedula ?></td>
							<td><?= $val->nombre ?></td>
							<td><?= $val->apellido ?></td>
							<td><?= $val->telefono ?></td>
							<td><?= $val->email ?></td>
							<td><li><?= $val->tratamiento_esp ?></li></td>
							<?php if ($usuario == "admin"): ?>
								<td><?= anchor("admin/informacion/$val->id_estudiante", '<i class="material-icons">info</i>', ["class" => "btn btn-small waves-effect waves-light blue tooltiped btn-floating", "data-tooltip" => "Información"]) ?></td>
								<!-- <td><a href="#editar" class="modal-trigger btn btn-small waves-effect waves-light orange tooltiped btn-floating" data-tooltip="Editar"><i class="material-icons">edit</i></a></td> -->
								<td><?= anchor("admin/eliminar/$val->id", '<i class="material-icons">delete</i>', ["class" => "btn btn-small waves-effect waves-light red tooltiped btn-floating", "data-tooltip" => "Eliminar"]) ?></td>
							<?php elseif($usuario == "secretaria"): ?>
								<td><?= anchor("admin/informacion/$val->id_estudiante", '<i class="material-icons">info</i>', ["class" => "btn btn-small waves-effect waves-light blue tooltiped btn-floating", "data-tooltip" => "Información"]) ?></td>
								<!-- <td><?= anchor("admin/editar/$val->id_estudiante", '<i class="material-icons">edit</i>', 'class="disabled btn btn-small btn-floating"') ?></td> -->
								<td><?= anchor("admin/eliminar/$val->id", '<i class="material-icons">delete</i>', 'class="disabled btn btn-small btn-floating"') ?></td>
							<?php endif ?>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>CEDULA</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>TELEFONO</th>
						<th>EMAIL</th>
						<th>TRATAMIENTO ESPECIAL</th>
						<th colspan="3" class="center">FUNCIONES</th>
					</tr>
				</tfoot>
			</table>

	<!-- <table class="highlight responsive-table">
        <thead>
            <tr>
                <th>Aprob.</th>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>TRAT. ESP.</th>
                <th>INFO.</th>
                <th>EDIT.</th>
                <th>ELIM.</th>
            </tr>
        </thead>
        <tbody>
        	<tr v-for="(i, index) in info">
        		<td> {{ i.id }} </td>
        		<td> {{ i.cedula }} </td>
        		<td> {{ i.nombre }} </td>
        		<td> {{ i.apellido }} </td>
        	</tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Aprob.</th>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th >TELEFONO</th>
                <th>TRAT. ESP.</th>
                <th>INFO.</th>
                <th>EDIT.</th>
                <th>ELIM.</th>
            </tr>
        </tfoot>
    </table> -->

		</div>
	</div>
</div>

<div id="editar" class="modal">
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
</div>