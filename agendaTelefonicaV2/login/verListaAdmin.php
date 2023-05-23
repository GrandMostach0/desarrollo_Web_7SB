<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="ancho">
        <?php
            include 'validarLogeo.php';
            include 'headerA.php';
            require "conexion.php";
        ?>

        <main>
            <div class="header-main">
                <h2 class="tituloMain">VER LISTA - ADMINISTRATIVO</h2>
                <a href="cerrarSesion.php" class="cerrarSesion">CERRAR SESION</a>
            </div>
            <hr>

            <div class="opciones1">
                <a id="inicioR" href="indexLoginAdmin.php">Inicio</a>
            </div>

            <table>
                <tr>
                    <th class="id-element">ID</th>
                    <th class="id-element">FOTO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>CELULAR</th>
                    <th>COMPAÑIA</th>
                    <th>PARENTESCO</th>
                    <th></th>
                </tr>

                <?php
                    $todos_usuarios = "SELECT * FROM agenda ORDER BY id ASC";

                    $resultado = mysqli_query($conectar, $todos_usuarios);

                    while($row = mysqli_fetch_assoc($resultado)){
                ?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><img src="<?php echo $row['ruta_foto'];?>" alt=""></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['apellido'];?></td>
                    <td><?php echo $row['correo'];?></td>
                    <td><?php echo $row['celular'];?></td>
                    <td><?php echo $row['compania'];?></td>
                    <td><?php echo $row['parentesco'];?></td>
                    <td> <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a> </td>
                </tr>

                <?php
                    }
                    //liberar los datos
                    mysqli_free_result($resultado);

                ?>

            </table>

        </main>

        <?php
            include 'footerA.php';
        ?>
    </div>
</body>
</html>