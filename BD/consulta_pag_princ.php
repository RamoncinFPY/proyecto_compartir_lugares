<?php 

    function imprime_contenido()//creo mi función 
        {//declaro todos los datos de conexión
            include("conexion.php");
            
            $tabla = "volcanes";
            
            //hago la consulta
            $consulta = ("SELECT * FROM $tabla  
                        ORDER BY fecha_entrada ASC");
            $result = $conexion->query($consulta);

            //extrae los datos de la fila
            while($fila = $result->fetch_assoc())
                { 
                    $fecha = $fila['fecha_entrada'];
                    $nombre_usuario = $fila['nombre_usuario'];

                    //Compruebo si existe la imagen con su respectiva ID
                    $id = $fila['id'];
                    $th_imagen = "img/principal/".$id.".jpg";
                    if(file_exists($th_imagen))
                        {
                            $imagen = $th_imagen;
                        }else
                            {
                                $imagen = "img/principal/0.jpg";//Imágen por defecto 
                            }
                    
                //creo variables para los datos de los enlaces
                $titulo = $fila['nombre'];
                // $titulo = ucwords($titulo);
                $descripcion = $fila['descripcion'];
                
                $info = '<a href="https://html.duckduckgo.com/html/find?q='.$titulo.'"de &ref_=nv_sr_sm"; target="_blank"><img class="iconos" src="img/iconos/info.jpg" id="info"></a>';
                
                //Muestro la información de cada fila de la base de datos
                    $imprimir = "<article class='article'>
                                    <div class='recortes'>
                                        <h2>".$titulo."</h2>
                                        <img class='img_articulos' src='".$imagen."'>
                                    </div>
                                    <div clas='volcanes'>
                                        <p>".$descripcion."</p>
                                    </div>
                                    <div class='art_inf'>
                                        <div>$info</div>
                                        <div>Compartido por: $nombre_usuario</div>
                                        <div>$fecha</div>
                                    </div>
                                </article>";
                    echo $imprimir;
                }
            // return $imprimir;//retorno de mi función
        }     
?>