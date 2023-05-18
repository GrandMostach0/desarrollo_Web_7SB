<?php
    require 'conexion.php';

    $id_usuario = $_GET['id_usuario'];

    $consulta = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo'
            <script>
                alert("SE ELIMINO EL USUARIO CORRECTAMENTE");
                location.href = "verUsuarios.php";
            </script>';
    }else{
        echo'
            <script>
                alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
                location.href = "verUsuarios.php";
            </script>';
    }
