<?php include "/secciones/cabecera.php";
include "/secciones/pie.php"; ?>


<div class="container">
<div class="row">
	<h1>Alta de evento</h1>
	<form action="index.php/prueba/AltaEventos" method="post" class="form-inline">
		<div class="row">
			<form action="">
				<div class="form-group">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre del evento">
				</div>
				<div class="form-group">
					<label for="fecha">Fecha</label>
					<input type="text" name="fecha" class="form-control" placeholder="dd/mm/aa">
				</div>
				<div class="form-group">
					<label for="lugar">Lugar</label>
					<input type="text" name="lugar" class="form-control" placeholder="Sede">
				</div>
				<div class="form-group">
					<label for="hora">Hora</label>
					<input type="text" name="Hora" class="form-control" placeholder="hh:mm">
				</div>
				<div class="form-group">
					<label for="costo">Costo</label>
					<input type="text" name="costo" class="form-control" placeholder="$$">
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		
</div>
	
	</form>	
</div>