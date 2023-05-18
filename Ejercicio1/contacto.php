<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="ancho">

        <?php
        include "info_arriba.php";
        ?>

        <div class="contenido">
            <h1 class="titulo">Contacto</h1>

            <form class="formulario1" action="recibir.php" method="post" name="form1">
                <div class="opcion">
                    <label for="nombre">*Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="opcion">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido">
                </div>
                <div class="opcion">
                    <label for="matricula">*Matricula</label>
                    <input type="text" name="matricula" id="matricula">
                </div>
                <div class="opcion">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera">
                </div>
                <button type="submit">Enviar</button>
            </form>

        </div>

        <?php
        include "info_abajo.php";
        ?>
    </div>
</body>

</html>