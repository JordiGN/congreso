<?php include "/secciones/encabezado.php" ?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>	
		<div class="col-md-6">
			<h2><?php echo $mensaje; ?></h2>
			<a href="<?php echo $ruta; ?>" class="btn btn-default btn-lg active"
			role="button">Regresar</a>		
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php include "/secciones/pie.php" ?>