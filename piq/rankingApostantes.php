
<?php
//	NO SE USA cabecera PORQUE SE HA INTEGRADO EN EL MENÚ
//include("cabecera.php");
?>


<?php
/*

		Clasificación de la porra
*/

	$query  = " SELECT APOSTANTE, TOTAL           ";
	$query .= "      , TOTAL1, COD_EQUIPO1        ";
	$query .= "      , TOTAL2, COD_EQUIPO2        ";
	$query .= "      , TOTAL3, COD_EQUIPO3        ";
	$query .= "      , TOTAL4, COD_EQUIPO4        ";
	$query .= "      , TOTAL5, COD_EQUIPO5        ";
	$query .= "      , RONDA1, RONDA2, RONDA3, RONDA4, RONDA5  ";
	$query .= "      , ESP_P1,  TOTAL6             ";
	$query .= "      , ESP_P2,  TOTAL7             ";
	$query .= "      , ESP_P3,  TOTAL8             ";
	$query .= "      , ESP_POS, TOTAL9             ";
	$query .= "      , EQ_FINAL,TOTAL10            ";
	$query .= "      , R_FINAL, TOTAL11            ";
	$query .= " FROM apuestas                     ";
	$query .= " WHERE ID_PENYA = '".$penya."'     ";
	$query .= "   AND NO_VACIA = '1'              ";
	$query .= " ORDER BY 2 DESC, 3 DESC, 5 DESC   ";
	$res = $db->query( $query );

?>


		<h3 class="text-center">C L A S I F I C A C I Ó N</h3>

		<br>
		<div class="table-responsive">
			<table class="table">
				<col  align="right">
				<col  align="left">
				<col  align="right">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<col  align="center">
				<tr class="barra" align="center">
					<td align="center" ><B> </B></td>
					<td align="center" ><B>APOSTANTE</B></td>
					<td align="center" colspan=22><B>PUNTOS<B></td>
				</tr>
<?php
	$n=0;
	$filapar = 0;
	$anterior = -999;
	while( $row = $res->fetchArray() ) {
		$n = $n +1;
		if( $filapar == 0) {
			echo " <tr> ";
			$filapar = 1;
		} else {
			$filapar = 0;
			echo " <tr bgcolor='#dddddd'> ";
		}
		echo " <td rowspan=2 align='right'><B> ";
			if( $row[1] == $anterior ) echo "+"; else echo $n."º";
		echo " </B></td> ";
		$anterior = $row[1];
		echo " <td rowspan=2 ><B> ".$row["APOSTANTE"] ." </B></td> ";
		echo " <td rowspan=2 class='ptosTot' align='right'><B> ".$row["TOTAL"] ." =</B></td> ";

		echo " <td class='".$row[12]."'>".$row[3]  ." </td> ";
		echo " <td class='".$row[13]."'>".$row[5]  ." </td> ";
		echo " <td class='".$row[14]."'>".$row[7]  ." </td> ";
		echo " <td class='".$row[15]."'>".$row[9]  ." </td> ";
		echo " <td class='".$row[16]."'>".$row[11] ." </td> ";
		echo " <td class='____'> ".$row["ESP_P1"]  ." </td> ";
		echo " <td class='____'> ".$row["ESP_P2"]  ." </td> ";
		echo " <td class='____'> ".$row["ESP_P3"]  ." </td> ";
		echo " <td class='____'> ".$row["ESP_POS"] ." </td> ";
		echo " <td class='____'> ".$row["EQ_FINAL"]." </td> ";
		echo " <td class='____'> ".$row["R_FINAL"] ." </td> ";
		echo " </tr> ";

		echo " <tr> ";
		echo " <td> "; if( $row[2]>=0 ) echo "+"; echo $row[2] ;	echo "</td> ";
		echo " <td> "; if( $row[4]>=0 ) echo "+"; echo $row[4] ;	echo "</td> ";
		echo " <td> "; if( $row[6]>=0 ) echo "+"; echo $row[6] ;	echo "</td> ";
		echo " <td> "; if( $row[8]>=0 ) echo "+"; echo $row[8] ;	echo "</td> ";
		echo " <td> "; if( $row[10]>=0) echo "+"; echo $row[10];	echo "</td> ";
		echo " <td> "; if( $row["TOTAL6"]>0 )  echo "+".$row["TOTAL6"];	 echo "</td> ";
		echo " <td> "; if( $row["TOTAL7"]>0 )  echo "+".$row["TOTAL7"];	 echo "</td> ";
		echo " <td> "; if( $row["TOTAL8"]>0 )  echo "+".$row["TOTAL8"];	 echo "</td> ";
		echo " <td> "; if( $row["TOTAL9"]>0 )  echo "+".$row["TOTAL9"];	 echo "</td> ";
		echo " <td> "; if( $row["TOTAL10"]>0 ) echo "+".$row["TOTAL10"]; echo "</td> ";
		echo " <td> "; if( $row["TOTAL11"]>0 ) echo "+".$row["TOTAL11"]; echo "</td> ";
		echo " </tr> ";
	}
?>


			</table>
		</div>

<!--
<BR>
<BR>
<CENTER><A HREF="javascript:window.history.back()"> V O L V E R </A></CENTER>
-->

<?php
//include("pie.php");
?>
