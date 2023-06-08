<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Place & Delirio</title>
    <link rel="stylesheet" href="login/styleLogin.css">
</head>

<body>
    <!-- HEADER-TITLE -->
    <?php
        include "login/upperCaseLogin.php";
    ?>

    <!-- CONTAINER FORM -->
    <div class="ancho">
        <div class="ancho-img">
            <img src="image/logoDeliros2.jpg" alt="">
        </div>

        <div class="container-form">
            <form action="logueo.php" method="post" name="login">
                <label class="elem-lbl-1" for="nombre">Nombre:</label>
                <input type="text" class="elem1" name="nombre">
                <label class="elem-lbl-1" for="contrasenia">Contraseña:</label>
                <input type="password" class="elem1" name="contrasenia">

                <div class="botones-form">
                    <a href="index.php" class="boton rojo">Volver</a>
                    <button type="submit" name="Submit" class="boton verde">Iniciar Sesión</button>
                </div>

            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
        include "login/footerCaseLogin.php";
    ?>

</body>
</html>