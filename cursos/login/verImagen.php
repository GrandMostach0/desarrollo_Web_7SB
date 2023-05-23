<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel usuario</title>
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
            <h2> - - Ver Imagen - - </h2>
            <hr>
            <div class="botones">
                <a href="galeria.php" class="boton1 boton2"> << regresar </a>
            </div>

            <!-- zona del codigo para traer la informacion del php -->
            <?php
                require "conexion.php";
            ?>

            <table class="tabla">

                <tr>
                    <th>id</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Tipo de Usuario</th>
                    <th>Eliminar</th>
                </tr>

                <?php
                    $todos_usuarios = "SELECT * FROM fotos ORDER BY id_foto ASC";
                    $resultado = mysqli_query($conectar, $todos_usuarios);
                    while ($row = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td> <?php echo $row['id_foto']; ?> </td>
                    <td> <img src="<?php echo $row['ruta_foto']; ?>" alt="imagen-BD"> </td>
                    <td> <?php echo $row['descripcion_foto']; ?> </td>
                    <td> nothing </td>
                    <td> <a href="eliminarFoto.php?id_foto=<?php echo $row['id_foto']; ?>">Eliminar</a> </td>
                </tr>

                <?php
                    }
                    //liberar los datos
                    mysqli_free_result($resultado);
                ?>
            </table>

        </div>
        
    </div>
</body>
</html>