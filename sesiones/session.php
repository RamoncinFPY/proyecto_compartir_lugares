<?php
   session_start();
   include('../BD/conexion.php');

   if (!isset($_SESSION['id'])){
      header('location:../index.php');
   }

   $session_id = $_SESSION['id'];
   echo "Sesion Id: ".$session_id."<br>";
   $session_query = $conexion->query("SELECT * FROM usuarios WHERE id = '$session_id'");
   $fila = $session_query->fetch_assoc();
   $usuario_chat = $fila['usuario'];
   echo "Usuario: ".$usuario_chat;
   $conexion->close();
?>