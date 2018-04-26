<?php
include("cabecera.php");
?>

			<h3 class="text-center">PANEL DE CONTROL</h3>
			<br><br>
			

			<div class="row">
				<h4 class="col-xs-offset-1">CREAR TABLAS</h4>
			</div>
			<br>
			<h4 class="text-danger">¡ATENCIÓN!</h4>
			<h4>Esta acción resetea el continedo de las tablas a cero y es <span class="text-danger">irreversible</span></h4>
			<hr>
			<br><br>

			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Tabla: Apuestas</h4>
				<div class="btn-group col-xs-4 col-xs-offset-2 col-md-2 col-md-offset-0">
	          		<button type="button" class="btn btn-danger dropdown-toggle col-xs-12" data-toggle="dropdown">
	            		[ C R E A R ]
	            	<span class="caret"></span>
	          		</button>
	          		<ul class="dropdown-menu">
	          			<li role="presentation" class="dropdown-header">Esta acción es irreversible</li>
	            		<li class="text-danger"><a href="tabla_apuestas_crear.php"><b>[ C R E A R ]</b></a></li>
	          		</ul>
	          	</div>
			</div>
			<BR>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Tabla: Apuestas</h4>
				<a type="button" href="tabla_apuestas_ver.php" class="btn btn-info col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">V E R</a>
			</div>
			<hr>
			<br><br>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Tabla: Selecciones</h4>
				<div class="btn-group col-xs-4 col-xs-offset-2 col-md-2 col-md-offset-0">
	          		<button type="button" class="btn btn-danger dropdown-toggle col-xs-12" data-toggle="dropdown">
	            		[ C R E A R ]
	            	<span class="caret"></span>
	          		</button>
	          		<ul class="dropdown-menu">
	          			<li role="presentation" class="dropdown-header">Esta acción es irreversible</li>
	            		<li class="text-danger"><a href="tabla_selecciones_crear.php"><b>[ C R E A R ]</b></a></li>
	          		</ul>
	          	</div>
			</div>
			<br>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Tabla: Selecciones</h4>
				<a type="button" href="tabla_selecciones_ver.php" class="btn btn-info col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">V E R</a>
			</div>
			
			<hr>



<?php
include("pie.php");
?>
