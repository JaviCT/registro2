<?php

class numeros {
	public $n1;
	public $n2;
	}

class op extends numeros{
	public function oper() {
		echo "<p>La suma de " .$enter->n1. "+" .$enter->n2. "es: " .($enter->n1 + $enter->n2). "</p>";
		echo "<p>La resta de " .$enter->n1. "-" .$enter->n2. "es: "  .($enter->n1 - $enter->n2)."</p>";
		echo "<p>La multiplicación de " .$enter->n1. "*" .$enter->n2. "es: " .($enter->n1 * $enter->n2)."</p>";
		echo "<p>La división de " .$enter->n1. "/" .$enter->n2. "es: " .($enter->n1 / $enter->n2)."</p>";
		}
	}

$enter=new numeros();
$enter->n1=6;
$enter->n2=3;

$enter->oper();

?>