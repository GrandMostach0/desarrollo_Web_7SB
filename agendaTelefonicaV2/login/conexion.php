<?php
    //xampp
    // $host = 'localhost';
    // $user = 'root';
    // $pass = '';
    // $bd = 'agendatelefonica';

    //000webhost
    $host = 'localhost'; //aqui siempre es el mismo tanto en el local como el deploy o en produccion
    $user = 'id20674614_contactos';
    $pass = 'contactosAgenda-01';
    $bd = 'id20674614_agenda';

    $conectar = mysqli_connect($host, $user, $pass, $bd);

    if(!$conectar){
        echo "No se pudo conectar a la base de dato";
    }