<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ancho">
        <h1 class="titulo">formulario para envio de correo <span class="textRojo">desde el servidor real</span></h1>

        <div class="container-form">
            <form action="enviar.php" method="post" name="formulario1" class="formulario1">
                <input type="text" name="nombre" placeholder="Escribe tu nombre" id="nombre">
                <input type="email" name="correo" placeholder="Escribe tu correo" id="correo">
                <input type="tel" name="telefono" placeholder="9999 99 99 99" id="telefono">
                <textarea name="comentario" id="comentario" cols="30" rows="17" placeholder="Dejanos tus comentarios"></textarea>
                <button type="submit" name="enviar" id="enviar">Enviar</button>
            </form>
        </div>

    </div>
</body>
</html>