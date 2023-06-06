<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ancho">
        
        <?php
            include "header.php";
            require "conexion.php";
        ?>
        
        <div class="conaiter-datos">

                <?php
                    $todos_usuarios = "SELECT * FROM personal ORDER BY id_personal ASC";
                    $resultado = mysqli_query($conectar, $todos_usuarios);
                    while($row = mysqli_fetch_assoc($resultado)){
                ?>

            <div class="container-datos-title"><h2>INFORMACION DEL TRABAJADOR</h2></div>
            
            <div class="container-datos-1">
                <h3 class="textoRojo">NOMBRE COMPLETO: <?php echo $row['nombre'];?></h3>
                <h3 class="textoRojo">FECHA DE NACIMIENTO: <?php echo $row['anio'].$row['mes'].$row['dia'];?></h3>
                <h3 class="textoRojo">EMAIL: <?php echo $row['correo'];?></h3>
                <h3 class="textoRojo">TIPO DE SANGRE: <?php echo $row['tipo_sangre'];?></h3>
                <h3 class="textoRojo">DISCAPACIDAD: <?php echo $row['discapacidad'];?></h3>
            </div>

            <div class="container-datos-2">
                <h3 class="textoRojo">CURP: <?php echo $row['curp'];?> </h3>
                <h3 class="textoRojo">EDAD: <?php echo $row['edad'];?> </h3>
                <h3 class="textoRojo">HERMANOS: <?php echo $row['hermanos'];?></h3>
                <h3 class="textoRojo">CUANTOS: <?php echo $row['cantidad_hermanos'];?></h3>
            </div>

            <div class="boton-eliminar">
                <img src="imagenes/iconobasura.jpg" alt="">
                <a href="eliminar.php?id_personal=<?php echo $row['id_personal']; ?>">ELIMINAR</a>
            </div>

            <?php
                }
                //liberar los datos
                mysqli_free_result($resultado);

            ?>

        </div>
        
        <?php
            include "footer.php";
        ?>

    </div>

</body>
</html>