<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("zapatería", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into proveedor (cif, nombre, dirección, cp, provincia, tef)
	values ('$_POST[cif]','$_POST[nombre]','$_POST[dirección]','$_POST[cp]','$_POST[provincia]','$_POST[tef]')";
$conectar=mysql_query($insertar);

$mostrar="select * from proveedor";
$x= mysql_query($mostrar);

echo "<table border=1 cellspacing=0 width=80%>
		<caption> Base de datos Zapatería - Tabla Proveedor </caption>
		<tr> <td> CIF </td> <td> Nombre </td>
		<td> Dirección </td> <td> CP </td>
		<td> Provincia </td>
		<td> Teléfono </td> </tr>";

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