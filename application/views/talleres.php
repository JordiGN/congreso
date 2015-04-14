<?php include "/secciones/cabecera.php";
include "/secciones/pie.php"; ?>


<div class="container">
<h1>Alta de Taller</h1>
<div class="row">

  <form action="index.php/prueba/grabaConferencia" method="post" class="form-inline">
    <div class="row">
      <form action="">
        <div class="form-group col-md-4">
          <label for="nom">Nombre</label>
          <input type="text" name="nom" class="form-control" placeholder="Nombre del taller">
        </div>
        <div class="form-group">
          <label for="lugar col-md-4">Cupo</label>
          <input type="text" name="lugar" class="form-control" placeholder="personas">
        </div>
        <div class="form-group col-md-4">
          <label for="ponente">Instructor</label>
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
        <div class="form-group col-md-8">
          <label for="evento">Evento</label> <select name="ponente" class="form-control" placeholder="Nombre del ponente">
            <?php
              foreach ($ponentes as $key => $ponente) {?>
                <option value="<?php echo $ponente['idponente'] ?>">
                    <?php echo $ponente['nombre'] ?>
                </option>
            <?php }
           ?>
          </select>
        </div>


        <div class="form-group">
          <label for="fecha col-md-3">Fecha</label>
          <input type="date" name="fecha" class="form-control" placeholder="dd/mm/aa">
        </div>
        <div class="form-group col-md-3">
          <label for="hora">Hora</label>
          <input type="time" name="hora" class="form-control" placeholder="hh:mm">
        </div>
        <div class="col-md-4"><button type="submit" class="pull-right btn btn-default">Enviar</button></div>
      </form>
    </div>
</div>

  </form>
</div>
