<?php

$a = "files/visitas.txt";

$abrir=fopen($a,"r");

$total=fread($abrir,filesize($a));

fclose ($abrir);

$abrir=fopen($a,"w");

$total=$total+1;

$grabar=fwrite($abrir,$total);

fclose ($abrir);

echo "<p> La página web ha sido visitada por <font size='50' color='red'>" .$total. "</font> navegantes.</p>";

?>