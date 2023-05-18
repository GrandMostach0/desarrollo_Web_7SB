<?php
    require "conexion.php";

    $nombre = $_POST['usuario'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $compania = $_POST['compania'];
    $parentesco = $_POST['parentesco'];

    // echo $nombre."<br>";
    // echo $apellido."<br>";
    // echo $correo."<br>";
    // echo $celular."<br>";
    // echo $compania."<br>";
    // echo $parentesco."<br>";

    $insertar = "INSERT INTO agenda (nombre, apellido, correo, celular, compania, parentesco) VALUES ('$nombre', '$apellido', '$correo', '$celular', '$compania', '$parentesco')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("Se ha guradado correctamente");
            location.href = "nuevoDato.php";
        </script>';
    }else{
        echo'
        <script>
            alert("Ocurrio un error al guardar la informacion");
            location.href = "nuevoDato.php";
        </script>
        ';
    }