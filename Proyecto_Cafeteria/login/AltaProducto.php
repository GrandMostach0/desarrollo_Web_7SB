<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Producto | Place & Delirio</title>
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
                    <h3>ALTA PRODUCTO</h3>
                    <p><span class="negritas">Nota:</span> Los campos marcos con <span class="negritas">*</span> son obligatorios</p>
                </div>
                <img class="menu-show-header-img" src="../image/logoDeliros2.jpg" alt="Logo delirios">
            </div>

            <div class="container-form-personal">
                <form action="" method="post" name="form-alta-personal">
                    <div class="labels">
                        <label for="nombre_producto">*Nombre producto:</label>
                        <label for="precio">*Precio:</label>
                        <label for="cantidad">*Cantidad:</label>
                        <label for="imagen">*Imagen:</label>
                    </div>

                    <div class="inputs">
                        <input type="text" name="nombre_producto" class="elemento1">
                        <input type="number" name="precio" class="elemento1">
                        <input type="number" name="cantidad" class="elemento1">
                        <input type="file" name="imagen" class="elemento1">
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