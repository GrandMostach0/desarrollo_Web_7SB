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

        //vamos a hacer que ahora los datos se envien a un correo
        $destion = $correo;
        $asunto = "Correo enviado desde PLACE and DELIRIOS";

        $contenido = "SE TE HA AGREGADO AL PANEL DE ADMINISTRADORES DE LA CAFETERIA: DELIROS"."<br>"."<b>Nombre: </b>".$nombre."<br>"."<b>Email: </b>".$correo."<br>"."<b>Celular: </b>".$telefono."<br>";

        $encabezados = "MIME-Version: 1.0" . "\r\n";
        $encabezados .= "Content-type:text/html charset=UTF-8" . "\r\n";
        // ** si necesitas enviar el formulario a dos correos al mismo tiempo **
        $encabezados .= "Cc: grandmost.codigo@hotmail.com" . "\r\n";

        //FUNNCION MAIL Y REDIRECCIONAMIENTO
        mail($destion, $asunto, $contenido, $encabezados);

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