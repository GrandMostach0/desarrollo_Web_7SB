<?php
    require '../conexion.php';

    $id_producto = $_GET['id_producto'];

    $consulta = "DELETE FROM productos WHERE id_producto = '$id_producto'";

    $resultado = mysqli_query($conectar, $consulta);

    if($resultado){
        echo '
            <script>
                alert("SE ELIMINO CORRECTAMENTE");
                location.href = "verProductos.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("FALLO AL ELIMINAR EL USUARIO SELECCIONADO");
                location.href = "verProductos.php";
            </script>
        ';
    }
?>