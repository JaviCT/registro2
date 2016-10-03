<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("biblioteca", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into ordenación (posicion, planta, sección, estantería, descripción)
	values ('$_POST[posicion]','$_POST[planta]','$_POST[sección]','$_POST[estantería]','$_POST[descripción]')";
$conectar=mysql_query($insertar);

$mostrar="select * from ordenación";
$x= mysql_query($mostrar);

echo "<table border=1 cellspacing=0 width=80%>
		<caption> Base de datos Biblioteca - Tabla ordenación </caption>
		<tr>
			<td> Posición </td>
			<td> Planta </td>
			<td> Sección </td>
			<td> Estantería </td>
			<td> Descripción </td> </tr>";

while ($r= mysql_fetch_row($x)){
	echo "<tr>";
	echo "<br>";
	foreach ($r as $c){
		echo "<td>", $c , "</td>";
		}
	}

echo "</table>";

$n= mysql_num_rows($x);
echo "<blockquote> El número total de registros es:" . $n . "</blockquote>";

mysql_close($vinculo);

?>