<?php include "/secciones/cabecera.php";
include "/secciones/pie.php"; ?>


<div class="container">
<h1>Alta de Conferencia</h1>
<div class="row">
	
	<form action="index.php/prueba/grabaConferencia" method="post" class="form-inline">
		<div class="row">
			<form action="">
				<div class="form-group">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre del conferencia">
				</div>				
				<div class="form-group">
					<label for="lugar">Lugar</label>
					<input type="text" name="lugar" class="form-control" placeholder="Sede">
				</div>
				<div class="form-group">
					<label for="ponente">Ponente</label>
					<select name="ponente" class="form-control" placeholder="Nombre del ponente"></select> 
				</div>
				<div class="form-group">
					<label for="evento">Evento</label>
					<input type="text" name="evento" class="form-control" placeholder="Nombre del evento">
				</div>
				<input type="hidden" name="idevento" value="">
				<div class="form-group">
					<label for="fecha">Fecha</label>
					<input type="text" name="fecha" class="form-control" placeholder="dd/mm/aa">
				</div>				
				<div class="form-group">
					<label for="hora">Hora</label>
					<input type="text" name="Hora" class="form-control" placeholder="hh:mm">
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		
</div>
	
	</form>	
</div>