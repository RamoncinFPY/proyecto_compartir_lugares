<?php
    include('conexion.php');

    $id = $_SESSION['id'];
 
    //consulta
    $obtener_datos = "SELECT * FROM usuarios WHERE `id` = '$id'";
    
    //para obtener los daros de la bd
    $result = $conexion->query($obtener_datos);

    if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc()) 
               {
                    $id = $row["id"];
                    $user = $row["usuario"];
                    $name = $row["nombre"];
                    $lastn = $row["apellido"];
                    $email = $row["email"];
                    $pass = $row["password"];
                    $status = $row["estatus"];
               }
               $datos = [$id,$user,$name,$lastn,$email,$pass]; 
               // print_r($datos);
            $conexion->close();
        }
?>