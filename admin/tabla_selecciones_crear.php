<?php
// TABLA selecciones

// creamos una conexión la base de datos(le introducimos el nombre del archive donde se almacena) 
//$db = sqlite_open("rusia2018.sqlite");
include("cabecera.php");

// crear la tabla 
//sqlite_query($db , "DROP TABLE selecciones" );
$db->query("DROP TABLE selecciones" );
$v  = " CREATE TABLE selecciones (      ";
$v .= " PARTIDO1     NUMBER,            "; // Puntuación 1º partido
$v .= " PARTIDO2     NUMBER,            "; // Puntuación 2º partido
$v .= " PARTIDO3     NUMBER,            "; // Puntuación 3º partido
$v .= " F1POSICION   NUMBER,            "; // Puntos por puesto 1ª fase
$v .= " PARTIDO4     NUMBER,            "; // Puntuación 4º partido
$v .= " PARTIDO5     NUMBER,            "; // Puntuación 5º partido
$v .= " PARTIDO6     NUMBER,            "; // Puntuación 6º partido
$v .= " PARTIDO7     NUMBER,            "; // Puntuación 7º partido (final)
$v .= " TOTAL        NUMBER,            "; // = suma de los anteriores
$v .= " RONDA        VARCHAR,           "; // Elim {Campeón,Subcamp,Semis,Cuartos,Octavos,Grupos} (____=Null)
$v .= " COD_EQUIPO   VARCHAR PRIMARY KEY NOT NULL, ";
$v .= " GRUPO        VARCHAR NOT NULL,  "; // Sin usar
$v .= " VALORACION   NUMBER  NOT NULL,  "; // 1=Dios, 2=Favorito, 3=Gallito, 4=Peleón, 5=Cenicienta
$v .= " NOM_EQUIPO   VARCHAR NOT NULL   "; //
$v .= " ) ";

echo $v;

$db->query( $v );

// inserción de registros 

$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','RUS','A',3,  'Rusia     ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ARA','A',5,  'Arabia S  ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','EGI','A',4,  'Egipto    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','URU','A',3,  'Uruguay   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','POR','B',2,  'Portugal  ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ESP','B',1,  'España    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','MAR','B',4,  'Marruecos ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','IRA','B',5,  'Irán      ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','FRA','C',2,  'Francia   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','AUS','C',5,  'Australia ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','PER','C',5,  'Perú      ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','DIN','C',4,  'Dinamarca ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ARG','D',2,  'Argentina ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ISL','D',5,  'Islandia  ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','CRO','D',3,  'Croacia   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','NIG','D',4,  'Nigeria   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','BRA','E',1,  'Brasil    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','SUI','E',4,  'Suiza     ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','COS','E',5,  'Costa Rica' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','SER','E',4,  'Serbia    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ALE','F',1,  'Alemania  ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','MEX','F',3,  'México    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','SUE','F',3,  'Suecia    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','COR','F',4,  'Corea Sur ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','BEL','G',3,  'Bélgica   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','PAN','G',5,  'Panamá    ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','TUN','G',5,  'Túnez     ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','ING','G',3,  'Inglaterra' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','POL','H',4,  'Polonia   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','SEN','H',5,  'Senegal   ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','COL','H',3,  'Colombia  ' ) ");
$db->query( " INSERT INTO selecciones VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '____','JAP','H',4,  'Japón     ' ) ");



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

// se cierra la conexión a la base de datos 
//sqlite_close($db); 
include("pie.php");
?>
