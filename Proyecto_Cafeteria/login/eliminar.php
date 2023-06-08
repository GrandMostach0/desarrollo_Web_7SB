<?php
    require '../conexion.php';

    $id_personal = $_GET['id_personal'];

    $consulta = "DELETE FROM personal WHERE id_personal = '$id_personal'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo '
            <script>
                alert("SE ELIMINO CORRECTAMENTE");
                location.href = "verPersonal.php";
            </script>
        ';
    }else{
        echo '
            alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
            location.href = "verPersonal.php";
        ';
    }
?>