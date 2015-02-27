<div class="container" id="inicio">
    <?php 
    include "/secciones/cabecera.php";

		echo "<h1>Hola mundo</h1> <br>";
		echo "Hoy es: ".date("d-m-y");
		echo "<h2>Bienvenido: </h2>".$nombre;
		echo "<h2>SaveWalterWhite</h2><br>";
	?>
	<a href="index.php/prueba/opcion1">opcion 1</a><!--Es el inicio, el controlador que se va a utilizar y 
	la vista que se plantea abrir-->
	<a href="index.php/prueba/opcion2">opcion 2</a>
	<a href="index.php/prueba/opcion3">opcion 3</a>
	<a href="http://www.itcolima.edu.mx">Tec De Colima xD</a>
	<?php 

  include "/secciones/pie.php";
	 ?>
<div class="row">
	<div class="col-md-8 col-sm-4 rojo">
		<h3>Hi world</h3>
	</div>	 	
	<div class="col-md-4 col-sm-8 azul">
		<h1>Holi!</h1>
	</div>
</div>

</div>