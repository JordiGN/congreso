<?php include "/secciones/cabecera.php";
include "/secciones/pie.php"; ?>


<div class="container">
<h1>Alta de Conferencia</h1>
<div class="row">

	<form action="index.php/prueba/grabaConferencia" method="post" class="form-inline">
		<div class="row">
			<form action="">
				<div class="form-group col-md-4">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre del conferencia">
				</div>
				<div class="form-group">
					<label for="lugar col-md-8">Lugar</label>
					<input type="text" name="lugar" class="form-control" placeholder="Sede">
				</div>
				<div class="form-group col-md-3">
					<label for="ponente">Ponente</label>
					<select name="ponente" class="form-control" placeholder="Nombre del ponente">
						<?php
							foreach ($ponentes as $key => $ponente) {?>
								<option value="<?php echo $ponente['idponente'] ?>">
										<?php echo $ponente['nombre'] ?>
								</option>
						<?php }
					 ?>
					</select>

				</div>
				<div class="form-group col-md-3">
					<label for="evento">Evento</label>
					<input type="text" name="evento" class="form-control" value="<?php echo $evento['nombre'] ?>" readonly >
				</div>

				<input type="hidden" name="idevento" value="<?php echo $evento['idevento'] ?>">
				<div class="form-group">
					<label for="fecha col-md-3">Fecha</label>
					<input type="date" name="fecha" class="form-control" placeholder="dd/mm/aa">
				</div>
				<div class="form-group col-md-3">
					<label for="hora">Hora</label>
					<input type="time" name="hora" class="form-control" placeholder="hh:mm">
				</div>
				<button type="submit" class="pull-right btn btn-default">Enviar</button>
			</form>
		</div>

</div>

	</form>
</div>
