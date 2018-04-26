<?php
include("cabecera.php");
?>


<?php

/*		Listado de apuestas realizadas
*/

	$query2  = " SELECT APOSTANTE ";
	$query2 .= "      , COD_EQUIPO1 ";
	$query2 .= "      , COD_EQUIPO2 ";
	$query2 .= "      , COD_EQUIPO3 ";
	$query2 .= "      , COD_EQUIPO4 ";
	$query2 .= "      , COD_EQUIPO5 ";
	$query2 .= "      , NO_VACIA    ";
	$query2 .= "      , ESP_P1      ";
	$query2 .= "      , ESP_P2      ";
	$query2 .= "      , ESP_P3      ";
	$query2 .= "      , ESP_POS     ";
	$query2 .= "      , EQ_FINAL    ";
	$query2 .= "      , R_FINAL     ";
	$query2 .= " FROM  apuestas                  ";
	$query2 .= " WHERE ID_PENYA = '".$penya."'   ";
	$query2 .= "   AND NO_VACIA = '1'            ";
	$query2 .= " ORDER BY APOSTANTE              ";
	$res2 = $db->query( $query2 );

	$query0 = " SELECT COD_EQUIPO, NOM_EQUIPO FROM selecciones ";
	$res0 = $db->query( $query0 );
	while( $row0 = $res0->fetchArray() ) {
		$nombre["$row0[0]"] = "'".$row0[1]."'";
	}
?>


			<h3 class="text-center">A P U E S T A S</h3>
			<P class="text-center">(Tabla resumen de las apuestas realizadas por cada participante)</P>
			<br>

			<div class="table-responsive">

				<table class="table">
					<col align="left">
					<col align="left">
					<col align="left">
					<col align="left">
					<col align="left">
					<tr class="barra">
						<td align="center" ><B>APOSTANTE</B></td>
						<td align="center" ><B>BLOQUE1 DIOS<B></td>
						<td align="center" ><B>BLOQUE2 FAVORITO<B></td>
						<td align="center" ><B>BLOQUE3 GALLITO<B></td>
						<td align="center" ><B>BLOQUE4 PELEÓN<B></td>
						<td align="center" ><B>BLOQUE5 CENICIENTA<B></td>
						<td align="center" ><B>RESULT. ESP-POR<B></td>
						<td align="center" ><B>RESULT. ESP-IRA<B></td>
						<td align="center" ><B>RESULT. ESP-MAR<B></td>
						<td align="center" ><B>POSICIÓN ESPAÑA<B></td>
						<td align="center" ><B>SELECCIONES FINAL<B></td>
						<td align="center" ><B>RESULT. FINAL<B></td>
					</tr>

<?php
	while( $row = $res2->fetchArray() ) {
		echo " <tr> ";
		echo " <td><B> ".$row[0] ." </B></td> ";
		echo " <td align='center'> ".$nombre[ "$row[1]" ]." </td> ";
		echo " <td align='center'> ".$nombre[ "$row[2]" ]." </td> ";
		echo " <td align='center'> ".$nombre[ "$row[3]" ]." </td> ";
		echo " <td align='center'> ".$nombre[ "$row[4]" ]." </td> ";
		echo " <td align='center'> ".$nombre[ "$row[5]" ]." </td> ";
		echo " <td align='center'> ".$row[7] ." </td> ";
		echo " <td align='center'> ".$row[8] ." </td> ";
		echo " <td align='center'> ".$row[9] ." </td> ";
		echo " <td align='center'> ".$row[10] ." </td> ";
		echo " <td align='center'> ".$row[11]." </td> ";
		echo " <td align='center'> ".$row[12]." </td> ";
		echo " </tr> ";
	}
?>

				</table>
			</div>



<?php
include("pie.php");
?>
