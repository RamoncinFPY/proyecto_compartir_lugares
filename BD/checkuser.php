<?php
session_start();

//declaro todos los datos de conexión
include('conexion.php');

sleep(1); //tiempo de espera. 

if(!empty($_POST["usuario"])) { //si se han enviado los datos
  $usuario = $_POST["usuario"];
  $sql = "SELECT * FROM usuarios WHERE `usuario` = '$usuario'"; //consulta

  //hago la consulta
  $result = $conexion->query($sql);
// print_r($result)
  if ($result->num_rows == 0) { //si no hay resultados el usuario está disponible
    echo "ok";
  }else{ //si no, ya está en uso.
    echo "nook";
  }
}

//close connection
$conexion->close();
?>