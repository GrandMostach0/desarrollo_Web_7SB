<?php

    include "conexion.php";
    $carrera = $_POST['carrera'];
    $ingreso = $_POST['ingreso'];
    $materia = $_POST['materia'];

    // echo $carrera."<br>";
    // echo $ingreso."<br>";
    // echo $materia."<br>";

    $insertar = "INSERT INTO verano (carrera, ingreso, materia) VALUES ('$carrera', '$ingreso', '$materia')";

    $query = mysqli_query($conectar, $insertar);

    if($query){

        echo "
        <script>
            alert('Su guardaron los datos');
            location.href='index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('FALLO EL SISTEMA');
            location.href='index.php';
        </script>
        ";
    }