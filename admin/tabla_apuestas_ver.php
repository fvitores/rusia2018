<?php
include("cabecera.php");
?>


<?php
// TABLA apuestas



// ejecución de consulta de apuestas
$result = $db->query( "SELECT * FROM apuestas" );

// muestra de los resultados con un bucle
echo "<h4 class='text-center'>Tabla de Apuestas</h4>";
echo "<br>";
echo "<div class='table-responsive'>";
echo "<table class='table table-striped table-condensed'>";
echo "<tr><th>Peña</th><th>Vacía</th><th>Equipo1</th><th>Equipo2</th><th>Equipo3</th><th>Equipo4</th><th>Equipo5</th>";
echo "<th>ESP-CHE</th><th>ESP-TUR</th><th>ESP-CRO</th><th>ESP Pos</th>";
echo "<th>EQ FINAL</th><th>R FINAL</th>";
echo "<th>TOTAL</th>";
echo "<th>APOSTANTE</th></tr>";
while ($row = $result->fetchArray()) { 
echo "<tr><td>";
 echo $row["ID_PENYA"]."</td><td>". $row["NO_VACIA"]."</td><td>";
 echo $row["COD_EQUIPO1"]."=".$row["TOTAL1"]."</td><td>";
 echo $row["COD_EQUIPO2"]."=".$row["TOTAL2"]."</td><td>";
 echo $row["COD_EQUIPO3"]."=".$row["TOTAL3"]."</td><td>";
 echo $row["COD_EQUIPO4"]."=".$row["TOTAL4"]."</td><td>";
 echo $row["COD_EQUIPO5"]."=".$row["TOTAL5"]."</td>";

 echo "<td>".$row["ESP_P1"]. "=".$row["TOTAL6"]."</td>";
 echo "<td>".$row["ESP_P2"]. "=".$row["TOTAL7"]."</td>";
 echo "<td>".$row["ESP_P3"]. "=".$row["TOTAL8"]."</td>";
 echo "<td>".$row["ESP_POS"]."=".$row["TOTAL9"]."</td>";

 echo "<td>".$row["EQ_FINAL"]."=".$row["TOTAL10"]."</td>";
 echo "<td>".$row["R_FINAL"] ."=".$row["TOTAL11"]."</td>";

 echo "<td>--> ".$row["TOTAL"]."</td><td>";
 echo $row["APOSTANTE"]."/". $row["CLAVE"];
echo "</td></tr>";
}
echo "</table>";
echo "</div>";

include("pie.php");
?>
