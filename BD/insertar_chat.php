<?php
   session_start();

   $session_id = $_SESSION['id'];

   include('../BD/conexion.php');

   // echo "Sesion Id: ".$session_id."<br>";
   $session_query = $conexion->query("SELECT * FROM usuarios WHERE id = '$session_id'");
   $fila = $session_query->fetch_assoc();
   $usuario_chat = $fila['usuario'];
   // echo "Usuario: ".$usuario_chat;

   if($_POST['nombre'] == "" || $_POST['mensaje'] == ""){
      // header('location:../principal.php');
         die();
   }else{//Si se envía algo recojo los valores 
         if(isset($_POST['enviar'])){
            $nombre = $usuario_chat;
            $mensaje = $_POST['mensaje'];

            //Realizo la consulta
            $chat = "INSERT INTO chat (`nombre`, `mensaje`) VALUES ('$nombre', '$mensaje')";

            //Ejecuto la consulta  
            $ejecutar = $conexion->query($chat);

            //Si los datos son correctos, emite el sonido y regresa al chat
            // if ($ejecutar == true) {
            //     echo "<embed loop='false' src='../sonidos/beep1.ogg' hidden='true' autoplay='true'>";
            // }
            echo '<link rel="stylesheet" href="../css/estilo_chat.css">';

            header('location:../principal.php#mensaje_chat');
            //para que tenga un retarde en cargar
            // header("refresh:1; url = ../principal.php");
         }
   }
?>