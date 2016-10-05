<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
echo "Prueba php</br>";

$color="cian";

$CMYK = array ( "cian", "magenta", "amarillo", "negro");

for ($i=0; $i<4; $i++)

{
	if ($color == $CMYK[$i])
	{
		echo "El color " .$color . " pertenece al modo CMYK y se en cuentra en la posicion " . $i . " del array.</br>";
		$i=5;
		}
	else
	{
		echo "El color " .$color. " no esta recogido en el modo CMYK.</br>";
		$i=5;
		}
	
}

?>
</body>
</html>