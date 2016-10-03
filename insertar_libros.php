<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("biblioteca", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into libros (isbn, título, autor, temática, fecha, n_páginas, posicion, ejemplar)
	values ('$_POST[isbn]','$_POST[título]','$_POST[autor]','$_POST[temática]','$_POST[fecha]','$_POST[n_páginas]','$_POST[posicion]','$_POST[ejemplar]')";
$conectar=mysql_query($insertar);

$mostrar="select isbn, título, autor, temática, fecha, n_páginas, posicion, ejemplar from libros";
$x= mysql_query($mostrar);

echo "<table border=1 cellspacing=0 width=80%>
		<caption> Base de datos Biblioteca - Tabla Libros </caption>
		<tr> <td> ISBN </td> <td> Título </td>
		<td> Autor </td> <td> Temática </td>
		<td> Fecha de publicacón </td>
		<td> Número de páginas </td>
		<td> Posición </td>
		<td> Ejemplar </td> </tr>";

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