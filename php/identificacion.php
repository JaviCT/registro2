<?php
$db_carpeta="localhost";
$db_usuario="root";

$vinculo= mysql_pconnect ($db_carpeta, $db_usuario, "") or die ("Error al conectar con la base de datos.");

mysql_select_db ("usuarios", $vinculo) or die ("Error seleccionando la base de datos");
mysql_query("SET NAMES 'utf8'");

$u= $_POST['usuario'];
$c= $_POST['contraseña'];

$conectar=mysql_query("Select nombre from registro where usuario like '$u' and contraseña like '$c'");

$d=mysql_fetch_array($conectar);
$j=$d["nombre"];

if ($d==""){
	header('Location: formulario_registro.html');
	}
else{
	echo "Bienvenido ".$j;
	}

mysql_close($vinculo);

?>