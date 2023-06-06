<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ancho">
        
        <?php
            include "header.php";
        ?>
        
        <div class="formulario">
            <div class="formulario-title">
                <h2>Proporcione correctamenente sus datos</h2>
                <p><span class="textoNegritas">Nota: </span>Los campos marcos con * son obligatorios</p>
            </div>

            <div class="formulario-divisor">
                <h3>ALTA DE PERSONAL</h3>
            </div>

            <div class="container-form">

                <form action="enviar.php" method="POST" class="formulario1" name="formulario1">
                    <label for="nombre">*Nombre(s): <input type="text" name="nombre" class="elemento1"  required></label>

                    <label for="curp">*CURP: <input type="text" name="curp" class="elemento1" required></label>

                    <label for="correo">E-mail: <input type="text" name="correo" class="elemento1"></label>

                    <label for="nacimiento">Fecha de Nacimiento: 
                        <select name="anio" id="anio">
                            <option value="">1900</option>
                            <option value="2000">2000</option>
                        </select>
                        <select name="mes" id="mes">
                            <option value="">Enero</option>
                            <option value="noviembre">noviembre</option>
                        </select>
                        <select name="dia" id="dia">
                            <option value="">1</option>
                            <option value="8">8</option>
                        </select>
                    </label>

                    <label for="Edad">*Edad: <input type="number" name="edad" class="elemento1" required></label>

                    <label for="hermanos">Hermanos?:
                        <input type="radio" name="hermano" value="si"> Si 
                        <input type="radio" name="hermano" value="no"> No
                    </label>

                    <label for="cantidad_hermanos">¿Cuantos?: 
                        <select name="cantidad_hermanos" id="cantidad-hermanos">
                            <option value="1">1</option>
                        </select>
                    </label>

                    <label for="tipo_sangre">Tipo de Sangre: <select name="tipo_sangre" id="tipo-sangre">
                        <option value="">SELECCIONE OTRA OPCION</option>
                        <option value="o-positivo">o-positivo</option>
                    </select>

                    <label for="discapacidad">Tipo de Sangre: <select name="discapacidad" id="discapacidad">
                        <option value="ninguna">NINGUNA</option>
                    </select>

                    <button type="submit">GUARDAR</button>

                    </label>
                </form>

                <img class="img-form" src="imagenes/fototeclado.jpg" alt="teclado">
            </div>

        </div>
        
        <?php
            include "footer.php";
        ?>
    </div>

</body>
</html>