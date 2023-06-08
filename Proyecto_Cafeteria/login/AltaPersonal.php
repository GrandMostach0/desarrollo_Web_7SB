<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Personal | Place & Delirio</title>
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
                    <h3>ALTA PERSONAL</h3>
                    <p><span class="negritas">Nota:</span> Los campos marcos con <span class="negritas">*</span> son obligatorios</p>
                </div>
                <img class="menu-show-header-img" src="../image/logoDeliros2.jpg" alt="Logo delirios">
            </div>

            <div class="container-form-personal">
                <form action="" method="post" name="form-alta-personal">
                    <div class="labels">
                        <label for="nombre">*Nombre(s):</label>
                        <label for="contraseia">*Contraseña:</label>
                        <label for="correo">*E-mail:</label>
                        <label for="telefono">*Telefono:</label>
                    </div>

                    <div class="inputs">
                        <input type="text" name="nombre" class="elemento1">
                        <input type="password" name="contrasenia" class="elemento1">
                        <input type="email" name="correo" class="elemento1">
                        <input type="number" name="telefono" class="elemento1">
                    </div>

                    <div class="botones-form2">
                        <button type="clear" name="Clear" class="boton rojo">Borrar Campos</button>
                        <button type="submit" name="Submit" class="boton verde">Guardar</button>
                    </div>
                </form>
            </div>

        </div>

        

    </div>

    <!-- FOOTER -->
    <?php
        include "footerCaseLogin.php";
    ?>

</body>
</html>