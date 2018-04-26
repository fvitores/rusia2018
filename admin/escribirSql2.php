<?php
include("cabecera.php");
?>

<?php

// Recibe la variable $instru y ejecuta las instrucciones sql en la base de datos
$instru = $_POST['instru'];

$instru = str_replace( chr(13).chr(10), " ", $instru ); // eliminar retornos de carro
$instru = str_replace( "\\", "", $instru );

$resultado0 = $db->exec( $instru );

?>


<h4 class="text-center"> Las instrucciones se han ejecutado correctamente </h4>

<br><br>
<div class="table responsive">
	<table class="table">
		<tr><td>

<?php
echo "RESULTADO = ".$resultado0. "<BR><BR>";
echo $instru;
?>

		</td></tr>
	</table>
</div>

<?php
include("pie.php");
?>
