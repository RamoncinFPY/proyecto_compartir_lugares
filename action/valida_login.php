<?php
    //Inicio la sesión
    session_start();
    
    include('../BD/conexion.php');

    if(($_POST == null) or ($_POST == "")) header("location:../registro.php");          
     //validación del formulario
    if (!isset($_POST['usuario'])) echo "El campo es obligatotio!<br>";
    if(!isset($_POST['password'])) echo "El campo es obligatotio!<br>";
       
            //Saniamiento de campos del formulario
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
            //echo $password .$correo .$usuario; //si me llegan bien los datos
            #Encripto la contraseña
            $password = hash('sha256', $password);
            //echo $password;//Si encripta la contraseña
        
            //consulta
            $logear = "SELECT * FROM usuarios WHERE `usuario` = '$usuario' AND `password` = '$password'";
            
            //para obtener los daros de la bd
            $result = $conexion->query($logear);
            // echo "<br>ESTe ES el result<BR>";
            // var_dump($result);
            if($result->num_rows > 0) 
                { //HASTA AQUI ES LA COMPROBACION
                    while ($row = $result->fetch_assoc()) 
                        {
                            $id = $row["id"];
                        }
                    //aqui creo la variable de sesión
                    $_SESSION["id"] = $id;
                    $_SESSION["usuario"] = $usuario;
                    $conexion->close();
                    header('location:../pag_usuario.php');
                } else {
                    session_destroy();
                    header('location:../index.php');
                }
        
?>