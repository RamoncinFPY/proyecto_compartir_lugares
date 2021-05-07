<?php
   session_start();

   if (!isset($_SESSION['id'])){
      header('location:index.php');
   }

    include 'BD/conexion.php';
   //  include 'head.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuario</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
  <script src="js/jquery-3.6.0.min.js"></script>

</head>
<body>
   <div class="topnav" id="myTopnav">
      <a href="principal.php">Principal</a>
      <a href="about.php">About</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
   </div>
    <div class="container">
        <div class="form_agregar">
            <fieldset style='text-align: center; border:1px solid palevioletred;'>
               
                    <form action="action/agregar_cont.php" enctype="multipart/form-data" method="post">

                        Título <br><input type="text"
                                          name="titulo"
                                            id="titulo"
                                     minlength="1"
                                     maxlength="50"
                                     required><br>

                     <br>   Descripción <br><textarea 
                                    name="descripcion" 
                                    id="descripcion"
                                    cols="30" rows="10" 
                                    required></textarea>
                                       
                    <br>    Añadir imagen <br><br>
                                 <input class="anclas"
                                        name="archivo"
                                          id="archivo"
                                        type="file"
                                    required><br>

                        <input type="hidden" name="MAX_FILE_SIZE" value="6291456"><br>
                        <br><input class="anclas" type="submit"  name="subir" value="AÑADIR">
                </form>
            </fieldset>
        </div>
    </div><br><br>
    <footer class="pie">
        Abril 2021 by Ramón
    </footer>
    
	<script src="js/login.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
