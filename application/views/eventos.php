<?php include "/secciones/cabecera.php";
include "/secciones/pie.php"; ?>


<div class="container">
	<div class="row">
		<h1>Alta de evento</h1>
		<form action="index.php/prueba/AltaEventos" method="post" class="">
					<div class="form-group col-md-6">
						<label for="nom">Nombre</label>
						<input type="text" name="nom" class="form-control" placeholder="Nombre del evento">
					</div>
					<div class="form-group col-md-6">
						<label for="fecha">Fecha</label>
						<input type="text" name="fecha" class="form-control" placeholder="dd/mm/aa">
					</div>
					<div class="form-group col-md-12">
						<label for="lugar">Lugar</label>
						<input type="text" name="lugar" class="form-control" placeholder="Sede">
					</div>
					<div class="form-group col-md-6">
						<label for="hora">Hora</label>
						<input type="text" name="Hora" class="form-control" placeholder="hh:mm">
					</div>
					<div class="form-group col-md-6">
						<label for="costo">Costo</label>
						<input type="text" name="costo" class="form-control" placeholder="$$">
					</div>
					<div class="col-md-1">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>

				</form>
			</div>
	</div>
</div>
