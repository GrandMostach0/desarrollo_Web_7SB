<?php
    require "conexion.php";

    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    $correo = $_POST['correo'];
    $anio = $_POST['anio'];
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];
    $edad = $_POST['edad'];
    $hermano = $_POST['hermano'];
    $cantidad_hermanos = $_POST['cantidad_hermanos'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $discapacidad = $_POST['discapacidad'];

    echo $nombre."<br>";
    echo $curp."<br>";
    echo $correo."<br>";
    echo $anio."<br>";
    echo $mes."<br>";
    echo $dia."<br>";
    echo $edad."<br>";
    echo $hermano."<br>";
    echo $cantidad_hermanos."<br>";
    echo $tipo_sangre."<br>";
    echo $discapacidad."<br>";

    $insertar = "INSERT INTO personal (nombre, curp, correo, anio, mes, dia, edad, hermanos, cantidad_hermanos, tipo_sangre, discapacidad) VALUES ('$nombre', '$curp', '$correo', '$anio', '$mes', '$dia', '$edad', '$hermano', '$cantidad_hermanos', '$tipo_sangre' , '$discapacidad')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("Se ha guradado correctamente");
            location.href = "altaUsuario.php";
        </script>';
    }else{
        echo'
        <script>
            alert("Ocurrio un error al guardar la informacion");
            location.href = "altaUsuario.php";
        </script>
        ';
    }