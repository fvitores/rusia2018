<?php
include("cabecera.php");
?>

<?php
/*		Panel de control (para actualizar todos los totales)
*/


	$updt  = " UPDATE  selecciones ";
	$updt .= " SET TOTAL =         ";
	$updt .= "      ifnull(PARTIDO1,0)   + ifnull(PARTIDO2,0)   +  ";
	$updt .= "      ifnull(PARTIDO3,0)   + ifnull(F1POSICION,0) +  ";
	$updt .= "      ifnull(PARTIDO4,0)   + ifnull(PARTIDO5,0)   +  ";
	$updt .= "      ifnull(PARTIDO6,0)   + ifnull(PARTIDO7,0)      ";
	$resu = $db->query( $updt );

	$q0  = " SELECT COD_EQUIPO, TOTAL, VALORACION, RONDA   ";
	$q0 .= " FROM selecciones ";
	$q0 .= " WHERE VALORACION > 0 ";
	$r0 = $db->query( $q0);
	
	while( $row0 = $r0->fetchArray() ) {

		$totaln  = "TOTAL".$row0[2];
		$equipon = "COD_EQUIPO".$row0[2];
		$rondan  = "RONDA".$row0[2];

		$u1  = " UPDATE apuestas   ";
		$u1 .= " SET ".$totaln." = ".$row0[1];
		$u1 .= "   , ".$rondan." = '".$row0[3]."' ";
		$u1 .= " WHERE ".$equipon." = '".$row0[0]."' ";
		$u1 .= " AND NO_VACIA='1' ";
		$r1 = $db->query( $u1 );
	}

	$u2  = " UPDATE apuestas   ";
	$u2 .= " SET TOTAL = TOTAL1 + TOTAL2 + TOTAL3 + TOTAL4 + TOTAL5 + TOTAL6 + TOTAL7 + TOTAL8 + TOTAL9 + TOTAL10 + TOTAL11 ";
	$r2 = $db->query( $u2 );


?>

<h4 class="text-center">Totales actualizados correctamente</h4>



<?php
include("pie.php");
?>