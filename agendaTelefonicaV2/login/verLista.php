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
            require "conexion.php";
        ?>

        <main>
            <h2 class="tituloMain">VER LISTA</h2>
            <hr>

            <div class="opciones1">
                <a id="inicioR" href="../index.php">Inicio</a>
            </div>

            <table>
                <tr>
                    <th class="id-element">ID</th>
                    <th class="id-element">FOTOS</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>CELULAR</th>
                    <th>COMPAÑIA</th>
                    <th>PARENTESCO</th>
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