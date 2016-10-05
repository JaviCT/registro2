<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("zapatería", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into zapatos (ref, denominación, coste, color, proveedor)
	values ('$_POST[ref]','$_POST[denominación]','$_POST[coste]','$_POST[color]','$_POST[proveedor]')";
$conectar=mysql_query($insertar);

$mostrar="select * from zapatos";
$x= mysql_query($mostrar);

echo "<table border=1 cellspacing=0 width=80%>
		<caption> Base de datos Zapatería - Tabla Zapatos </caption>
		<tr> <td> REF </td>
			<td> Denominación </td>
			<td> Coste </td>
			<td> Color </td>
			<td> Proveedor </td>
		</tr>";

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