<?php 
    
    session_start();
    include('BD/conexion.php');
 
    if (!isset($_SESSION['id'])){
       header('location:index.php');
    }
 
    $session_id = $_SESSION['id'];
    // echo "Sesion Id: ".$session_id."<br>";
    $session_query = $conexion->query("SELECT * FROM usuarios WHERE id = '$session_id'");
    $fila = $session_query->fetch_assoc();
    $usuario_chat = $fila['usuario'];
    // echo "Usuario: ".$usuario_chat;
    $conexion->close();
 
    include('head.php');
    include('BD/consulta_pag_princ.php');
?>
  <body onload="ajax(); changeImg();">

    <header>
        <h1>Lugares Favoritos</h1>
      <!--menu oculto desplegable-->
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" id="menu_label">Menú</label>
      <nav class="menu"> <!-- menú de navegación -->
        <ul>
          <li>
            <a href="agregar_contenido.php">Agregar Contenido</a>
          </li>
          <li>
            <a href="https://www.ivoox.com/guardian-del-chimborazo-volcan-sagrado-del-audios-mp3_rf_528523_1.html">Audio</a>
          </li>
                <li>
                  <a href="https://www.google.com/search?rlz=1C1ONGR_esES930ES931&sxsrf=ALeKk00ZfASbcX2hfWUS5AzybmXPCM_PUw:1608512239673&source=univ&tbm=isch&q=imagenes+de+volcanes+del+ecuador+full+hd&sa=X&ved=2ahUKEwjc_qWF793tAhWG3eAKHXY-C3sQjJkEegQIAhAB&biw=1358&bih=647">Imágenes</a>
                </li>
                <li>
                  <a href="https://www.google.com/search?bih=647&biw=1358&rlz=1C1ONGR_esES930ES931&hl=es-419&tbm=vid&sxsrf=ALeKk02NL1VmNr3vvpmdI_pgVBsPMDzgDw%3A1608512328939&ei=SPPfX7fmOIayUsfylcAJ&q=videos+de+volcanes+del+ecuador+4k&oq=videos+de+volcanes+del+ecuador+4k&gs_l=psy-ab.3...13162.17534.0.17954.4.4.0.0.0.0.218.677.0j3j1.4.0....0...1c.1.64.psy-ab..0.2.386...33i22i29i30k1j33i160k1.0.p7JOPJ3vfuM">Vídeos</a>
                </li>
          <li>
            <a href="pag_usuario.php">Mi perfil</a>
          </li>
          <li>
            <a href="sesiones/destroy.php">Salir</a>
          </li>
        </ul>
      </nav>
    </header>
      <!-- clearfix para que los elementos de la página no se suban-->
      <div class="clearfix"></div>
      <!--indico un identificador único id para mi sección-->

      <div id="container">
      <section id="content">
          <?php  echo imprime_contenido(); ?>
      </section>

      <aside class="principal">
      <!-- AQUÍ ESTA LO DEL CHAT GENERAL -->
        <div id="contenedor">
          <h2>Chat Grupal</h2>
            <div id="caja-chat">
              <div id="chat">
              <!-- Aquí se carga dinámicamente el chat -->
              </div>
            </div>
        </div>

        <div>
        <br>
          <form class="form_chat" 
               action="BD/insertar_chat.php" 
               method="post"
               name="form_chat">

            <label for="nombre">Usuario:</label>
            <input type="text" 
                   name="nombre" 
                     id="nombre" 
                  value="<?php echo $usuario_chat?>"
                  style="background-color:pink; font-size:x-large; color:red">

            <input type="text"
                      name="mensaje" 
                        id="mensaje_chat" 
                      cols="30" 
                      rows="10" 
               placeholder="Escribe tu mensaje"
               onkeypress="if (event.keyCode == 13) enviar_mensaje()">

            <input type="submit" name="enviar" value="Enviar">
          </form>
        </div>
        <div>
          <img name="slider" width="100%" height="200px">
        </div>
        <div class="iframe">
          <br>
          <iframe width="100%" src="https://www.youtube.com/embed/qwkKbTK6aSw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <br>
          <iframe width="100%" src="https://www.youtube.com/embed/RVSXigNvAQs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <br>
          <iframe width="100%" src="https://www.youtube.com/embed/qgfvD0o1Dg8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </aside>
      </div>
    <!-- clearfix para que los elementos de la página no se suban -->
    <div class="clearfix"></div>
    <div>
      <footer>
            <small>&copy;Derechos Reservados 2021 Teléfono <mark>697280590</mark></small>
            <!--MAILTO te abre las opciones para enviar un correo electrónico-->
            <a href="mailto:ramonfportyer@hotmail.com">Información TheRamonNews.com</a>
            <adress>Calle del Bogatell 58, 08930 San Adrián del Besos, Barcelona    </adress>
      </footer>
    </div>
  </body>
</html>
