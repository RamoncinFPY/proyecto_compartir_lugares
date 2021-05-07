<?php
session_start();

//Funcion para login
function datos_usuario($id)
    { 
        include('BD/conexion.php');
    //consulta
    $sql = "SELECT * FROM usuarios WHERE `id` = '$id'";
    
    //hago la consulta de la tabla 
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) 
        { 
            while($row = $result->fetch_assoc()) 
                {//creo variables para los datos
                    $id = $row["id"];
                    $user = $row["usuario"];
                    $name = $row["nombre"];
                    $lastn = $row["apellido"];
                    $email = $row["email"];
                    $pass = $row["password"];
                    $status = $row["estatus"];

                //Compruebo si existe la imagen con su respectiva ID
                    $th_imagen = "img/usuarios/".$id.".jpg";
                    if(file_exists($th_imagen))
                        {
                            $imagen = $th_imagen;
                        }else{ $imagen = "img/usuarios/0.jpg";}
                
                    //Muestro la información de cada fila de la base de datos
                    //<p>Id: ".$id."</p>

                    $print = "<article class='articulos'>
                                <h2>".$name."&nbsp; ".$lastn."</h2>
                                <img class='img_usuario' src='".$imagen."'>
                                <p>Usuario: <span> ".$user."</span></p>
                                <p> Email: ".$email."</p>
                                <p>Estatus: ".$status."</p>
                                </article><br>";
                    echo $print;
                }
            $conexion->close();
            //retorno de mi función            
             return $print;
        }
    }
?>