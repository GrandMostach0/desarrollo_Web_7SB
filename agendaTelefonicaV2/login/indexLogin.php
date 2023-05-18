<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="ancho">
        <?php
            include 'headerA.php';
        ?>

        <main>
            <h2 class="tituloMain">LOGIN PANEL ADMINISTRATIVO</h2>
            <hr>

            <div class="opciones1">
                <a id="inicioR" href="../index.php">Inicio</a>
            </div>

            <form action="loguear.php" method="post" name="form-log">
                
                <div class="elementos">
                    
                    <div class="labels">
                        <label class="elemento1" for="usuario">Usuario:</label>
                        <label class="elemento1" for="contrasenia">Contraseña:</label>
                    </div>

                    <div class="inputs">
                        <input class="elemento2" type="text" id="usuario" name="usuario">
                        <input class="elemento2" type="password" id="contrasenia" name="contrasenia">
                        <button type="submit" name="Submit" id="Submit">Acceder Contacto</button>
                    </div>
                </div>

            </form>

        </main>

        <?php
            include 'footerA.php';
        ?>
    </div>
</body>
</html>