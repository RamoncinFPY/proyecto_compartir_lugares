<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de registro</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
</head>
<body>
	
	<div class="topnav" id="myTopnav">
		<a href="principal.php">Principal</a>
		<a href="about.php" class="active">About</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	<main>
		<section>
			<article style='text-align:center'>
				Aplicación para usuarios que deseen compartir sus aventuras, viajes y toda la belleza de sus lugares visitados.
			</article>
		</section>
	</main>

    <footer class="pie">
        Abril 2021, by Ramón
    </footer>

    <script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>