<?php

   $servidor = 'localhost';
   $usuario = 'volcanes';
   $password = 'volcanes';
   $base_datos = 'volcanes';

   $conexion = new mysqli($servidor,$usuario,$password,$base_datos);
   // Compruebo la conexión
   if ($conexion->connect_error) {
      die("Falla en la conexión: ".$conexion->connect_error);
  }
  //  echo "<br>ESTe es el mensaje de error<BR>";
  //  var_dump($conn->connect_error);
?>