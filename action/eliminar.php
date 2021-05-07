<?php
     session_start();

     //Recibo el valor del form
     $id = $_POST['id'];
                    
    if(!isset($id))
        {   //Si no hay datos lo regreso al formulario
            header('location:../pag_usuario.php');
            die();
        }else
            {
                //declaro todos los datos de conexión
                include('../BD/conexion.php');
                $tabla = "usuarios";

                //consulta
                $borrar = "DELETE FROM $tabla WHERE `id` = '$id'";
                
                $result = $conexion->query($borrar);
                $conexion->close();
            }
    session_destroy();
    header('location:../registro.php');
    exit();
?>