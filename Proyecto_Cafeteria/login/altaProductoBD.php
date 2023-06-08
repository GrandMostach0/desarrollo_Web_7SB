<?php

require "../conexion.php";
$rutaservidor = "../image";

//obtenemos los datos del formulario metodo POST
$nombre_producto = $_POST["nombre_producto"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

//imagen
$rutatemporal = $_FILES['imagen']['tmp_name'];
$nombreimagen = $_FILES['imagen']['name'];
$pesofoto = $_FILES['imagen']['size'];
$tipofoto = $_FILES['imagen']['type'];

$rutadestino = $rutaservidor . "/" . $nombreimagen;

echo $nombre_producto."<br>";
echo $precio."<br>";
echo $cantidad."<br>";
echo $rutadestino."<br>";

move_uploaded_file($rutatemporal, $rutadestino);

$insertar = "INSERT INTO productos (nombre_producto, precio_producto, cantidad_producto, imagen_producto) VALUES ('$nombre_producto', '$precio', '$cantidad', '$rutadestino')";
$query = mysqli_query($conectar,$insertar);

if ($query){
  echo "<script>
  alert('si se GUARDO LOS DATOS DEL CURSO CORRECTAMENTE');
  location.href = 'AltaProducto.php';
  </script>
  ";
}else{
  echo "<script>
  alert('no se GUARDO LOS DATOS DEL CURSO CORRECTAMENTE');
  location.href = 'AltaProducto.php';
  </script>
  ";
}