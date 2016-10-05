<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("usuarios", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$insertar="insert into registro (nombre, apellido, usuario, contraseña, email)
	values ('$_POST[nombre]','$_POST[apellido]','$_POST[usuario]','$_POST[contraseña]','$_POST[email]')";

$conectar=mysql_query($insertar);

echo "Registro completo!";

mysql_close($vinculo);

?>