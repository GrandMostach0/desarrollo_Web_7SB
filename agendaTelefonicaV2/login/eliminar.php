<?php
    require 'conexion.php';

    $id_usuario = $_GET['id'];

    $consulta = "DELETE FROM agenda WHERE id = '$id_usuario'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo '
            <script>
                alert("SE ELIMINO CORRECTAMENTE");
                location.href = "verListaAdmin.php";
            </script>
        ';
    }else{
        echo '
            alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
            location.href = "verListaAdmin.php";
        ';
    }
?>