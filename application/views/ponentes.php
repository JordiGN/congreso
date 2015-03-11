<?php    include "/secciones/cabecera.php";?>
	
<div class="container">
<div class="row">
	<h1>Registro de ponente</h1>
	<form action="index.php/prueba/AltaPonentes" method="post" >
		<div class="form-group">
			<form action="">
			<div class="col-md-4">
				<div class="form-group">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre" 
					value="<?php echo set_value('nom') ?>">
					<div class="error">
						<?php echo form_error('nom'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" name="correo" class="form-control" placeholder="usuario@mail.com"
					value="<?php echo set_value('correo') ?>">
				</div>
				<div class="error">
						<?php echo form_error('correo'); ?>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="tel">Telefono</label>
					<input type="text" name="tel" class="form-control" placeholder="Telefono"
					value="<?php if (isset($_POST['tel']))
					{
						echo $_POST['tel'];
						} ?>">
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="dom">Domicilio</label>
					<textarea name="dom" class="form-control" placeholder="Datos del domicilio"></textarea>
				</div>
			</div>	
			<div class="col-md-4">
				<button type="submit" class="btn btn-default">Enviar</button>
			</div>						
				
			</form>
		</div>
		
</div>
	<?php   include "/secciones/pie.php";	 ?>

	<div>
		<div class="col-md-4">Prueba</div>
		<div class="col-md-8">Probar</div>
	</div>