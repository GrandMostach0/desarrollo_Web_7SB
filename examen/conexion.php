<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'examen';

    $conectar = mysqli_connect($host, $user, $pass, $bd);

    if($conectar){
        echo "si";
    }else{
        echo "No se pudo conectar a la base de dato";
     }