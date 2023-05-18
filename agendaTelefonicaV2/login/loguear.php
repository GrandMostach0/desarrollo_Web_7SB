<?php
    require 'conexion.php';

    session_start();

    //obtenemos la informacion del formulario login
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    echo $usuario."<br>";
    echo $contrasenia."<br>";

    $consulta = "SELECT COUNT(*) AS contar FROM administradores WHERE admin_user = '$usuario' AND admin_pass = '$contrasenia' ";

    $consulta = mysqli_query($conectar, $consulta);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        $_SESSION['username'] = $usuario;
        header("location: indexLoginAdmin.php");
    }else{
        echo 'Hubo un error';
    }