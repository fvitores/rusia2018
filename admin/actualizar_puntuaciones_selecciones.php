<?php
include("cabecera.php");
?>

<?php
/*		Panel de control (para actualizar las puntuaciones de las selecciones)
		Recibe: $cod_equipo $campo $valor (para construir el update)
*/

$valor      = "";
$cod_equipo = "";
$campo      = "";
if (!empty($_POST)) {
	$valor      = $_POST['valor'];
	$cod_equipo = $_POST['cod_equipo'];
	$campo      = $_POST['campo'];
}



if( $cod_equipo != "" && $campo != "" ) {
	
	$updt  = " UPDATE  selecciones                               ";
	$updt .= " SET TOTAL = (TOTAL + " .$valor. " - ifnull(" .$campo. ",0)) ";
	if( $valor == "" ) $valor = " NULL ";	
	$updt .= "   , " .$campo. " = " .$valor. "                   ";
	$updt .= " WHERE COD_EQUIPO ='" .$cod_equipo. "'             "; echo $updt."<br>";
	$resu = $db->query( $updt );
}

$query  = " SELECT NOM_EQUIPO, PARTIDO1, PARTIDO2, PARTIDO3, ";
$query .= "        F1POSICION,                               ";
$query .= "        PARTIDO4, PARTIDO5, PARTIDO6, PARTIDO7,   ";
$query .= "        TOTAL, COD_EQUIPO                         ";
$query .= " FROM selecciones                                 ";
$query .= " ORDER BY  NOM_EQUIPO                             ";
$res = $db->query( $query );

?>

<!-- <?= $updt ?>  Para depuración -->

<h4 class="text-center">Actualizar Puntuaciones Selecciones</h4>
<br><br>



<!-- CONSTRUIR UPDATE -->


<form name="f" ACTION="actualizar_puntuaciones_selecciones.php" METHOD="POST">
	
	<div class="row">
		<div class="col-xs-5 col-sm-6 col-md-5">
			SET 
			<SELECT size=1 name="campo">
				<OPTION value=''> -- elige un campo --     </OPTION>
				<OPTION value='PARTIDO1'    > PARTIDO1     </OPTION>
				<OPTION value='PARTIDO2'    > PARTIDO2     </OPTION>
				<OPTION value='PARTIDO3'    > PARTIDO3     </OPTION>
				<OPTION value='F1POSICION'  > F1POSICION   </OPTION>
				<OPTION value='PARTIDO4'    > PARTIDO4     </OPTION>
				<OPTION value='PARTIDO5'    > PARTIDO5     </OPTION>
				<OPTION value='PARTIDO6'    > PARTIDO6     </OPTION>
				<OPTION value='PARTIDO7'    > PARTIDO7     </OPTION>
			</SELECT>
	 		= 
			<INPUT SIZE=3 NAME="valor" VALUE="">
		</div>
		<div class="col-xs-7 col-sm-6 col-md-5">
			WHERE COD_EQUIPO = 
			<SELECT size=1 name="cod_equipo">
				<OPTION value=''> -- elige una selección -- </OPTION>
				<OPTION value='RUS'> Rusia      </OPTION>
				<OPTION value='ARA'> Arabia S   </OPTION>
				<OPTION value='EGI'> Egipto     </OPTION>
				<OPTION value='URU'> Uruguay    </OPTION>
				<OPTION value='POR'> Portugal   </OPTION>
				<OPTION value='ESP'> España     </OPTION>
				<OPTION value='MAR'> Marruecos  </OPTION>
				<OPTION value='IRA'> Irán       </OPTION>
				<OPTION value='FRA'> Francia    </OPTION>
				<OPTION value='AUS'> Australia  </OPTION>
				<OPTION value='PER'> Perú       </OPTION>
				<OPTION value='DIN'> Dinamarca  </OPTION>
				<OPTION value='ARG'> Argentina  </OPTION>
				<OPTION value='ISL'> Islandia   </OPTION>
				<OPTION value='CRO'> Croacia    </OPTION>
				<OPTION value='NIG'> Nigeria    </OPTION>
				<OPTION value='BRA'> Brasil     </OPTION>
				<OPTION value='SUI'> Suiza      </OPTION>
				<OPTION value='COS'> Costa Rica </OPTION>
				<OPTION value='SER'> Serbia     </OPTION>
				<OPTION value='ALE'> Alemania   </OPTION>
				<OPTION value='MEX'> México     </OPTION>
				<OPTION value='SUE'> Suecia     </OPTION>
				<OPTION value='COR'> Corea Sur  </OPTION>
				<OPTION value='BEL'> Bélgica    </OPTION>
				<OPTION value='PAN'> Panamá     </OPTION>
				<OPTION value='TUN'> Túnez      </OPTION>
				<OPTION value='ING'> Inglaterra </OPTION>
				<OPTION value='POL'> Polonia    </OPTION>
				<OPTION value='SEN'> Senegal    </OPTION>
				<OPTION value='COL'> Colombia   </OPTION>
				<OPTION value='JAP'> Japón      </OPTION>
			</SELECT>
		</div>
	</div>
	<br><br>

	<div class="row">
		<div class="col-xs-5">
			<INPUT class="btn btn-warning" TYPE="submit" VALUE=" EJECUTAR ">
		</div>
</form>

		<div class="col-xs-5 col-xs-offset-2 text-right">
			<A type="button" class="btn btn-success" HREF="actualizar_totales.php"> Actualizar totales </A>
		</div>
	</div>
	<hr>


<BR>
<BR>

<!-- TABLA DE PUNTUACIONES -->
<div class="table-responsive">
<table class="table table-striped table-condensed">
	
<tr>
	<td><p><B>EQUIPO</B></p></td>
	<td class='text-center'><p><B>Part1<B></p></td>
	<td class='text-center'><p><B>Part2<B></p></td>
	<td class='text-center'><p><B>Part3<B></p></td>
	<td class='text-center'><p><B>Posic<B></p></td>
	<td class='text-center'><p><B>Part4<B></p></td>
	<td class='text-center'><p><B>Part5<B></p></td>
	<td class='text-center'><p><B>Part6<B></p></td>
	<td class='text-center'><p><B>Part7</B></p></td>
	<td class='text-center'><p><B>TOTAL</B></p></td>
	<td><p><B>COD</B></p></td>
</tr>
<?php
	while( $row = $res->fetchArray() ) {
		echo " <tr> ";
		echo " <td><P><B> ".$row[0] ." </B></P></td> ";
		echo " <td class='text-center'><P>    ".$row[1] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[2] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[3] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[4] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[5] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[6] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[7] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[8] ." </P></td> ";
		echo " <td class='text-center'><P>    ".$row[9] ." </P></td> ";
		echo " <td><P><B> ".$row[10]." </B></P></td> ";
		echo " </tr> ";
	}
?>

</table>
</div>


<?php
include("pie.php");
?>