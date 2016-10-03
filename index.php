<html>
<head>
</head>
<body bgcolor="#E8FF00">

<p align='center'><font size="30" color="#606060"><u> Mi página web </u></font></p>

<?php
include ("visitas.php");
?>

<?php

$cantidad = 3;

$cambio = rand(1,$cantidad);

$imagen = array(1=>"imagenes/imagen1.jpg", 2=>"imagenes/imagen2.jpg", 3=>"imagenes/imagen3.jpg");

echo "<p align='center'> <img src=" .$imagen[$cambio]. "></p>";

?>

</body>
</html>