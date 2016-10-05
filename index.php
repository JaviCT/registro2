<html>
<head>
</head>
<body bgcolor="#E8FF00">

<p align='center'><font size="30" color="#606060"><u> Mi página web </u></font></p>

<?php

include ("php/visitas.php");

$cantidad = 3;

$cambio = rand(1,$cantidad);

$imagen = array(1=>"imagenes/imagen1.jpg", 2=>"imagenes/imagen2.jpg", 3=>"imagenes/imagen3.jpg");

echo "<p align='center' style='overflow: hidden; float: center;'> <img style= 'width='800'; height='500'' src=" .$imagen[$cambio]. " /></p>";

echo "<a href='formularios/index-formularios.html'>Formularios</a>"

?>

</body>
</html>