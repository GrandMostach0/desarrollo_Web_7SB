<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="titulo-2">
        <h1 class="titulo-h1">escuela de crusos de capacitacion</h1>
    </div>

    <div class="formulario">
        <form action="panelAdministrativo.php" method="POST" name="formulario1" class="formulario1">
            <h3>Acceso Panel Administrativo</h3>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input1">
            <input type="password" id="contra" name="contra" placeholder="Contraseña" class="input1">
            <button type="submit" name="Submit" class="botonReal">Login</button>
        </form>
    </div>
</body>
</html>