<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Maquetacion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    include "header-arriba.php";
    ?>

    <div class="container-form">

        <div class="form-hd">
            <h1 class="textAzul left">Por favor llene el siguiente formulario</h1>
            <h1 class="textAzul right">Campos requeridos (*)</h1>
        </div>

        <hr id="divisor-form">

        <form action="enviar.php" name="formulario1" method="post">

            <div class="inputs left">
                <input type="text" name="nombre" id="nombre" placeholder="*Nombre Completo" required>
                <input type="tel" name="celular" id="celular" placeholder="*Celular" maxlength="10" required>
            </div>

            <div class="inputs right">
                <input type="email" name="correo" id="correo" placeholder="*Correo" required>
                <input type="tel" name="celular-oficina" id="celular-oficina" placeholder="*Celular oficina" maxlength="10" required>
            </div>

            <div class="divisor-form2 textAzul">
                <h1>datos de la mercancia que desa enviar</h1>
            </div>

            <p class="textRojo" id="textEspeficia">*Especifica si el envio es para algun municipio en particular dentro o fuera de la ciudad</p>

            <div class="inputs left">
                <input type="text" name="direccion-origen" id="direccion-origen" placeholder="*Direccion de origen" required>
            </div>

            <div class="inputs right">
                <input type="text" name="direccion-destino" id="direccion-destino" placeholder="*Direccion Destino" required>
            </div>

            <div class="container-comentarios">
                <textarea name="tipo" id="tipo" cols="120" rows="15" placeholder="¿Que tipo de objetos quieres enviar?"></textarea>
            </div>

            <label for="precio"> <span class="textAzul">$</span> <input type="text" name="valor" id="valor" placeholder="Valor de toda la mercancia" required><span class="textAzul"> .00 M/N</span></label>

            <button type="submit" name="enviar" id="enviar">Enviar</button>

        </form>

    </div>

    <?php
    include "header-final.php";
    ?>

</body>
</html>