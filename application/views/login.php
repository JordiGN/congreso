<?php include "/secciones/cabecera.php" ?>

<div class="container">
  <form action="index.php/prueba/login" method="post">
  <div class="col md 4">
      <label for="cuenta">Cuenta</label>
      <input type="text" name="cuenta" placeholder="Cuenta de usuario">
  </div>
  <div class="col md 4">
     <label for="clave">Clave</label>
    <input type="text" name="clave" placeholder="Clave de usuario">
  </div>

    <button type="submit">Validar</button>
  </form>
</div>
<?php include "/secciones/pie.php" ?>
