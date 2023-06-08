<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Productos | Place & Delirio</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="styleLoginMenu.css">
</head>

<body>
    <!-- HEADER-TITLE -->
    <?php
        include "upperCaseLogin.php";
    ?>

    <div class="container-opciones">
        
        <?php
            include "modulo-menu.php";
        ?>

        <div class="menu-show">
            <div class="menu-show-header">
                <div class="description">
                    <h3>VER PRODUCTOS</h3>
                </div>
                <img class="menu-show-header-img" src="../image/logoDeliros2.jpg" alt="Logo delirios">
            </div>

            <div class="container-card-personal">

                <div class="card-personal">
                    <div class="info-card-personal producto">
                        <div class="img-producto">
                            <img src="../image/cafe1.png" alt="CAFE_1">
                        </div>

                        <div class="title-campos">
                            <p class="textAmarillo">Precio:</p>
                            <p class="textAmarillo">Nombre:</p>
                        </div>

                        <div class="dato-campos">
                            <p>$50</p>
                            <p>adfafda</p>
                        </div>

                        <div class="eliminar-producto">
                            <a href="" style="text-decoration: none;"> ELIMINAR </a>
                        </div>
                    </div>
                </div>

                <div class="card-personal">
                    <div class="info-card-personal producto">
                        <div class="img-producto">
                            <img src="../image/cafe1.png" alt="CAFE_1">
                        </div>

                        <div class="title-campos">
                            <p class="textAmarillo">Precio:</p>
                            <p class="textAmarillo">Nombre:</p>
                        </div>

                        <div class="dato-campos">
                            <p>$50</p>
                            <p>adfafda</p>
                        </div>

                        <div class="eliminar-producto">
                            <a href="" style="text-decoration: none;"> ELIMINAR </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <?php
        include "footerCaseLogin.php";
    ?>

</body>
</html>