<?php

echo <<< HTML
<link href="../estilos/estilos_encuesta.css" rel="stylesheet" type="text/css" />
HTML;

$a = "../ficheros/ocupado.txt";
$b = "../ficheros/parado.txt";

$c = $_POST['respuesta'];

$abrir1=fopen($a,"r");
$abrir2=fopen($b,"r");

$contar1=fread($abrir1, filesize($a));
$contar2=fread($abrir2, filesize($b));

fclose ($abrir1);
fclose ($abrir2);

if ($c=="ocupado"){
	$abrir1=fopen($a,"w");
	$contar1=$contar1+1;
	$guardar1=fwrite($abrir1,$contar1);
	fclose($abrir1);
	}
else if ($c=="parado"){
	$abrir2=fopen($b,"w");
	$contar2=$contar2+1;
	$guardar2=fwrite($abrir2,$contar2);
	fclose($abrir2);
	}

$puntos=$contar1+$contar2;

$pora=$contar1*100/$puntos;
$pora=intval($pora,10);

$porb=$contar2*100/$puntos;
$porb=intval($porb,10);

echo "La encuesta ha sido realizada por: " .$puntos. " navegantes.<br><br>";

echo "Los usuarios opupados laboralmente son: " .$contar1. " - " .$pora. "% &nbsp; &nbsp;";
echo "<div class=\"imagen\" style='width:".(2*$pora)."px'><img height=30px width=200px src=../imagenes/rojo.png></div><br>";

echo "Los usuarios parados laboralmente son: " .$contar2. " - " .$porb. "% &nbsp; &nbsp;";
echo "<div class=\"imagen\" style='width:".(2*$porb)."px'><img height=30px width=200px src=../imagenes/azul.png></div><br>";

echo "<a href='../encuesta.html'>Volver a la encuesta.</a>";

?>