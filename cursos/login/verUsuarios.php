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
            <h2>Ver Usuario</h2>
            <hr>
            <div class="botones">
                <a href="panelusuario.php" class="boton1 boton2"> << regresar </a>
            </div>

            <!-- zona del codigo para traer la informacion del php -->
            <?php
                require "conexion.php";

                $todos_usuarios = "SELECT * FROM usuarios ORDER BY id_usuario ASC";

                $resultado = mysqli_query($conectar, $todos_usuarios);

                while($row = mysqli_fetch_assoc($resultado)){
                    echo $row['id_usuario']."<br>";
                    echo $row['nombre_usuario']."<br>";
                    echo $row['contrasenia']."<br>";
                    echo $row['tipo_usuario']."<br>";
                }
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
                    $todos_usuarios = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
                    $resultado = mysqli_query($conectar, $todos_usuarios);
                    while ($row = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td> <?php echo $row['id_usuario']; ?> </td>
                    <td> <?php echo $row['nombre_usuario']; ?> </td>
                    <td> <?php echo $row['contrasenia']; ?> </td>
                    <td> <?php echo $row['tipo_usuario']; ?> </td>
                    <td> <a href="eliminar.php?id_usuario=<?php echo $row['id_usuario']; ?>">Eliminar</a> </td>
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