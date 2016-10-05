<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Documento sin título</title>
</head>

<body>

<?php

$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("academia", $vinculo) or die ("ERror seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

//$insertar="insert into cursos values('Busqueda de empleo', 'RRHH', 250, '2010-06-20', '2010-08-30')";

//$actualizar="update cursos set nombre='PHP y MySQL' where nombre='PHP'";

$eliminar="delete from cursos where nombre='Busqueda de empleo'";

$conectar= mysql_query($eliminar);

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

</body>
</html>