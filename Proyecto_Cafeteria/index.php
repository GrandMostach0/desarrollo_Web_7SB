<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Cafeteria</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <?php
        require "conexion.php";
    ?>

    <div class="ancho">
        
        <!-- MENU -->
        <div class="header-main">
            <div class="header">
                <h1>Place & Delirio</h1>
                <p>cafeteria * chocolateria</p>
            </div>
            
            <nav class="nav-menu">
                <a href="#nosotros">Nosotros</a>
                <a href="#productos">Horario</a>
                <a href="#productos">Productos</a>
                <a href="#ubicacion">Ubicación</a>
            </nav>
            
            <div class="iniciar-sesion">
                <a href="Form-login.php">Iniciar Sesión</a>
            </div>
        </div>

        <!-- BANNER -->
        <div class="banner">
            <img src="image/bannerCafe.png" alt="">

            <div class="text-banner">
                <h1>TODA NUESTRA TRADICION HASTA TU HOGAR</h1>
                <p>!la calidad que te ha enamorado ahora puedes disfrutarla en donde estés¡</p>
                <a href="" class="boton-banner">Disfruta Ahora</a>
            </div>

        </div>

        <!-- MARQUEE -->
        <div class="container-marquee">
            <div class="card-marquee">
                <img src="image/bannerMarque1.png" alt="img-marquee1">
                
                <div class="text-card-marquee">
                    <h3 class="title-marquee">Nuestra especialidad la chocolateria</h3>
                    <p>En Placer & Delirio tenemos el propósito de rescatar las tradiciones yucatecas a través de las bebidas de chocolates así
                    como las variedades de productos que nos ofrece el árbol del cacao.</p>
                </div>
            </div>

            <div class="card-marquee">
                <img src="image/bannerMarque1.png" alt="img-marquee1">
            
                <div class="text-card-marquee">
                    <h3 class="title-marquee">Nuestra especialidad la chocolateria</h3>
                    <p>En Placer & Delirio tenemos el propósito de rescatar las tradiciones yucatecas a través de las bebidas de
                        chocolates así
                        como las variedades de productos que nos ofrece el árbol del cacao.</p>
                </div>
            </div>

            <div class="card-marquee">
                <img src="image/bannerMarque1.png" alt="img-marquee1">
                
                <div class="text-card-marquee">
                    <h3 class="title-marquee">Nuestra especialidad la chocolateria</h3>
                    <p>En Placer & Delirio tenemos el propósito de rescatar las tradiciones yucatecas a través de las bebidas de chocolates así
                    como las variedades de productos que nos ofrece el árbol del cacao.</p>
                </div>
            </div>
        </div>

        <!-- PRODUCTOS -->
        <div class="container-separador">
            <nav id="productos"></nav>
            <h2 class="title-marquee">PRODUCTOS</h2>

            <div class="container-productos-card">

                <?php
                    $lista_productos = "SELECT * FROM productos ORDER BY id_producto ASC";
                    $resultado = mysqli_query($conectar, $lista_productos);

                    while($row = mysqli_fetch_assoc($resultado)){
                ?>

                <div class="card-producto">
                    <img src="image/cafe1.png" alt="Cafe1">

                    <div class="text-card-prodcuto">
                        <h1>$ <?php echo $row['precio_producto']?></h1>
                        <p><?php echo $row['nombre_producto']?></p>
                    </div>
                </div>

                <?php
                    }
                    //liberar los datos
                    mysqli_free_result($resultado);

                ?>
            </div>
        </div>

        <!-- HORARIO -->
        <div class="container-separador">
            <nav id="horario"></nav>
            <h2 class="title-marquee">HORARIO</h2>
            <p class="textCentrado">De Lunes a Domingo Entregas de 8:00 am a 9:00 pm (Pedidos fuera de horario se tomarán para el día siguiente).</p>
        </div>

        <!-- NOSOTROS -->
        <div class="container-separador nosotros">
            <nav id="nosotros"></nav>
            <h2 class="title-marquee">NOSOTROS</h2>
            <div class="container-nosotros">
                <div class="container-text-nosotros">
                    <p class="textCentrado">
                        La historia de nuestra repostería está íntimamente ligada a la historia de la península de Yucatán. Todo comenzó
                        en
                        1848, cuando en plena efervescencia de la guerra de castas muchas familias del interior del estado de todas la
                        clases
                        sociales en un gran éxodo, fueron llegando a la ciudad de Mérida huyendo a toda prisa para salvar sus vidas de
                        los
                        ataques de los sublevados; dejando sus propiedades, riquezas y haciendas llevando sólo lo que sus manos podían
                        cargar............
                    </p>
                </div>
                
                <img src="image/imgNosotros.png" alt="Img Nosotros">
            </div>

        </div>

        <!-- VIDEO -->
        <div class="container-separador textCentrado">
            <iframe width="70%" height="500px" src="https://www.youtube.com/embed/df3JeXVWYWA" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <!-- UBICACION -->
        <div class="container-separador textCentrado">
            <nav id="ubicacion"></nav>
            <h2 class="title-marquee">UBICACIÓN</h2>
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.570219003467!2d-89.63340292512652!3d20.96976778980286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673dc3de206bd%3A0x82c2a803a8e7da7d!2sPlacer%20%26%20Delirio!5e0!3m2!1ses-419!2smx!4v1686072020422!5m2!1ses-419!2smx"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <br>
            <p>C. 59 572, entre 72 Y 74, Parque Santiago, Centro, 97000 Mérida, Yuc.</p>
        </div>

        <!-- FOOTER -->
        <div class="footer">

            <div class="informacion">
                <div class="icons">
                    <a target="_blank" href="https://www.facebook.com/PlaceryDelirio"><img class="facebook-f" src="icons/facebook-f.svg" alt="facebook-f"></a>
                    <a target="_blank" href="https://www.instagram.com/placerydelirio/"><img class="instagram" src="icons/instagram.svg" alt="instagram"></a>
                </div>

                <p>© 2023, <a href="https://ecohete.com/" target="_blank">Placer & DelirioImpulsado por 🚀 eCohete | Agencia de eCommerce.</a></p>
            </div>

            <p>Pagina Secundario: <a href="https://placerydelirio.com">https://placerydelirio.com/</a></p>

            <p>Tel: <a href="tel:+16508637580">+16508637580</a></p>
        </div>

    </div>
</body>
</html>