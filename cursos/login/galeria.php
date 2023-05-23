<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel usuario</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>

<body>
    <?php
        include "upper.php";
    ?>

    <div class="contenedor">

        <?php
            include"menuOptions.php";
        ?>
        
        <div class="container-panel">
            <h2> - - GALERIA - - </h2>
            <hr>
            <div class="botones">
                <a href="altaImagen.php" class="boton1 boton2"> agregar imagen </a>
                <a href="verImagen.php" class="boton1"> ver imagenes </a>
            </div>
        </div>
        
    </div>
</body>
</html>