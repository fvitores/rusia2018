<!DOCTYPE html>

<?php
//////////////////////////////////////////////////////////////////////////////
$penya = "piq";
//////////////////////////////////////////////////////////////////////////////
$db = new SQLite3('../admin/rusia2018.sqlite');
//////////////////////////////////////////////////////////////////////////////
?>


<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="FVB&FCG">
  <link rel="icon" href="../comunes/favicon.ico">
  
  <title>Porra Mundial Rusia 2018 - ADMIN</title>
  
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Custom styles and javascript for this template -->
  <link href="../css/estilos.css" rel="stylesheet">
  <style type="text/css"></style>
  <script languaje="Javascript" type="text/Javascript"></script>

  <!-- Fuentes de Google -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-xm-2 col-xs-2 col-sm-2 col-lg-2">
					<img src="../comunes/logo.png" class="img-responsive" width=150 height=165>
				</div>
				<div class="col-xm-8 col-xs-8 col-sm-8 col-lg-8 titulo1">
					<div class="titulo1b">PANEL DE CONTROL PORRA RUSIA 2018</div>
				</div>
				<div class="col-xm-2 col-xs-2 col-sm-2 col-lg-2">
					<img src="../comunes/zabivaka.png" class="img-responsive" width=150 height=165>
				</div>
			</div>

      <!-- B a r r a   d e   n a v e g a c i ó n -->

      <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" OnClick='abre("index.php")'>ADMIN</a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

              <li><a href="crearTablas.php">Crear Tablas</a></li>
              
            </ul>
          </div>
        </nav>
    </div> <!-- Cierra el page-header-->

			








