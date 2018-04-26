<?php
include("cabecera.php");
?>

<?php
/*
Página para meter las apuestas de la porra
Recibe $apostante $cod_equipo1 $cod_equipo2 $cod_equipo3 $cod_equipo4  $cod_equipo5
       $esp_p1 $esp_p2 $esp_p3 $esp_pos 
       $eqa_finala $eqb_final $r_final
*/

$apostante   = $_POST['apostante'];
$cod_equipo1 = $_POST['cod_equipo1'];
$cod_equipo2 = $_POST['cod_equipo2'];
$cod_equipo3 = $_POST['cod_equipo3'];
$cod_equipo4 = $_POST['cod_equipo4'];
$cod_equipo5 = $_POST['cod_equipo5'];
$esp_p1      = $_POST['esp_p1'];
$esp_p2      = $_POST['esp_p2'];
$esp_p3      = $_POST['esp_p3'];
$esp_pos     = $_POST['esp_pos'];
$eqa_final   = $_POST['eqa_final'];
$eqb_final   = $_POST['eqb_final'];
$r_final     = "";//$_POST['r_final'];


	$updt  = " UPDATE apuestas SET ";
	$updt .= " 		NO_VACIA    = '1' ";
	$updt .= " 	, COD_EQUIPO1 = '".$cod_equipo1."' ";
	$updt .= " 	,	COD_EQUIPO2 = '".$cod_equipo2."' ";
	$updt .= " 	,	COD_EQUIPO3 = '".$cod_equipo3."' ";
	$updt .= " 	,	COD_EQUIPO4 = '".$cod_equipo4."' ";
	$updt .= " 	,	COD_EQUIPO5 = '".$cod_equipo5."' ";
	$updt .= " 	,	ESP_P1      = '".$esp_p1 ."' ";
	$updt .= " 	,	ESP_P2      = '".$esp_p2 ."' ";
	$updt .= " 	,	ESP_P3      = '".$esp_p3 ."' ";
	$updt .= " 	,	ESP_POS     = '".$esp_pos."' ";
	$updt .= " 	,	EQ_FINAL    = '".$eqa_final."-".$eqb_final."' ";
	$updt .= " 	,	R_FINAL     = '".$r_final."' ";
	$updt .= " WHERE ID_PENYA = '".$penya."'   ";
	$updt .= "  AND apostante = '".$apostante."' ";

	$res = $db->query( $updt );

/*
echo $updt;
echo "<br>";
echo $apostante     ;
echo "<br>";
echo $cod_equipo1   ;
echo "<br>";
echo $cod_equipo2   ;
echo "<br>";
echo $cod_equipo3   ;
echo "<br>";
echo $cod_equipo4   ;
echo "<br>";
echo $cod_equipo5   ;
echo "<br>";
echo $esp_p1        ;
echo "<br>";
echo $esp_p2        ;
echo "<br>";
echo $esp_p3        ;
echo "<br>";
echo $esp_pos       ;
echo "<br>";
echo $eq_final."-".$eq_final  ;
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
echo "<B> SELECCIONES: </B><BR>";
echo "<B> · </B>".$cod_equipo1."<BR>";
echo "<B> · </B>".$cod_equipo2."<BR>";
echo "<B> · </B>".$cod_equipo3."<BR>";
echo "<B> · </B>".$cod_equipo4."<BR>";
echo "<B> PARTIDOS DE ESPAÑA: </B><BR>";
echo "<B> · </B> España - Portugal ".$esp_p1."<BR>";
echo "<B> · </B> España - Marruecos ".$esp_p2."<BR>";
echo "<B> · </B> España - Irán ".$esp_p3."<BR>";
echo "<B> · </B> Llegará hasta: ".$esp_pos."<BR>";
echo "<B> FINAL: </B><BR>";
echo "<B> · </B>".$eqa_final."-".$eqb_final."<BR>";
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
