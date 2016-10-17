<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
	require ("navbar.html");
?>
	
	<div class="content-section-b">
        <div class="container">

            <div class="row">
				<p align='center'><font size="30" color="#606060"><u> Mi página web </u></font></p>

				<?php
					require ("forms/formulario_registro.html");
					$cantidad = 3;
					$cambio = rand(1,$cantidad);
					$imagen = array(1=>"img/imagen1.jpg", 2=>"img/imagen2.jpg", 3=>"img/imagen3.jpg");
					echo "<p align='center' style='overflow: hidden; float: center;'> <img style= 'width='800'; height='500'' src=" .$imagen[$cambio]. " /></p>";
					echo "<a href='forms/index-formularios.html'>Formularios</a>"
				?>
			</div>
		</div>
	</div>
</body>
</html>