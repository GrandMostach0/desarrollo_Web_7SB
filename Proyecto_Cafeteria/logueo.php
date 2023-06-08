<?php
    require "conexion.php";

    //llave de sesion
    session_start();

    //obtenemos la informacion del formulario login con el metodo post
    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];

    //consulta a la base de datos para ver si existe
    $consulta = "SELECT COUNT(*) AS contar FROM personal WHERE nombre_personal = '$nombre' AND contra_personal = '$contrasenia' ";

    //hacemos consulta
    $consulta = mysqli_query($conectar, $consulta);
    $array = mysqli_fetch_array($consulta);

    //verificamos
    if($array['contar'] > 0){
        $_SESSION['username'] = $nombre;
        header("location: login/panel-menu.php");
    }else{
        header("location: Form-login.php");
    }