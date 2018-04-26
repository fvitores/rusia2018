<?php
include("cabecera.php");
?>

<FORM name="formu" action="escribirSql2.php" method="post">
<div class="table-responsive">
<TABLE class="table table-bordered">
<TR>
<TD align="center">

<TEXTAREA name="instru" cols=80 rows=8>
UPDATE SELECCIONES SET PARTIDO1='' WHERE COD_EQUIPO='';
UPDATE APUESTAS SET TOTAL6=10 WHERE ESP_P1='2-1';
UPDATE APUESTAS SET TOTAL9=10 WHERE ESP_POS='Cuartos';
{Campeón,Subcamp,Semis,Cuartos,Octavos,Grupos}
UPDATE APUESTAS SET TOTAL11=10 WHERE R_FINAL='0-1';
</TEXTAREA>

</TD>
</TR>
<TR>
<PRE>

CREATE TABLE selecciones (                                                                         
PARTIDO1     NUMBER,             // Puntuación 1º partido                                          
PARTIDO2     NUMBER,             // Puntuación 2º partido                                          
PARTIDO3     NUMBER,             // Puntuación 3º partido                                          
F1POSICION   NUMBER,             // Puntos por puesto 1ª fase                                      
PARTIDO4     NUMBER,             // Puntuación 4º partido                                          
PARTIDO5     NUMBER,             // Puntuación 5º partido                                          
PARTIDO6     NUMBER,             // Puntuación 6º partido                                          
PARTIDO7     NUMBER,             // Puntuación 7º partido (final)                                  
TOTAL        NUMBER,             // = suma de los anteriores                                       
RONDA        VARCHAR,            // Elim {Campeón,Subcamp,Semis,Cuartos,Octavos,Grupos} (____=Null)
COD_EQUIPO   VARCHAR PRIMARY KEY NOT NULL,                                                        
GRUPO        VARCHAR NOT NULL,   // Sin usar                                                       
VALORACION   NUMBER  NOT NULL,   // 1=Dios, 2=Favorito, 3=Gallito, 4=Peleón, 5=Cenicienta          
NOM_EQUIPO   VARCHAR NOT NULL    //                                                                
)                                                                                                  


CREATE TABLE apuestas (                                                                         
ID_PENYA     VARCHAR NOT NULL ,  // Varias peñas                                                
NO_VACIA     VARCHAR ,           // {1=Rellena, 0=Sin rellenar}                                 
COD_EQUIPO1  VARCHAR ,           // 1ª selección elegida                                        
TOTAL1       NUMBER ,            // =TOTAL de la tabla selecciones                              
RONDA1       VARCHAR ,           // =RONDA de la tabla selecciones                              
COD_EQUIPO2  VARCHAR ,                                                                          
TOTAL2       NUMBER ,                                                                           
RONDA2       VARCHAR ,                                                                          
COD_EQUIPO3  VARCHAR ,                                                                          
TOTAL3       NUMBER ,                                                                           
RONDA3       VARCHAR ,                                                                          
COD_EQUIPO4  VARCHAR ,                                                                          
RONDA4       VARCHAR ,                                                                          
TOTAL4       NUMBER ,                                                                           
COD_EQUIPO5  VARCHAR ,                                                                          
RONDA5       VARCHAR ,                                                                          
TOTAL5       NUMBER ,                                                                           
ESP_P1       VARCHAR ,           // Pronóstico 1º partido ESP                                   
TOTAL6       NUMBER ,            // Puntuación 1º partido ESP                                   
ESP_P2       VARCHAR ,                                                                          
TOTAL7       NUMBER ,                                                                           
ESP_P3       VARCHAR ,                                                                          
TOTAL8       NUMBER ,                                                                           
ESP_POS      VARCHAR ,           // ESP eliminada {Campeón,Subcamp,Semis,Cuartos,Octavos,Grupos}
TOTAL9       NUMBER ,                                                                           
EQ_FINAL     VARCHAR ,           // Equipos partido Final                                       
TOTAL10      NUMBER ,            // Puntuación Equipos Final                                    
R_FINAL      VARCHAR ,           // Pronóstico partido Final                                    
TOTAL11      NUMBER ,            // Puntuación partido Final                                    
TOTAL        NUMBER ,            // =suma de los 11 totales                                     
APOSTANTE    VARCHAR NOT NULL ,                                                                 
CLAVE        VARCHAR                                                                            
)                                                                                              

INSERT INTO apuestas VALUES('piq'    , '0', 'EQ1',0,'', 'EQ2',0,'', 'EQ3',0,'', 'EQ4',0,'', 'EQ5',0,'', '0-0',0, '0-0',0, '0-0',0, 'Elim',0, 'EQA-EQB',0, '0-0',0, 0, 'Adolfo','10ad')

</PRE>
</TR>
<TR>
<TD class="row">

		<INPUT type="submit" class="btn btn-success col-xs-3 col-xs-offset-1 col-md-2 col-md-offset-3" value="Ejecutar">
		<INPUT type="button" class="btn btn-default col-xs-3 col-xs-offset-4 col-md-2 col-md-offset-2" value="Borrar" onClick="document.formu.reset();">

</TD>
</TR>
</TABLE>
</div>

</FORM>

<?php
include("pie.php");
?>