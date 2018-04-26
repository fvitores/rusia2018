<?php
include("cabecera.php");
?>

<?php
include("nav_3.php");
?>

<?php
/*		Listado de selecciones
*/

	$query  = " SELECT NOM_EQUIPO, PARTIDO1, PARTIDO2, PARTIDO3,      ";
	$query .= "        F1POSICION,                                    ";
	$query .= "        PARTIDO4, PARTIDO5, PARTIDO6, PARTIDO7, TOTAL, ";
	$query .= "        RONDA, COD_EQUIPO                              ";
	$query .= " FROM selecciones                                      ";
	$query .= " ORDER BY TOTAL DESC, NOM_EQUIPO                       ";
	$res = $db->query( $query );

?>



			<h3 class="text-center"><b>P U N T U A C I O N E S</b></h3>

			<P class="text-center">(Tabla de resumen de los puntos que ha obtenido cada Selección)</P>
			<BR>

			<div class="table-responsive">

				<table class="table">
					<col align="right">
					<col align="center">
					<col align="center">
					<col align="left">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<col align="right">
					<tr class="barra" align="center">
						<td align="center" ><B> </B></td>
						<td align="center" colspan=3><B>SELECCIÓN</B></td>
						<td align="center" ><B>P1</B></td>
						<td align="center" ><B>P2</B></td>
						<td align="center" ><B>P3</B></td>
						<td align="center" ><B>Pos</B></td>
						<td align="center" ><B>1/8</B></td>
						<td align="center" ><B>1/4</B></td>
						<td align="center" ><B>1/2</B></td>
						<td align="center" ><B>F.</B></td>
						<td align="center"><B>TOTAL</B></td>
						<td align="center"><B>Elim.</B></td>
					</tr>
<?php
	$n=0;
	$filapar = 0;
	while( $row = $res->fetchArray() ) {
		$n = $n +1;
		if( $filapar == 0) {
			echo " <tr> ";
			$filapar = 1;
		} else {
			$filapar = 0;
			echo " <tr bgcolor='#dddddd'> ";
		}
		echo " <td><B>               ".$n."º      </B></td> ";
		echo " <td align='center'>   ".$row[11]." </td> ";
		echo " <td align='center'><img src='../comunes/".$row[11].".png'> </td> ";
		echo " <td><B>               ".$row[0] ." </B></td> ";
		echo " <td align='right'>    ".$row[1] ." </td> ";
		echo " <td align='right'>    ".$row[2] ." </td> ";
		echo " <td align='right'>    ".$row[3] ." </td> ";
		echo " <td align='right'>    ".$row[4] ." </td> ";
		echo " <td align='right'>    ".$row[5] ." </td> ";
		echo " <td align='right'>    ".$row[6] ." </td> ";
		echo " <td align='right'>    ".$row[7] ." </td> ";
		echo " <td align='right'>    ".$row[8] ." </td> ";
		echo " <td align='right'><B> ".$row[9]." </B></td> ";
		echo " <td align='right'>    ".$row[10]." </td> ";
		echo " </tr> ";
	}
?>

					</table>
				</div>



<?php
include("pie.php");
?>
