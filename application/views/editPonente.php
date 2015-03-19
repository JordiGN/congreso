<?php    include "/secciones/cabecera.php";?>
	
<div class="container">
<div class="row">
	<h1>Editat datos del ponente</h1>
	<form action="index.php/prueba/actualizaPonente" method="post" >
	<input type="hidden" name="id" value="<?php echo $ponente['idponente']?>">
		<div class="form-group">
			<form action="">
			<div class="col-md-4">
				<div class="form-group">
					<label for="nom">Nombre</label>
					<input type="text" name="nom" class="form-control" placeholder="Nombre" 
					value="<?php echo $ponente['nombre'] ?>">
					
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" name="correo" class="form-control" placeholder="usuario@mail.com"
					value="<?php echo $ponente['correo'] ?>">
				</div>
				
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="tel">Telefono</label>
					<input type="text" name="tel" class="form-control" placeholder="Telefono"
					value="<?php echo $ponente['telefono'] ?>">
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="dom">Domicilio</label>
					<textarea name="dom" class="form-control" placeholder="Datos del domicilio"><?php echo $ponente['domicilio'] ?></textarea>
				</div>
			</div>	
			<div class="col-md-4">
				<button type="submit" class="btn btn-default">Enviar</button>
				<a href="index.php/prueba/showPonentes" class="btn btn-default btn-lg active"
	role="button">Salir</a>
			</div>						
				
			</form>
		</div>
		
</div>
	<?php   include "/secciones/pie.php";	 ?>