<?php
    require "conexion.php";
    $rutaservidor = "fotos";

    $nombre = $_POST['usuario'];
    $apellido = $_POST['apellido'];

    // ----- FORMA PRA GUARDAR FOTO --
    $rutatemporal = $_FILES['imagen']['tmp_name'];
    $nombreimagen = $_FILES['imagen']['name'];
    $pesofoto = $_FILES['imagen']['size'];
    $tipofoto = $_FILES['imagen']['type'];
    
    $rutadestino = $rutaservidor . "/" . $nombreimagen;
    // ----- FIN -----

    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $compania = $_POST['compania'];
    $parentesco = $_POST['parentesco'];

    // echo $nombre."<br>";
    // echo $apellido."<br>";
    // echo $correo."<br>";
    // echo $celular."<br>";
    // echo $compania."<br>";
    // echo $parentesco."<br>";
    
    move_uploaded_file($rutatemporal, $rutadestino);

    $insertar = "INSERT INTO agenda (nombre, apellido, ruta_foto, correo, celular, compania, parentesco) VALUES ('$nombre', '$apellido', '$rutadestino', '$correo', '$celular', '$compania', '$parentesco')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("Se ha guradado correctamente");
            location.href = "nuevoDato.php";
        </script>';
    }else{
        echo'
        <script>
            alert("Ocurrio un error al guardar la informacion");
            location.href = "nuevoDato.php";
        </script>
        ';
    }