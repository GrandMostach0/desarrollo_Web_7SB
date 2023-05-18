

<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    //vamos a hacer que ahora los datos se envien a un correo
    $destion = "kreedlegend0@gmail.com";
    $asunto = "Correo enviado desde la pagina web";

    $contenido = "<b>Nombre: </b>".$nombre."<br>"."<b>Email: </b>".$correo."<br>"."<b>Celular: </b>".$telefono."<br>"."<b>Comentario: </b>".$comentario."<br>";

    $encabezados = "MIME-Version: 1.0" . "\r\n";
    $encabezados .= "Content-type:text/html charset=UTF-8" . "\r\n";
    // ** si necesitas enviar el formulario a dos correos al mismo tiempo **
    $encabezados .= "Cc: grandmost.codigo@hotmail.com" . "\r\n";

    //FUNNCION MAIL Y REDIRECCIONAMIENTO
    mail($destion, $asunto, $contenido, $encabezados);

    //SIRVE PARA REDIRIJIR AL USUARIO A OTRA PAGINA
    header("localtion: gracias.php");

?>