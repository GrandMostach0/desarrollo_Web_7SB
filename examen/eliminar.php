<?php
    require 'conexion.php';

    $id_usuario = $_GET['id_personal'];

    $consulta = "DELETE FROM personal WHERE id_personal = '$id_usuario'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo '
            <script>
                alert("SE ELIMINO CORRECTAMENTE");
                location.href = "verUsuario.php";
            </script>
        ';
    }else{
        echo '
            alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
            location.href = "verUsuario.php";
        ';
    }
?>