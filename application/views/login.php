<?php include "/secciones/cabecera.php" ?>

<div class="container">
  <form action="index.php/prueba/login" method="post">
    <label for="usuario">Nombre de usuario</label>
    <input type="text" name="usuario" placeholder="Nombre de usuario">
    <label for="clave">Clave</label>
    <input type="text" name="clave" placeholder="Clave de usuario">
    <button type="submit">Validar</button>

  </form>
</div>
<?php include "/secciones/pie.php" ?>
