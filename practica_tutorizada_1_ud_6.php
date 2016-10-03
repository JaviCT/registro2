<?php

class geometria {
	public $ancho;
	public $alto;
	}
	
$cuadrado=new geometria();
$cuadrado -> ancho = 10;
$cuadrado -> alto = 10;

$rectangulo = new geometria();
$rectangulo -> ancho = 50;
$rectangulo -> alto = 10;

echo "<p> El área del cuadrado es: " .$cuadrado->ancho. "*" .$cuadrado->alto. "=" .$cuadrado->ancho * $cuadrado->alto. ". &ensp; El ancho es: " .$cuadrado->ancho. " y el alto es: " .$cuadrado->alto. ".</p>";

echo "<p> El área del cuadrado es: " .$rectangulo->ancho. "*" .$rectangulo->alto. "=" .$rectangulo->ancho * $rectangulo->alto. ". &ensp; El ancho es: " .$rectangulo->ancho. " y el alto es: " .$rectangulo->alto. ".</p>";

?>