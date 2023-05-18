<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Administrador</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="ancho">
        <?php
            include 'validarLogeo.php';
            include 'headerA.php';
        ?>

        <main>
            <div class="opciones">
                <a href="#">Inicio</a>
                <a href="nuevoDato.php">Nuevo</a>
                <a href="verListaAdmin.php">Ver lista</a>
            </div>

            <img src="../img/merida.png" alt="Logo tec">

            <h2>EJEMPLO DE AGENDA TELEFONICA</h2>
            <h3>MINE. HECTOR CETINA CORDERO</h3>

        </main>

        <?php
            include 'footerA.php';
        ?>

    </div>
</body>
</html>