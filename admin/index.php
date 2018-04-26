<?php
include("cabecera.php");
?>

			<h3 class="text-center">PANEL DE CONTROL</h3>
			<br><br>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">SQLs</h4>
				<a type="button" href="escribirSql.php" class="btn btn-success col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">S Q L s</a>
			</div>
			<hr>

			<br><br>

			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">ACTUALIZAR</h4>
			</div>
			<br>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Puntuaciones Selecciones</h4>
				<a type="button" href="actualizar_puntuaciones_selecciones.php" class="btn btn-success col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">A C T U A L I Z A R</a>
			</div>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Eliminaciones Selecciones</h4>
				<a type="button" href="actualizar_eliminaciones_selecciones.php" class="btn btn-success col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">A C T U A L I Z A R</a>
			</div>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Puntuaciones Extras</h4>
				<a type="button" href="actualizar_puntuaciones_extras.php" class="btn btn-success col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">A C T U A L I Z A R</a>
			</div>
			<HR>
			<br>
			<div class="row">
				<h4 class="col-xs-4 col-xs-offset-1 col-md-2">Actualizar Totales</h4>
				<a type="button" href="actualizar_totales.php" class="btn btn-success col-xs-4 col-xs-offset-2  col-md-2 col-md-offset-0">A C T U A L I Z A R</a>
			</div>
			<hr>

<!--
<table border=0 cellpadding=5 cellspacing=5 width=680 >
<TR>
<TD>
	
<UL>

<LI><a href="escribirSql.php"           > SQLs </a></LI>
<br>
<br>
<LI><a href="actualizar_puntuaciones_selecciones.php"   > Actualizar puntuaciones Selecciones</a></LI>
<LI><a href="actualizar_eliminaciones_selecciones.php"  > Actualizar eliminaciones Selecciones</a></LI>
<LI><a href="actualizar_puntuaciones_extras.php"        > Actualizar puntuaciones Extras</a></LI>
<LI><a href="actualizar_totales.php"                    > Actualizar Totales</a> (creo que no es necesario)</LI>
<br>
<br>
<LI><a href="tabla_apuestas_crear.php"   > Crear tabla: apuestas</a> !CUIDADO!</LI>
<LI><a href="tabla_apuestas_ver.php"     > Ver apuestas</a></LI>
<br>
<br>
<LI><a href="tabla_selecciones_crear.php"> Crear tabla: selecciones</a> !CUIDADO!</LI>
<LI><a href="tabla_selecciones_ver.php"  > Ver selecciones</a></LI>

</UL>

</TD>
</TR>
</table>-->


<?php
include("pie.php");
?>
