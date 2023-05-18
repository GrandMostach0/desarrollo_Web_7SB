<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['celular'];
    $telefono_oficina = $_POST['celular-oficina'];
    $origen = $_POST['direccion-origen'];
    $destino = $_POST['direccion-destino'];
    $comentario = $_POST['tipo'];
    $precio = $_POST['valor'];

    // echo $nombre."<br>";
    // echo $correo."<br>";
    // echo $telefono."<br>";
    // echo $telefono_oficina."<br>";
    // echo $origen."<br>";
    // echo $destino."<br>";
    // echo $comentario."<br>";
    // echo $precio."<br>";

    //vamos a hacer que ahora los datos se envien a un correo
    $destino = "kreedlegend0@gmail.com";
    $asunto = "Correo enviado desde la pagina web";

    $contenido = "<b>Nombre: </b>".$nombre."<br>"."<b>Email: </b>".$correo."<br>"."<b>Celular: </b>".$telefono."<br>"."<b>Telefono oficina: </b>".$telefono_oficina."<br>"."<b>Direccion Origen: </b>".$origen."<br>"."<b>Direccion Destino: </b>".$destino."<br>"."<b>Comentario: </b>".$comentario."<br>"."<b>Precio - Valor: </b>".$precio."<br>";

    //echo $contenido;

    $encabezados = "MIME-Version: 1.0" . "\r\n";
    $encabezados .= 'From: webmaster@example.com' . "\r\n";
    $encabezados .= "Content-type:text/html charset=UTF-8" . "\r\n";
    // ** si necesitas enviar el formulario a dos correos al mismo tiempo **
    $encabezados .= "Cc: grandmost.codigo@hotmail.com" . "\r\n";

    //FUNNCION MAIL Y REDIRECCIONAMIENTO
    mail($destino, $asunto, $contenido, $encabezados);

    //SIRVE PARA REDIRIJIR AL USUARIO A OTRA PAGINA
    header("Location: gracias.php");

?>