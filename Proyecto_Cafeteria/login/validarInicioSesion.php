<?php
    //llave de session
    session_start();
    $varSession = $_SESSION['username'];

    if($varSession == null || $varSession == ' '){
        echo'Primero tienes que iniciar sesion';
       //se usa die para que no siga cargando lo que seria el documento
        die();
    }
?>