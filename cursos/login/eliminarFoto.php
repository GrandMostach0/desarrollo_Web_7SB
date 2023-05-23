<?php
    require 'conexion.php';

    $id_foto = $_GET['id_foto'];

    $consulta = "DELETE FROM fotos WHERE id_foto = '$id_foto'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo'
            <script>
                alert("SE ELIMINO EL USUARIO CORRECTAMENTE");
                location.href = "verImagen.php";
            </script>';
    }else{
        echo'
            <script>
                alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
                location.href = "verImagen.php";
            </script>';
    }