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
                <input type="text" id="nombre" class="elem1" name="nombre">
                <label class="elem-lbl-1" for="contrasenia">Contraseña:</label>
                <input type="password" id="contrasenia" class="elem1" name="contrasenia">

                <div class="botones-form">
                    <a href="index.php" class="boton rojo">Volver</a>
                    <button type="button" onclick="valida_envia()" name="Submit" class="boton verde">Iniciar Sesión</button>
                </div>

            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">

            <div class="informacion">
                <div class="icons">
                    <a target="_blank" href="https://www.facebook.com/PlaceryDelirio"><img class="facebook-f" src="icons/facebook-f.svg" alt="facebook-f"></a>
                    <a target="_blank" href="https://www.instagram.com/placerydelirio/"><img class="instagram" src="icons/instagram.svg" alt="instagram"></a>
                </div>

                <p>© 2023, <a href="https://ecohete.com/" target="_blank">Placer & DelirioImpulsado por 🚀 eCohete | Agencia de eCommerce.</a></p>
            </div>

            <p>Pagina Secundario: <a href="https://placerydelirio.com">https://placerydelirio.com/</a></p>

            <p>Tel: <a href="tel:+16508637580">+16508637580</a></p>
        </div>

    <!-- VALIDACION DE INPUTS -->
    <script>
        function valida_envia() {
            if(document.getElementById("nombre").value.length == 0){
                alert("Tienes el campo de NOMBRE vacio");
                document.getElementById("nombre").focus();
                return 0;
            }

            if (document.getElementById("contrasenia").value.length == 0) {
                alert("Tienes el campo de CONTRASEÑA vacio");
                document.getElementById("contrasenia").focus();
                return 0;
            }

            document.login.submit();

        }
    </script>

</body>
</html>