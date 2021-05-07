<?php
   include 'conexion.php';
   session_start();

   //SE MUESTRAN SÓLO LOS ÚLTIMOS MENSAJES
   // $consulta = "SELECT * FROM chat ORDER BY id DESC limit 5";
   $consulta = "(SELECT * FROM `chat` ORDER BY `fecha` DESC LIMIT 5) ORDER BY `id`";

   // $consulta = "SELECT * FROM chat WHERE fecha >= NOW()-3600 ORDER BY fecha ASC LIMIT 10";

   $ejecutar = $conexion->query($consulta);

   while($fila = $ejecutar->fetch_assoc()){;
?>
   <br>
      <div id="datos-chat">
            <span style="color: red;"><?php echo $fila['nombre']?>: </span>
            <span><?php echo $fila['mensaje']?></span>
            <span style="float: right; color: lightskyblue;"><?php echo formatear_fecha($fila['fecha']);?></span>
      </div>
<?php 
   };//Este es el cierre del while
   
   function formatear_fecha($fecha){
      return date('g:i a', strtotime($fecha));
   }
   $conexion->close();
?>