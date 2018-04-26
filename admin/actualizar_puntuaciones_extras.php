<?php
include("cabecera.php");
?>

<?php
/*		Panel de control (para actualizar las puntuaciones extras)
		Recibe: $campototal $puntosextra $campo $valor (para construir el update)
*/

$campototal  = "";
$puntosextra = "";
$campo       = "";
$valor       = "";
if (!empty($_POST)) {
	$campototal  = $_POST['campototal'];
	$puntosextra = $_POST['puntosextra'];
	$campo       = $_POST['campo'];
	$valor       = $_POST['valor'];
}

if( $campototal != "" && $campo != "" ) {
	
	$updt  = " UPDATE  apuestas                               ";
	$updt .= " SET " .$campototal. " = " .$puntosextra. "     ";
	$updt .= " WHERE " .$campo. " = '" .$valor. "'            ";
	$updt .= " AND NO_VACIA = '1'                             ";
	echo $updt."<br>";
	$resu = $db->query( $updt );
}

$query  = " SELECT ID_PENYA, APOSTANTE                                                ";
$query .= "      , COD_EQUIPO1, COD_EQUIPO2, COD_EQUIPO3, COD_EQUIPO4, COD_EQUIPO5    ";
$query .= "      , ESP_P1, ESP_P2, ESP_P3, ESP_POS, EQ_FINAL, R_FINAL                 ";
$query .= "      , TOTAL1, TOTAL2, TOTAL3, TOTAL4, TOTAL5                             ";
$query .= "      , TOTAL6, TOTAL7, TOTAL8, TOTAL9, TOTAL10, TOTAL11                   ";
$query .= "      , TOTAL                                                              ";
$query .= " FROM apuestas                                    ";
$query .= " WHERE NO_VACIA = '1'                             ";
$query .= " ORDER BY  ID_PENYA, APOSTANTE                    ";
$res = $db->query( $query );

?>


<!-- <?= $updt ?>  Para depuración -->

<h4 class="text-center">Actualizar Puntuaciones Extras</h4>
<BR>
<BR>

<!-- CONSTRUIR UPDATE -->


<form name="f" ACTION="actualizar_puntuaciones_extras.php" METHOD="POST">

	<div class="row">
		<div class="col-xs-12  col-sm-10 col-md-5">
			SET 
			<SELECT size=1 name="campototal">
				<OPTION value=''> -- elige un campo ---    </OPTION>
				<OPTION value='TOTAL6'    > TOTAL6 (PARTIDO1 DE ESPAÑA)    </OPTION>
				<OPTION value='TOTAL7'    > TOTAL7 (PARTIDO2 DE ESPAÑA)    </OPTION>
				<OPTION value='TOTAL8'    > TOTAL8 (PARTIDO3 DE ESPAÑA)    </OPTION>
				<OPTION value='TOTAL9'    > TOTAL9 (POSICION ESPAÑA)       </OPTION>
				<OPTION value='TOTAL10'   > TOTAL10 (EQUIPOS FINAL)        </OPTION>
				<OPTION value='TOTAL11'   > TOTAL11 (RESULTADO FINAL)      </OPTION>
			</SELECT>
			 =
			<INPUT SIZE=5 NAME="puntosextra" VALUE="10">
		</div>
		<br>
		<div class="col-xs-12  col-sm-10 col-md-5">
			WHERE 
			<SELECT size=1 name="campo">
				<OPTION value=''> -- elige un campo ---    </OPTION>
				<OPTION value='ESP_P1'    > PARTIDO1 DE ESPAÑA     </OPTION>
				<OPTION value='ESP_P2'    > PARTIDO2 DE ESPAÑA     </OPTION>
				<OPTION value='ESP_P3'    > PARTIDO3 DE ESPAÑA     </OPTION>
				<OPTION value='ESP_POS'   > POSICION ESPAÑA        </OPTION>
				<OPTION value='EQ_FINAL'  > EQUIPOS FINAL          </OPTION>
				<OPTION value='R_FINAL'   > RESULTADO FINAL        </OPTION>
			</SELECT>
			= 
			<INPUT SIZE=5 NAME="valor" VALUE="">
		</div>
	</div>
	<br><br>

	<div class="row">
		<div class="col-xs-5">
			<INPUT class="btn btn-warning" TYPE="submit" VALUE=" EJECUTAR ">
		</div>
</form>

		<div class="col-xs-5 col-xs-offset-2 text-right">
			<A type="button" class="btn btn-success" HREF="actualizar_totales.php"> Actualizar totales </A>
		</div>
	</div>
	<hr>



<BR>
<BR>

<!-- TABLA DE PUNTUACIONES -->
<div class="table-responsive">
<table class="table table-striped table-condensed">
	
<tr>
	<td><p><B>APOSTANTE</B></p></td>
	<td class="text-center"><p><B>DIOS<B></p></td>
	<td class="text-center"><p><B>FAVORITO<B></p></td>
	<td class="text-center"><p><B>GALLITO<B></p></td>
	<td class="text-center"><p><B>PELEÓN<B></p></td>
	<td class="text-center"><p><B>CENICIENTA<B></p></td>
	<td class="text-center"><p><B>ESP-POR<B></p></td>
	<td class="text-center"><p><B>ESP-IRA<B></p></td>
	<td class="text-center"><p><B>ESP-MAR<B></p></td>
	<td class="text-center"><p><B>ESP-Pos<B></p></td>
	<td class="text-center"><p><B>EQ.FINAL</B></p></td>
	<td class="text-center"><p><B>R.FINAL</B></p></td>
	<td class="text-center"><p><B>TOTAL</B></p></td>
</tr>
<?php
	while( $row = $res->fetchArray() ) {
		echo " <tr> ";
		echo " <td><P><B> ".$row[0] ."-".$row[1]." </B></P></td> ";
		echo " <td class='text-center'><P>    ".$row[2] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[3] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[4] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[5] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[6] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[7] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[8] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[9] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[10]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[11]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[12]." </P></td> ";
		echo " <td rowspan=2 class='text-center text-info'><h4> ".$row[22]." </h4></td> ";
		echo " </tr><tr> ";
		echo " <td><P>                 </P></td> ";
		echo " <td class='text-center'><P>    ".$row[13]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[14]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[15]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[16]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[17]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[18]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[19]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[20]." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[21]." </P></td> ";
		echo " </tr> "; 
	}
?>

</table>
</div>

<?php
include("pie.php");
?>