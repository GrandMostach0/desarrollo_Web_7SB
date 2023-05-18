<?php
    session_start();
    $varSession = $_SESSION['username'];

    if($varSession == null || $varSession == ' '){
        echo 'Primero tiene que iniciar sesion';
        die();
    }

?>