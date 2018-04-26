<?php
include("cabecera.php");
?>

<?php
/*
Página para meter la apuesta Final de la porra
Recibe $apostante $clave

Si $apostante está vacío, muestra el formulario para identificarse
Si no, comprueba la clave ...
... si es incorrecta, lo dice 
... si es correcta, muestra el formulario de introducción de la apuesta.
*/

$apostante = "";//'apostante';
$clave = 'qwe';
if (!empty($_POST)) {
  $apostante = $_POST['apostante'];
  $clave     = $_POST['clave'];
}
?>	

<h3 class="text-center">INTRODUCCIÓN DE APUESTAS</h3>

<BR>

<!-- ............. PREGUNTAR EL APOSTANTE Y LA CLAVE ..............-->

<?php
if( $apostante == "" ) {
?>

<FORM NAME="formcontrol" ACTION="meterApuestasFinal.php" METHOD="POST">
<div class="table-responsive">
<TABLE class="table">
<TR><TD colspan=2 align="center">

	<P><h4>Identificación</h4></P>

</TD></TR>
<TR><TD>

	<h4>Nombre:</h4>

</TD><TD>

	<SELECT size=1 name="apostante" >
		<OPTION value=''            > - - - - - - - - - - - - - </OPTION>
		<?php
			// consulta para nombres apostantes
			$query0  = " SELECT apostante ";
			$query0 .= " FROM apuestas    ";
			$query0 .= " WHERE ID_PENYA = '".$penya."'   ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[0]." </OPTION> ";
			}
		?>
	</SELECT>

</TD></TR>
<TR><TD>

	<h4>Clave:</h4>

</TD><TD>

	<INPUT TYPE="password" SIZE=15 MAXLENGTH=15 NAME="clave" value="">

</TD></TR>
<TR><TD colspan=2 align="center">

	<INPUT TYPE="submit" class="btn btn-lg btn-success" VALUE=" E N T R A R  ">

</TD></TR>
</TABLE>
</div>

</FORM>

<?php
} else {

//<!-- ............. COMPROBAR DATOS DE ENTRADA ..............-->

	// consulta para comprobar la clave
	$query1  = " SELECT clave    ";
	$query1 .= "      , cod_equipo1, cod_equipo2, cod_equipo3, cod_equipo4, cod_equipo5  ";
	$query1 .= "      , esp_p1,      esp_p2,      esp_p3,      esp_pos,     eq_final     ";
	$query1 .= " FROM apuestas   ";
	$query1 .= " WHERE ID_PENYA = '".$penya."'      ";
	$query1 .= "  AND apostante = '".$apostante."'  ";
	$res1 = $db->query( $query1 );
	$row = $res1->fetchArray();

if( $row[0] != $clave or $clave == "" or $row[0] == "" ) {
?>	

<!-- ............. DATOS DE ENTRADA INCORRECTOS ..............-->
<div class="table-responsive">
<TABLE class="table">
<TR><TD align="center">

	<BR>
	<P class="text-danger">Datos incorrectos</P>
	<BR>
	<INPUT TYPE="button" class="btn btn-lg btn-default" VALUE=" V O L V E R " onClick="javascript:window.history.back()">

</TD></TR>
</TABLE>
</div>


<?php
} else {
?>	

<!-- ............. DATOS DE ENTRADA CORRECTOS ..............-->
<!-- ............. RELLENAR LA FINAL          ..............-->
<div class="table-responsive">
<TABLE class="table table-bordered">
<TR><TD class="titulo3">

	<FORM NAME="form" ACTION="meterApuestasFinal2.php" METHOD="POST">

	<INPUT TYPE="hidden" NAME="apostante" value="<?= $apostante ?>">

	<P><h4>Introduce tu apuesta para la final</h4></P>
	<BR>

	DIOS:
	<INPUT type="text" class="text-success" size=13 name="cod_equipo1" id="cod_equipo1" value="<?= $row[1] ?>" disabled />

	<BR>
	<BR>
	FAVORITO:
	<INPUT type="text" class="text-success" size=13 name="cod_equipo2" id="cod_equipo2" value="<?= $row[2] ?>" disabled />

	<BR>
	<BR>
	GALLITO:
	<INPUT type="text" class="text-success" size=13 name="cod_equipo3" id="cod_equipo3" value="<?= $row[3] ?>" disabled />

	<BR>
	<BR>
	PELEÓN:
	<INPUT type="text" class="text-success" size=13 name="cod_equipo4" id="cod_equipo4" value="<?= $row[4] ?>" disabled />

	<BR>
	<BR>
	CENICIENTA:
	<INPUT type="text" class="text-success" size=13 name="cod_equipo5" id="cod_equipo5" value="<?= $row[5] ?>" disabled />

	<BR>
	<BR>
	Resultado ESPAÑA-PORTUGAL:
	<INPUT type="text" class="text-success" size=4 name="esp_p1" id="esp_p1" value="<?= $row[6] ?>" disabled/> *

	<BR>
	<BR>
	Resultado ESPAÑA-MARRUECOS:
	<INPUT type="text" class="text-success" size=4 name="esp_p2" id="esp_p2" value="<?= $row[7] ?>" disabled/> *

	<BR>
	<BR>
	Resultado ESPAÑA-IRÁN:
	<INPUT type="text" class="text-success" size=4 name="esp_p3" id="esp_p3" value="<?= $row[8] ?>" disabled/> *

	<BR>
	<BR>
	<h4>¿Hasta qué ronda llegará España?:</h4>
	<INPUT type="text" class="text-success" size=4  name="esp_pos" id="esp_pos" value="<?= $row[9] ?>" disabled/>

	<BR>
	<BR>
	<h4>Selecciones en la Final:</h4>
	<INPUT type="text" class="text-success" size=4  name="eq_final" id="eq_final" value="<?= $row[10] ?>" disabled/>

	<BR>
	<BR>
	<h4>Resultado de la Final Francia - Portugal</h4>
	<h5>(90 minutos)</h5>
	<INPUT type="text" size=4  name="r_final" id="r_final" pattern="(?:[0-9]|[1-9][0-9])-(?:[0-9]|[1-9][0-9])" required /> *

	<BR>
	<BR>
	<INPUT TYPE="submit" class="btn btn-lg btn-success" VALUE=" E N V I A R "></CENTER>
	</FORM>

	<BR>
	* Utilizar un guión (-) como separador. Ejemplo: 3-1

	
	<BR>
	<BR>
	<A type="button" class="btn btn-lg btn-default" HREF="javascript:window.history.back()"> C A N C E L A R </A>
	</P>

</TD></TR>
</TABLE>
</div>

<?php
}
}
?>	

<?php
include("pie.php");
?>
