<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
//vamos a recibir la informacion del formulario dependiendo del metodo que este caso fue por el metodo post
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $matricula = $_POST["matricula"];
    $carrera = $_POST["carrera"];
    //creacion de varialbe $nombreVariable

    //mostrar 1 forma: print_r() o 2 forma: echo $nombre para concaternar se coloca un punto.
    echo "Mi nombre es: "."<span class='nombre'>".$nombre."</span><br><br>";

    echo $nombre . "<br>";
    echo $apellido . "<br>";
    echo $matricula . "<br>";
    echo $carrera . "<br>";
    ?>

    <table class="tblcarrera">
        <tr>
            <td>NOMBRE: </td>
            <td class="">
                <?php
                    echo $nombre." ".$apellido;
                ?>
            </td>
        </tr>
        <tr>
            <td>MATRICULA: </td>
            <td>
                <?php
                    echo $matricula;
                ?>
            </td>
        </tr>
        <tr>
            <td>CARRERA: </td>
            <td>
                <?php
                    echo $carrera;
                ?>
            </td>
        </tr>
    </table>

</body>
</html>