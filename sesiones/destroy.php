<?php
    //inicia o recupera sesión
    session_start(); 
    //destruye la sesión
    session_destroy(); 
    //regresa a la página que le indique
    header('Location:../index.php');
        //mata esta sección
        die();
?>