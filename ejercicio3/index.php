<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para agregar datos a la BD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ancho">
        <header>
            <h1 class="title negritas">instituto tecnologico de merida</h1>
            <img src="img/logotransparente.png" alt="iconoTecn">
        </header>
        <div class="formulario">
            <p class="note-form">Llena el sisguiente fomrulario con los datos para el pre-registro de la materia de verano</p>

            <form action="guardar.php" method="post" name="formulario1">
                <label for="carrera">Carrera:</label>
                <select name="carrera" id="carrera" required>
                    <option value="">Escoge tu carrera</option>
                    <option value="ing-sistemas">Ing. Sistemas</option>
                    <option value="ing-civil">Ing. Civil</option>
                    <option value="ing-biomedica">Ing. biomedica</option>
                </select>

                <label for="ingreso">Ingreso:</label>
                <select name="ingreso" id="ingreso">
                    <option value="">Cual es tu ingreso</option>
                    <option value="ing-1">Ingreso 1</option>
                    <option value="ing-2">Ingreso 2</option>
                    <option value="ing-3">Ingreso 3</option>
                </select>

                <label for="materia">Materia:</label>
                <input type="text" name="materia" id="materia" placeholder="Materia de verano" required>

                <div class="botones-form">
                    <button type="submit" name="Submit">Guardar</button>
                    <button type="reset" name="Reset">Borrar</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>