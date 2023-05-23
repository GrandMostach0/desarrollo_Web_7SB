<?php
require "conexion.php";
$rutaservidor = "fotos";

$descripcionfoto = $_POST ['descripcion'];
$rutatemporal = $_FILES['imagen']['tmp_name'];
$nombreimagen = $_FILES['imagen']['name'];
$pesofoto = $_FILES['imagen']['size'];
$tipofoto = $_FILES['imagen']['type'];

$rutadestino = $rutaservidor . "/" . $nombreimagen;

move_uploaded_file($rutatemporal, $rutadestino);

$insertar = "INSERT INTO fotos (ruta_foto, descripcion_foto) VALUES ('$rutadestino','$descripcionfoto')";
$query = mysqli_query($conectar,$insertar);

if ($query){
  echo "
    <script>
        alert('si se GUARDO LOS DATOS DEL CURSO CORRECTAMENTE');
        location.href ='altaImagen.php';
    </script>
  ";
}else{
  echo "
  <script>
    alert('no se GUARDO LOS DATOS DEL CURSO CORRECTAMENTE');
    location.href ='altaImagen.php';
  </script>
  ";
}