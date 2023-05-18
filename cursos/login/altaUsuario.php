<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
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
            <h2>Alta usuario</h2>
            <hr>
            <div class="botones">
                <a href="panelusuario.php" class="boton1 boton2"> << regresar</a>
            </div>

            <div class="formulario2">
                <form action="">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre Usuario" class="styleInput">
                    <input type="text" id="contra" name="contra" placeholder="Contraseña" class="styleInput">
                    <select name="rol" id="rol" class="styleInput">
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>
                    <button type="submit" name="Submit" id="Submit" class="botonReal">Guardar Usuario</button>
                </form>
            </div>

            </div>
        </div>
        
    </div>
</body>
</html>