<?php
include("cabecera.php");
?>

<?php
/*
Página para meter las apuesta final de la porra
Recibe $apostante $r_final
*/

$apostante   = $_POST['apostante'];
$r_final = $_POST['r_final'];


	$updt  = " UPDATE apuestas SET ";
	$updt .= " 		NO_VACIA    = '1' ";
	$updt .= " 	,	R_FINAL     = '".$r_final."' ";
	$updt .= " WHERE ID_PENYA = '".$penya."'   ";
	$updt .= "  AND apostante = '".$apostante."' ";

	$res = $db->query( $updt );

/*
echo $updt;
echo "<br>";
echo $apostante     ;
echo "<br>";
echo $r_final       ;
echo "<br>";
*/

if( !$res ) {
	echo " ---- ERROR ---- ";
}  else {
?>


<BR>
<font style="font-size:16pt;">I N T R O D U C C I Ó N &nbsp;&nbsp;&nbsp; D E &nbsp;&nbsp;&nbsp; A P U E S T A S</b></font>
</CENTER>
<BR>
<BR>

<CENTER>
<P style="font-size:14pt;">
<b>M U Y &nbsp;&nbsp;&nbsp; B I E N , &nbsp;&nbsp;&nbsp; <?= $apostante ?></b>
</P>
<BR>
<P>Apuesta introducida:<BR>
<?php
//echo "<B> SELECCIONES: </B><BR>";
//echo "<B> · </B>".$cod_equipo1."<BR>";
//echo "<B> · </B>".$cod_equipo2."<BR>";
//echo "<B> · </B>".$cod_equipo3."<BR>";
//echo "<B> · </B>".$cod_equipo4."<BR>";
//echo "<B> · </B>".$cod_equipo5."<BR>";
//echo "<B> PARTIDOS DE ESPAÑA: </B><BR>";
//echo "<B> · </B> España - Chequia ".$esp_p1."<BR>";
//echo "<B> · </B> España - Turquía ".$esp_p2."<BR>";
//echo "<B> · </B> España - Croacia ".$esp_p3."<BR>";
//echo "<B> · </B> Llegará hasta: ".$esp_pos."<BR>";
echo "<B> FINAL: </B><BR>";
//echo "<B> · </B>".$eq_final."<BR>";
echo "<B> · </B>".$r_final."<BR>";
?>
</p>
<BR>
<BR>
<A HREF="index.php"> V O L V E R </A>

<?php
}
?>

<?php
include("pie.php");
?>
