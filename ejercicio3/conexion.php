<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = "inscripcion2";

    $conectar = mysqli_connect($host, $user, $pass, $bd);

    // if($conectar){
    //     echo "SI SE CONECTO A LA BASE DE DATOS INSCRIPCION2";
    // }else{
    //     echo "FALLO AL CONECTAR A LA BASE DE DATOS";
    // }