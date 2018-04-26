<?php
include("cabecera.php");
?>

<?php
/*
Página para meter las apuestas de la porra
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

			<FORM NAME="formcontrol" ACTION="meterApuestas.php" METHOD="POST">

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
	$query1 .= " FROM apuestas   ";
	$query1 .= " WHERE ID_PENYA = '".$penya."'   ";
	$query1 .= "  AND apostante = '".$apostante."' ";
	$res1 = $db->query( $query1 );
	$row = $res1->fetchArray();

if( $row[0] != $clave or $clave == "" or $row[0] == "" ) {
?>	

<!-- ............. DATOS DE ENTRADA INCORRECTOS ..............-->

			<div class=table-responsive>
				<TABLE class="table">
					<TR><TD align="center">

						<BR>
						<P><h3 class="text-danger">Datos incorrectos</h3></P>
						<BR>
	<INPUT TYPE="button" class="btn btn-default btn-lg" VALUE=" V O L V E R " onClick="javascript:window.history.back()">

					</TD></TR>
				</TABLE>
			</div>


<?php
} else {
?>	

<!-- ............. DATOS DE ENTRADA CORRECTOS ..............-->
<!-- ............. RELLENAR LA PORRA ..............-->

			<div class="table-responsive">
				<TABLE class="table table-bordered">
					<TR><TD class="titulo3">

						<FORM NAME="form" ACTION="meterApuestas2.php" METHOD="POST">

							<INPUT TYPE="hidden" NAME="apostante" value="<?= $apostante ?>">

							<P><h4>Introduce tu apuesta</h4></P>
							<BR>

							DIOS:
							<SELECT size=1 name="cod_equipo1" >
								<OPTION value=''> -- elige una selección --- </OPTION>
		<?php
			// consulta para Equipos 1
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$query0 .= " WHERE VALORACION = 1 ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<BR>
							FAVORITO:
							<SELECT size=1 name="cod_equipo2" >
								<OPTION value=''> -- elige una selección --- </OPTION>
		<?php
			// consulta para Equipos 2
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$query0 .= " WHERE VALORACION = 2 ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<BR>
							GALLITO:
							<SELECT size=1 name="cod_equipo3" >
								<OPTION value=''> -- elige una selección --- </OPTION>
		<?php
			// consulta para Equipos 3
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$query0 .= " WHERE VALORACION = 3 ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<BR>
							PELEÓN:
							<SELECT size=1 name="cod_equipo4" >
								<OPTION value=''> -- elige una selección --- </OPTION>
		<?php
			// consulta para Equipos 4
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$query0 .= " WHERE VALORACION = 4 ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<BR>
							CENICIENTA:
							<SELECT size=1 name="cod_equipo5" >
								<OPTION value=''> -- elige una selección --- </OPTION>
		<?php
			// consulta para Equipos 5
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$query0 .= " WHERE VALORACION = 5 ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<BR>
							<h4>Resultado ESPAÑA-PORTUGAL:</h4>
							<INPUT type="text" size=4 name="esp_p1" id="esp_p1" pattern="(?:[0-9]|[1-9][0-9])-(?:[0-9]|[1-9][0-9])" required/> *

							<BR>
							<BR>
							<h4>Resultado ESPAÑA-IRÁN:</h4>
							<INPUT type="text" size=4  name="esp_p2" id="esp_p2" pattern="(?:[0-9]|[1-9][0-9])-(?:[0-9]|[1-9][0-9])" required/> *

							<BR>
							<BR>
							<h4>Resultado ESPAÑA-MARRUECOS:</h4>
							<INPUT type="text" size=4  name="esp_p3" id="esp_p3" pattern="(?:[0-9]|[1-9][0-9])-(?:[0-9]|[1-9][0-9])" required/> *

							<BR>
							<BR>
							<h4>¿Hasta qué ronda llegará España?:</h4>
							<SELECT size=1 name="esp_pos" >
								<OPTION value=''> -- elige una opción --- </OPTION>
								<OPTION value='Campeón'> Campeón          </OPTION>
								<OPTION value='Subcamp'> Subcampeón       </OPTION>
								<OPTION value='Semis'  > Semifinales      </OPTION>
								<OPTION value='Cuartos'> Cuartos de final </OPTION>
								<OPTION value='Octavos'> Octavos          </OPTION>
								<OPTION value='Grupos' > Fase de grupos   </OPTION>
							</SELECT>

							<BR>
							<BR>
							<h4>¿Qué selecciones jugarán la final?:</h4>
							<SELECT size=1 name="eqa_final" >
								<OPTION value=''> -- elige una opción --- </OPTION>
		<?php
			// consulta para Equipos Final
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>
							-
							<SELECT size=1 name="eqb_final" >
								<OPTION value=''> -- elige una opción --- </OPTION>
		<?php
			// consulta para Equipos Final
			$query0  = " SELECT COD_EQUIPO, NOM_EQUIPO ";
			$query0 .= " FROM selecciones    ";
			$res0 = $db->query( $query0 );
			while( $row0 = $res0->fetchArray() ) {
				echo " <OPTION value='".$row0[0]."' > ".$row0[1]." </OPTION> ";
			}
		?>
							</SELECT>

							<BR>
							<p class="text-muted">Y cuando se sepan las selecciones que han llegado ...</p>
							<p class="text-muted">Resultado de la Final:</p>
							<INPUT type="text" size=4  name="r_final" id="r_final" pattern="(?:[0-9]|[1-9][0-9])-(?:[0-9]|[1-9][0-9])" disabled /> * <!-- required-->

							<BR>
							<BR>
							<INPUT TYPE="submit" class="btn btn-lg btn-success" VALUE=" E N V I A R "></CENTER>
						</FORM>

						<BR>
						* Utilizar un guión (-) como separador. Ejemplo: 3-1

	
						<BR>
						<BR>
						<A type="button" class="btn btn-default btn-lg" HREF="javascript:window.history.back()"> C A N C E L A R </A>
	

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
