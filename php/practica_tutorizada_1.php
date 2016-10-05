<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
/*
$numero=6;

if (($numero%1)==0 && ($numero%$numero)==0) {
	echo "El numero ".$numero."<b> es un numero primo.";
}
else {
	echo "El numero ".$numero."<b> no es un numero primo entre 1 y 1000";
}
*/
$numero=7;

function primo($n){ 

$i = 2; 

while($i<$n): 

if(($n%$i) == 0) return false; 

$i++; 

endwhile; 

return true; 
} 


echo primo(7)? "El numero ".$numero." es un numero primo" : "El numero ".$numero." no es un numero primo entre 1 y 100."; 

?>

</body>
</html>

 