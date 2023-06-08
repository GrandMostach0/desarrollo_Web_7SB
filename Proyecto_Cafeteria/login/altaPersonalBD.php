<?php
    require "../conexion.php";

    //obtenemos los datos del form por post
    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    echo $nombre."<br>";
    echo $contrasenia."<br>";
    echo $correo."<br>";
    echo $telefono."<br>";

    $insertar = "INSERT INTO personal (nombre_personal, contra_personal, correo, telefono) VALUES ('$nombre', '$contrasenia', '$correo', '$telefono') ";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("Se ha guradado correctamente");
            location.href = "AltaPersonal.php";
        </script>';
    }else{
        echo'
        <script>
            alert("Ocurrio un error al guardar la informacion");
            location.href = "AltaPersonal.php";
        </script>
        ';
    }
?>