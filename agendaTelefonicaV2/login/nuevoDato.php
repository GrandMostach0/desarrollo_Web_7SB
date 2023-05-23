<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Dato</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="ancho">
        <?php
            include 'validarLogeo.php';
            include 'headerA.php';
        ?>

        <main>
            <h2 class="tituloMain">NUEVO CONTACTO</h2>
            <hr>

            <div class="opciones opciones1">
                <a href="indexLoginAdmin.php">Inicio</a>
                <a href="verListaAdmin.php">Ver Lista</a>
            </div>

            <form action="guardar.php" method="POST" name="formulario1">
                
                <div class="elementos">
                    
                    <div class="labels">
                        <label class="elemento1" for="nombre">Nombre:</label>
                        <label class="elemento1" for="apellido">Apellido:</label>
                        <label class="elemento1" for="imagen">Subir foto:</label>
                        <label class="elemento1" for="correo">Email:</label>
                        <label class="elemento1" for="celular">Celular:</label>
                        <label class="elemento1" for="compania">Compañia:</label>
                        <label class="elemento1" for="parentesco">Parentesco:</label>
                    </div>

                    <div class="inputs">
                        <input class="elemento2" type="text" id="usuario" name="usuario" required>
                        <input class="elemento2" type="text" id="apellido" name="apellido" required>
                        <input type="file" class="elemento2" name="imagen" required>
                        <input class="elemento2" type="email" id="correo" name="correo" required>
                        <input class="elemento2" type="tel" id="celular" name="celular" maxlength="10" required>
                        
                        <div class="radio-button">
                            <label for="telcel"><input type="radio" name="compania" value="TELCEL" required>TELCEL</label>
                            <label for="telcel"><input type="radio" name="compania" value="AT&T" required>AT&T</label>
                            <label for="telcel"><input type="radio" name="compania" value="MOVISTAR" required>MOVISTAR</label>
                        </div>

                        <select class="elemento2" name="parentesco" id="parentesco" required>
                            <option value="">Escoge una opcion</option>
                            <option value="Escuela">Escuela</option>
                            <option value="Familia">Familia</option>
                            <option value="Amigo">Amigo</option>
                            <option value="Conocido">Conocido</option>
                        </select>

                        <button type="submit" name="Submit" id="Submit">Guardar Contacto</button>
                        <button type="reset" name="Reset" id="Reset">Borrar datos</button>
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