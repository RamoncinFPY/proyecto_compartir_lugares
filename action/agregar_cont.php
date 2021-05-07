<?php 
    include("../BD/conexion.php");
    session_start();

    $id_usuario = $_SESSION['usuario'];
        // echo $id_usuario;

    if($_POST == null)
        {
            header("location: ../agregar_contenido.php");
        }
    //recojo los datos del formulario //Saniamiento de campos del formulario
    $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $nombre_usuario = filter_var($id_usuario, FILTER_SANITIZE_STRING);

    //validación del formulario
    if(!isset($_POST['titulo'])) echo "El campo es obligatotio!<br>";
    if(!isset($_POST['descripcion'])) echo "El campo es obligatotio!<br>";

    //consulta
    $agregar = "INSERT INTO volcanes (`nombre_usuario`,`nombre`,`descripcion`) VALUES ('$nombre_usuario','$titulo','$descripcion')";
    
    $conexion->query($agregar);

    //para obtener el id
    $result = $conexion->query("SELECT id FROM volcanes ORDER BY fecha_entrada DESC LIMIT 1");
    
    while($fila = $result->fetch_array())//para obtener el id 
            {   
                $id = $fila['id'];
                // echo "Id: ".$id;
            }
        //Al darle click al botón
        if (isset($_POST['subir'])) 
            {
                //Recogemos el archivo enviado por el formulario
                $archivo = $_FILES['archivo']['name'];
                //Si el archivo contiene algo y es diferente de vacio
                if ($archivo != null) 
                    {
                        //Obtenemos algunos datos necesarios sobre el archivo
                        $tipo = $_FILES['archivo']['type'];
                        $tamano = $_FILES['archivo']['size'];
                        $temp = $_FILES['archivo']['tmp_name'];
                        $ubicacion = "../img/principal/";
                        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 6291456))) 
                            {
                                echo "<div class='mensajes'>";
                                echo '<br><div><b>IMAGEN NO VALIDA, en la portada se pondrá una imagen por defecto.<br/>
                                     +Sólo se permiten imágenes .jpg y de 130 kb como máximo.+</b></div><br>';
                                echo "<br><a class='anclas' href='../agregar_contenido.php'>Agregar más lugares</a><br><br>
                                     <a class='anclas' href='../principal.php'>INICIO</a>";
                                echo "</div>";
                            }else 
                                {   
                                    //Si la imagen es correcta en tamaño y tipo e intenta subir al servidor cambiando la ubicación
                                    if (move_uploaded_file($temp, $ubicacion.$id.".jpg"))
                                    //move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfolder.'el_nombre_que_yo_quiera.jpg') 
                                        {
                                            $portada = $ubicacion.$id.".jpg";
                                            echo "<p><img src='$portada'></p>
                                                <br><a class='anclas' href='../agregar_contenido.php'>Agregar más lugares</a><br><br>
                                                <a class='anclas' href='../principal.php'>INICIO</a>";
                                        }else 
                                            {
                                                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                                                echo '<div class="mensajes"><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                                            }
                                }
                    }else
                        {
                            echo "<br>Seleccionar un archivo<br>";
                        }
            }
?>