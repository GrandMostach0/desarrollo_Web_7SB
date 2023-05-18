<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel usuario</title>
    <link rel="stylesheet" href="style.css">
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
            <h2>Pagina de Inicio del Panel</h2>
            <hr>
            <div class="botones">
                <a href="altaUsuario.php" class="boton1 boton2"> agregar usuarios </a>
                <a href="verUsuarios.php" class="boton1"> ver usuarios </a>
            </div>
        </div>
        
    </div>
</body>
</html>