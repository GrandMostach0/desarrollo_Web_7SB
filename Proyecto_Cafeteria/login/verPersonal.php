<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Personal | Place & Delirio</title>
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
                    <h3>VER PERSONAL</h3>
                </div>
                <img class="menu-show-header-img" src="../image/logoDeliros2.jpg" alt="Logo delirios">
            </div>

            <div class="container-card-personal">

                <div class="card-personal">
                    <div class="title-card-personal"><h3>PERSONAL</h3></div>
                    
                    <div class="info-card-personal">
                        <div class="title-campos">
                            <p>NOMBRE: </p>
                            <p>CONTRASEÑA:</p>
                            <p>E-MAIL:</p>
                            <p>TELEFONO:</p>
                        </div>

                        <div class="dato-campos">
                            <p>NOMBRE: </p>
                            <p>CONTRASEÑA:</p>
                            <p>E-MAIL:</p>
                            <p>TELEFONO:</p>
                        </div>

                        <div class="eliminar-card">
                            <a href="" class="boton rojo" style="text-decoration: none;"> ELIMINAR </a>
                        </div>
                    </div>
                </div>

                <div class="card-personal">
                    <div class="title-card-personal"><h3>PERSONAL</h3></div>
                    
                    <div class="info-card-personal">
                        <div class="title-campos">
                            <p>NOMBRE: </p>
                            <p>CONTRASEÑA:</p>
                            <p>E-MAIL:</p>
                            <p>TELEFONO:</p>
                        </div>

                        <div class="dato-campos">
                            <p>NOMBRE: </p>
                            <p>CONTRASEÑA:</p>
                            <p>E-MAIL:</p>
                            <p>TELEFONO:</p>
                        </div>

                        <div class="eliminar-card">
                            <a href="" class="boton rojo" style="text-decoration: none;"> ELIMINAR </a>
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