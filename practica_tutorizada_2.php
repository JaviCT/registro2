<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>

	<table width=50% algin='center' border=1 cellspacing=0 bordercolor='#00A828'>
		<tr>
        	<td> <b>Curso </td>
            <td> <b>Acceso </td>
        </tr>
        
<?php // Metodo for

$dep [0]= array ("Informatica", '001');
$dep [1]= array ("Contabilidad", '002');
$dep [2]= array ("RRHH", '003');
$dep [3]= array ("Escaparatismo", '004');

for ($i=0;$i<4;$i++)
{
	echo "<tr>";
	for ($j=0;$j<2;$j++)
	{
		echo "<td>".$dep[$i][$j]."</td>";
		}
	echo "</tr>";
	}

?>

	</table>
</br></br>
	<table width=100% textalgin='center' border=2 cellspacing=0 bordercolor='#0621A2'>
		<tr>
        	<td> <b>Curso </td>
            <td> <b>Acceso </td>
        </tr>
<?php //Metodo foreach

$dep = array ("Informatica" => "001", "Contabilidad" => "002", "RRHH" => "003", "Escaparatismo" => "004");
foreach ($dep as $i => $j)
{
	echo "<tr><td>".$i."</td><td>".$j."</td></tr>";
	}

?>

	</table>        	
</body>
</html>