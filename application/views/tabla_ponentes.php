<?php include "/secciones/cabecera.php";?>

<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Domicilio</th>
			<th></th>
		</tr>
		<?php 
		if(count($datos)==0) echo "No hay ponentes registrados";
		foreach ($datos as $value) {
			echo "<tr>";	
			echo "<td>".$value['nombre']."</td>";
			echo "<td>".$value['correo']."</td>";
			echo "<td>".$value['telefono']."</td>";
			echo "<td>".$value['domicilio']."</td>";
			echo "<td><a href='index.php/prueba/editaPonente/".$value['idponente']."'>
				<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
			<a/>
			<a href='index.php/prueba/borraPonente/".$value['idponente']."'>
				<span class='glyphicon glyphicon-trash' aria-hidden='true'
			<a/>

			</td>";
			
			echo "</tr>";
			# code...
		}

		 ?>
	</table>

	<a href="index.php/prueba/ponentes" class="btn btn-default btn-lg active"
	role="button">Agregar ponente</a>
</div>

<?php include "/secciones/pie.php"; ?>