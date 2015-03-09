<?php    include "/secciones/cabecera.php";?>
	
<div class="container">
<div class="row">
	<h1>Registro de ponente</h1>
	<form action="index.php/prueba/AltaEventos" method="post" >
		<div class="form-group">
			<form action="">
				<div class="form-group">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" name="correo" class="form-control" placeholder="Correo">
				</div>
				<div class="form-group">
					<label for="tel">Telefono</label>
					<input type="text" name="tel" class="form-control" placeholder="Telefono">
				</div>
				<div class="form-group">
					<label for="dom">Domicilio</label>
					<textarea name="dom" class="form-control">Datos del domicilio</textarea>
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		
</div>
	<?php   include "/secciones/pie.php";	 ?>

	<div>
		<div class="col-md-4">Prueba</div>
		<div class="col-md-8">Probar</div>
	</div>