<?php
// TABLA apuestas

include("cabecera.php");

// crear la tabla 
$db->query( "DROP TABLE apuestas" );
$v  = " CREATE TABLE apuestas (          ";
$v .= " ID_PENYA     VARCHAR NOT NULL ,  "; // Varias peñas
$v .= " NO_VACIA     VARCHAR ,           "; // {1=Rellena, 0=Sin rellenar}
$v .= " COD_EQUIPO1  VARCHAR ,           "; // 1ª selección elegida
$v .= " TOTAL1       NUMBER ,            "; // =TOTAL de la tabla selecciones
$v .= " RONDA1       VARCHAR ,           "; // =RONDA de la tabla selecciones
$v .= " COD_EQUIPO2  VARCHAR ,           ";
$v .= " TOTAL2       NUMBER ,            ";
$v .= " RONDA2       VARCHAR ,           ";
$v .= " COD_EQUIPO3  VARCHAR ,           ";
$v .= " TOTAL3       NUMBER ,            ";
$v .= " RONDA3       VARCHAR ,           ";
$v .= " COD_EQUIPO4  VARCHAR ,           ";
$v .= " RONDA4       VARCHAR ,           ";
$v .= " TOTAL4       NUMBER ,            ";
$v .= " COD_EQUIPO5  VARCHAR ,           ";
$v .= " RONDA5       VARCHAR ,           ";
$v .= " TOTAL5       NUMBER ,            ";
$v .= " ESP_P1       VARCHAR ,           "; // Pronóstico 1º partido ESP
$v .= " TOTAL6       NUMBER ,            "; // Puntuación 1º partido ESP
$v .= " ESP_P2       VARCHAR ,           ";
$v .= " TOTAL7       NUMBER ,            ";
$v .= " ESP_P3       VARCHAR ,           ";
$v .= " TOTAL8       NUMBER ,            ";
$v .= " ESP_POS      VARCHAR ,           "; // ESP eliminada {Campeón,Subcamp,Semis,Cuartos,Octavos,Grupos}
$v .= " TOTAL9       NUMBER ,            ";
$v .= " EQ_FINAL     VARCHAR ,           "; // Equipos partido Final 
$v .= " TOTAL10      NUMBER ,            "; // Puntuación Equipos Final
$v .= " R_FINAL      VARCHAR ,           "; // Pronóstico partido Final 
$v .= " TOTAL11      NUMBER ,            "; // Puntuación partido Final
$v .= " TOTAL        NUMBER ,            "; // =suma de los 11 totales
$v .= " APOSTANTE    VARCHAR NOT NULL ,  ";
$v .= " CLAVE        VARCHAR             "; 
$v .= " ) ";

$db->query( $v );

// inserción de registros 

$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Adolfo','10ad')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Vero','10ad')      ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Marcos','10ad')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Martín','10ad')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'César','jo02')     ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Mariví','jo02')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'David','jo02')     ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Edu','ei31')       ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Isa (Edu)','ei31') ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Edu Jr','ei31')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Fede','fc48')      ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Humphrey','jg97')  ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Isa (Juan)','jg97')");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Ingeniero','js64') ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sergio','js64')    ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Pin','alfa')       ");
$db->query( " INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sheila','alfa')    ");

$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Shei','789')       ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Pin','789')        ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sandra','789')     ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Lidia','789')      ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Rubén','789')      ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Asun','789')       ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sara','789')       ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'David','789')      ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Abu','789')        ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Caluca','789')     ");
$db->query( " INSERT INTO apuestas VALUES('vitores', '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Conchi','789')     ");

$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sheila','789')     ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Felipe','789')     ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Sandra','789')     ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Lidia','789')      ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Koke','789')       ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Nati','789')       ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'María','789')      ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Unai','789')       ");
$db->query( " INSERT INTO apuestas VALUES('perez'  , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Maxi','789')       ");

$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Félix P.','1234')  ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'María José','1234')");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Félix H.','1234')  ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Irene','1234')     ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Belén','1234')     ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Félix N.','1234')  ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Alonso','1234')    ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Carlos','1234')    ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Jesús','1234')     ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Leticia','1234')   ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Vicenta','1234')   ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Juan','jg97')      ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Isa','jg97')       ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Enma','1234')      ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Eva','1234')       ");
$db->query( " INSERT INTO apuestas VALUES('gudiel' , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Nicolás','1234')   ");
/*
*/                                                                                                   
                                                                                                     
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