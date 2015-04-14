<?php include "/secciones/cabecera.php";?>

<div class="container">
  <table class="table table-striped">
    <tr>
      <th>Titulo</th>
      <th>Lugar</th>
      <th>Hora</th>
      <th>Ponente</th>
      <th>Fecha</th>
      <th></th>
    </tr>
    <?php
    if(count($datos)==0) echo "No hay conferencias registradas";
    foreach ($datos as $value) {
      echo "<tr>";
      echo "<td>".$value['nombre']."</td>";
      echo "<td>".$value['lugar']."</td>";
      echo "<td>".$value['hora']."</td>";
      echo "<td>".$value['ponente_idponente']."</td>";
      echo "<td>".$value['fecha']."</td>";
      echo "<td><a href='index.php/prueba/editaConferencia/".$value['idconferencia']."'>
        <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
      <a/>
      <a href='index.php/prueba/borraConferencia/".$value['idconferencia']."'>
        <span class='glyphicon glyphicon-trash' aria-hidden='true'
      <a/>

      </td>";

      echo "</tr>";
      # code...
    }

     ?>
  </table>

  <a href="index.php/prueba/agregaConferencia" class="btn btn-default btn-lg active"
  role="button">Agregar Conferencia</a>
</div>

<?php include "/secciones/pie.php"; ?>
