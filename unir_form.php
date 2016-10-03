<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("academia", $vinculo) or die ("ERror seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into cursos (Nombre, Grupo, Duración, Fech_inicio, Fech_fin)
	values ('$_POST[Nombre]','$_POST[Grupo]','$_POST[Duración]','$_POST[Fech_inicio]','$_POST[Fech_fin]')";
$conectar=mysql_query($insertar);

$mostrar="select * from cursos";
$x= mysql_query($mostrar);

echo "<table border=1 cellspacing=0 width=80%>
		<caption> Base de datos Academia - Tabla cursos </caption>
		<tr> <td> Nombre del curso </td> <td> Grupo </td>
		<td> Horas </td> <td> Fecha de inicio </td>
		<td> Fecha de finalizacion </td> </tr>";

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