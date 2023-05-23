<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
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
            <h2>Agregar Imagen</h2>
            <hr>
            <div class="botones">
                <a href="panelusuario.php" class="boton1 boton2"> << regresar</a>
            </div>

            <div class="formulario2">
                <form action="guardarImagen.php" method="POST" enctype="multipart/form-data">
                    <h4 style="text-align: left;
                    ">Agregar imagen:</h4>
                    <input type="file" name="imagen" class="styleInput" required>

                    <input type="text" name="descripcion" placeholder="Descripcion" class="styleInput">
                    <button type="submit" name="Submit" id="Submit" class="botonReal">Guardar Imagen</button>
                </form>
            </div>

            </div>
        </div>
        
    </div>
</body>
</html>