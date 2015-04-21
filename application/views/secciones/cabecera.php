<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">IT Colima</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('index.php/prueba/eventos'); ?>">Evento <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo base_url('index.php/prueba/showConferencia'); ?>">Conferencias <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo base_url('index.php/prueba/showPonentes'); ?>">Ponentes <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('index.php/prueba/Talleres'); ?>">Talleres<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Instructores</a></li>
        <li><a href="#">Participante</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>



   <?php   if ($this->session->userdata('cuenta') != null):?>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="index.php/prueba/cierraSesion">
                    <?php echo $this->session->userdata('nombre'); ?>
                      <span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>
                    </a>
                </li>
              </ul>
            <?php
            endif ?>




<!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://youtube.com">HolaMundo</a></li>
            <li><a href="#">Yo Amo a Angelica Barreda</a></li>
            <li><a href="#">I just love to kiss her so much</a></li>
            <li class="divider"></li>
            <li><a href="#">Y no me import que tenga gripa</a></li>
          </ul>
        </li>
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
