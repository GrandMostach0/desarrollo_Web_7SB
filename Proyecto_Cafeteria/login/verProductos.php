<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Productos | Place & Delirio</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="styleLoginMenu.css">
</head>

<body>
    <!-- HEADER-TITLE -->
    <?php
        include "upperCaseLogin.php";
        include "validarInicioSesion.php";
        require "../conexion.php";
    ?>

    <div class="container-opciones">
        
        <?php
            include "modulo-menu.php";
        ?>

        <div class="menu-show">
            <div class="menu-show-header">
                <div class="description">
                    <h3>VER PRODUCTOS</h3>
                </div>
                <img class="menu-show-header-img" src="../image/logoDeliros2.jpg" alt="Logo delirios">
            </div>

            <div class="container-card-personal">

                <?php
                    $lista_productos = "SELECT * FROM productos ORDER BY id_producto ASC";
                    $resultado = mysqli_query($conectar, $lista_productos);

                    while($row = mysqli_fetch_assoc($resultado)){
                ?>

                <div class="card-personal">
                    <div class="info-card-personal producto">
                        <div class="img-producto">
                            <img src="../image/cafe1.png" alt="  ">
                        </div>

                        <div class="title-campos">
                            <p class="textAmarillo">Precio:</p>
                            <p class="textAmarillo">Nombre:</p>
                        </div>

                        <div class="dato-campos">
                            <p>$ <?php echo $row['precio_producto']?> </p>
                            <p><?php echo $row['nombre_producto']?></p>
                        </div>

                        <div class="eliminar-producto">
                            <a href="eliminarProducto.php?id_producto=<?php echo $row['id_producto']; ?>" style="text-decoration: none;"> ELIMINAR </a>
                        </div>
                    </div>
                </div>

                <?php
                    }
                    //liberar los datos
                    mysqli_free_result($resultado);

                ?>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <?php
        include "footerCaseLogin.php";
    ?>

</body>
</html>