<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
echo "Prueba php";

$a=67*2;
$b=$a/10;
$c=$a%10;
$d=10-$c;
$e=$a+$d;

echo "<p>67 * 2 =".$a."<p>".$a." / 10 = ".$b."<p>".$a."<b> no es múltiplo de 10</b> <p> El resto de la división es ".$c."<p> Si a 10 le quitamos el resto sabremos las unidades que necesitamos para hallar el multiplo de 10 por encima de ".$a."<p>Las unidades que necesitamos sumar son: " .$d."<p><b>El multiplo de 10 </b>por encima de ".$a."<b> es ".$e. "</b>";

?>
</body>
</html>