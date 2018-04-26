<?php
include("cabecera.php");
?>

<?php
// TABLA selecciones



// ejecución de consulta de selección 
$result = $db->query( "SELECT * FROM selecciones" ); 

// muestra de los resultados con un bucle 
echo "<h4 class='text-center'>Tabla de Selecciones</h4>";
echo "<br>";
echo "<div class='table-responsive'>";
echo "<table class='table table-striped table-condensed'>";
echo "<tr><th>COD</th><th>GRUPO</th><th>BLOQUE</th><th>PARTIDO1</th><th>PARTIDO2</th><th>PARTIDO3</th><th>F1POSICION</th>";
echo "<th>PARTIDO4</th><th>PARTIDO5</th><th>PARTIDO6</th><th>PARTIDO7</th>";
echo "<th>TOTAL</th>";
echo "<th>EQUIPO</th>";
echo "<th>RONDA</th></tr>";
while ($row = $result->fetchArray()) { 
echo "<tr><td>";
 echo $row["COD_EQUIPO"]."</TD><TD class='text-center'>".$row["GRUPO"]."</TD><TD class='text-center'>".$row["VALORACION"]."</TD><TD class='text-center'>";
 echo $row["PARTIDO1"]."</TD><TD class='text-center'>". $row["PARTIDO2"]."</TD><TD class='text-center'>". $row["PARTIDO3"]."</TD><TD class='text-center'>"; 
 echo $row["F1POSICION"]."</TD><TD class='text-center'>"; 
 echo $row["PARTIDO4"]."</TD><TD class='text-center'>". $row["PARTIDO5"]."</TD><TD class='text-center'>". $row["PARTIDO6"]."</TD><TD class='text-center'>"; 
 echo $row["PARTIDO7"]."</TD><TD class='text-center'>". $row["TOTAL"]."</TD><TD class='text-center'>"; 
 echo $row["NOM_EQUIPO"]."</TD><TD>". $row["RONDA"]."</TD></TR>";
}
 echo "</TABLE>";
 echo "</DIV>";


include("pie.php");
?>
