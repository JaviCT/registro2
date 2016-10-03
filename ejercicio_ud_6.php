<?php

class botones {
	public $texto;
	public $vinculo;
	public function pulsar ($x) {
		echo "<a href=".$x.">";
		}
	}
	
class barra extends botones {
	public $ancho;
	public $color;
	}
	
$b1=new barra();
$b1 -> color = "black";
$b1 -> ancho = "70px";
$b1 -> texto = "Terra";
$b1 -> vinculo = "'http://www.terra.es'";

$b2 = new barra();
$b2 -> color = "red";
$b2 -> ancho = "70px";
$b2 -> texto = "Google";
$b2 -> vinculo = "'http://www.google.es'";

echo "<table> <tr> <th font-color='white' width='". $b1->ancho."' bgcolor='".$b1->color."'>";
echo $b1->pulsar($b1->vinculo) . $b1->texto. "</a></th>";

echo "<th width='". $b2->ancho."' bgcolor='".$b2->color."'>";
echo $b2->pulsar($b2->vinculo) . $b2->texto. "</a></th>"

?>