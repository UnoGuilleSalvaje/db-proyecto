<?php
session_start();

// Define las clases CSS en una variable
$class = "logged-out"; // Clase por defecto si el usuario no está logueado

if (isset($_SESSION['username'])) {
    // Cambia la clase si el usuario está logueado
    $class = "logged-in";
    echo "Bienvenido, " . $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <meta name="title" content="Vaniofrénicos.com | sitio oficial Vaniofrénicos Galería" />
    <meta property="og:type" content="website" />
    <link rel="icon" href="../../media/g.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../media/g.png" type="image/x-icon" >
    <link rel="stylesheet" href="../../estilos/styles.css">
    <link rel="stylesheet" href="about.css">
    <link href="../../index.html" rel="canonical" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<body>
<div id="__next">
        <div id="terrigen-page" class="page">
            <div id="page-wrapper" class="page__body">
                <header class="page__header">

                    <!-- Barra de Navegación ----------------------------------------------------- -->

                    <nav class="navigation__container">
                        <div class="navigation__container--navs 
                            navigation__container--fixed 
                            navigation__container--top">
                            <section class="desktopNav__container" data-top-component="desktop-nav"
                                data-page-position="nav">
                                <div class="desktopNav">
                                    <div class="desktopNav__upper">
                                        <div class="desktopNav__tabAndLogoContainer">
                                        <div class="insider desktopNav__tabContainer">
    <div class="insider desktopNav__tab">
       
        <div class="user-menu__links">

            <?php
            // Verifica si el usuario está logueado
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                date_default_timezone_set('America/Mexico_City');
                // Usuario logueado
                $hora = date("H");
                $saludo = "";
                $icono = "";

                if ($hora < 12) {
                    $saludo = "Buenos días";
                    $icono = "fas fa-sun"; // Icono de sol para la mañana
                } elseif ($hora < 18) {
                    $saludo = "Buenas tardes";
                    $icono = "fas fa-cloud-sun"; // Icono de sol parcial para la tarde
                } else {
                    $saludo = "Buenas noches";
                    $icono = "fas fa-moon"; // Icono de luna para la noche
                }

            echo '<p class="maravillas-title"><i class="' . $icono . '" style="color: #58bfb5;"></i> ' . $saludo . ', ' . htmlspecialchars($_SESSION['username']) . '</p>';

                        } else {
                            // Usuario no logueado
                            echo '<a class="user-menu-tab sign-in" href="../../login_registro/index.php">
                    <i class="fas fa-sign-in-alt"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> INICIAR SESIÓN</font>
                    </font>
                </a>
                <span class="user-menu-tab separator">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> | </font>
                    </font>
                </span>
                <a class="user-menu-tab join-dropdown" href="../../login_registro/index.php">
                    <i class="fas fa-user-plus"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> REGISTRARSE</font>
                    </font>
                </a>';

                        }
                        ?>
                        <span class="user-menu-tab username"></span>
                        <span class="user-menu-tab points"></span>
                    </div> 
                </div>
            </div>
                                            
            <a class="desktopNav__logo" href="../../index.php">
                <span class="icon--svg icon--svg mvl-animated-logo" aria-hidden="true">
                    <img src="../../media/v.png" alt=""><!--LOGO DEL SITIO-->
                </span>
            </a>
                                            
            <div class="desktopNav__right-links">
        <div class="desktopNav__tabContainer">
            <?php if (isset($_SESSION['username'])): ?>
                <div class="searchPromo__wrap">
                    <br><br>
                    <a href="../../logout.php" class="logout-link" style="margin-right: 15px;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                </div>
        <?php else: ?>
            <!-- Usuario no logueado: Muestra la sección de login -->
            <a class="searchPromo desktopNav__tab" style="vertical-align: inherit;" href="../../login_registro/index.php">
                <img class="searchPromo__image" src="../../media/tickets.png" alt="logo" />
                <span class="" style="text-decoration: none;">¡Únete!</span>
            </a>
        <?php endif; ?>
    </div>

            <div class="search desktopNav__tabContainer ">
                <a id="search" class="search desktopNav__tab" aria-label="search"
                    href="#">
                    <span
                        class="icon--svg icon--svg--black-fill icon--svg--black-stroke icon--search"
                        aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                            height="17" viewBox="0 0 19 17" fill-rule="evenodd">
                            <circle cx="6.5" cy="6.5" r="5.5">

                            </circle>
                            <path d="M14 14l3.536 3.536">

                            </path>
                        </svg>
                    </span>
                </a>
            </div>
                                                
            </div>
            
        </div>
    </div>
                    
                        <!-- Links   -->
                        <div class="desktopNav__lower">
                            <ul class="desktopNav__linkContainer">
                                <li class="desktopNav__linkWrapper">
                                    <a id="mvl-flyout-button-0" class="desktopNav__link mvl-flyout-button"
                                        href="../../index.php">Inicio</a>
                                    <div class="desktopNav__flyout-container nav-flyout-container-0">
                                        
                                    </div>
                                </li>
                                <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-1"
                                        class="desktopNav__link mvl-flyout-button"
                                        href="../../tienda.php">Galería</a>
                                    <div class="desktopNav__flyout-container nav-flyout-container-1">
                                    
                                    </div>
                                </li>
                            <li class="desktopNav__linkWrapper ">
                            <a class="desktopNav__link" href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorías
                            </a>
                            <ul class="dropdown-menu nav-flyout-container-2" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="../../mostrar_peliculas.php?genero=Retrato">Retratos</a></li>
                            <li><a class="dropdown-item" href="../../mostrar_peliculas.php?genero=Paisaje">Paisajes</a></li>
                            <li><a class="dropdown-item" href="../../mostrar_peliculas.php?genero=Bodegón">Bodegón</a></li>
                            </ul>
                        </li>
                                            
                            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-4"
                                    class="desktopNav__link mvl-flyout-button" href="../../about/AboutPage/about.php">Acerca de</a>
                                <div class="desktopNav__flyout-container nav-flyout-container-4">
                                    
                                </div>
                            </li>
                            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-5"
                                    class="desktopNav__link mvl-flyout-button"
                                    href="../../ayuda.php">Ayuda</a>
                                <div class="desktopNav__flyout-container nav-flyout-container-5">
                                    
                                </div>
                            </li>
                            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-6"
                                    class="desktopNav__link mvl-flyout-button"
                                    href="../../Contactanos/index.php">Contáctanos</a>
                                <div class="desktopNav__flyout-container nav-flyout-container-6">
                                    
                                </div>
                            </li>
                <li class="desktopNav__linkWrapper">
                    <?php
                    // Verifica si el usuario está logueado y si su rol es 'admin'

                    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {  
                        echo '<li class="desktopNav__linkWrapper ">
                        <a class="desktopNav__link" href="../../AdministrarProductos.php" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu nav-flyout-container-2" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="../../alta_producto.php">Altas</a></li>
                        <li><a class="dropdown-item" href="../../editar_producto.php">Cambios</a></li>
                        <li><a class="dropdown-item" href="../../eliminar_producto.php">Bajas</a></li>
                        </ul>
                    </li>';
                    }
                    ?>
                </li>

                                        </ul>
                                    </div>
                                <!-- Fin de links -->

                                </div>
                            </section>
                        </div>
                    </nav>

                <!-- Fin de la barra de Navegación ---------------------------------------------------------------- -->
</header>
                    
     <div class="container2 <?php echo $class; ?>">
    <br>
    <br>
    <h1 style="text-align: center;">Acerca de Nosotros</h1>
        Bienvenido a Vaniofrénicos, un espacio dedicado a la expresión artística única y provocativa. 
        <br>
        Nos enorgullece ser una galería de arte que desafía las convenciones y celebra la creatividad sin 
        <br>restricciones.
        <br>
        Buscamos ir más allá de los límites tradicionales del arte. 
        <br>
        Nuestra misión es proporcionar una plataforma para las personas que desean explorar la dualidad entre cordura e insanidad, 
        <br>llevándonos a lugares inexplorados de la mente humana.
        <br>
        ¡Conoce a nuestro equipo!
    </div>
    <br>

    <br><br>
    <div class="container2">
        Explora nuestras exposiciones y descubre obras que desafían la percepción y cuestionan la realidad. 
        <br>
        Nuestro compromiso es crear un espacio inclusivo para todos aquellos que buscan la belleza en la diversidad del arte. 
        <br>Vaniofrénicos es más que una galería, es un viaje a través de las mentes creativas y un escaparate de la expresión 
        <br>artística en su forma más auténtica.
        ¡Esperamos que disfrutes explorando nuestra galería y viendo obras de tus artistas favoritos!
    </div>

<br><br>

    <h1 style="text-align: center;">Acerca de Vaniofrénicos</h1>
<br>

<div class="containerr">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/vision.jpg" alt="Visión" style="width: 300px; height: 200px;">
                <h3>Visión</h3>
                <p>Ser líderes globales en la promoción del arte vanguardista, ofreciendo una experiencia única y enriquecedora para cada apasionado del arte.</p>
                <br>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/mision.jpg" alt="Misión" style="width: 300px; height: 250px;">
                <h3>Misión</h3>
                <p>Proporcionar una plataforma para artistas innovadores, asegurando la diversidad y la accesibilidad de obras de arte de alta calidad, para que todos puedan explorar y apreciar.</p>
                <br>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/objetivo.jpg" alt="Objetivo" style="width: 300px; height: 200px;">
                <h3>Objetivo</h3>
                <p>Innovar constantemente en nuestra galería para hacer que la exploración y disfrute del arte contemporáneo sea una experiencia emocionante y accesible para todos.</p>
            </div>
        </div>
    </div>
</div>
                    </section>
            <!-- Empieza página-->
                    
     <div class="container2 <?php echo $class; ?>">
    <br>
    <br>
    <h1 style="text-align: center;">Acerca de Nosotros</h1>
        Bienvenido a Vaniofrénicos, un espacio dedicado a la expresión artística única y provocativa. 
        <br>
        Nos enorgullece ser una galería de arte que desafía las convenciones y celebra la creatividad sin 
        <br>restricciones.
        <br>
        Buscamos ir más allá de los límites tradicionales del arte. 
        <br>
        Nuestra misión es proporcionar una plataforma para las personas que desean explorar la dualidad entre cordura e insanidad, 
        <br>llevándonos a lugares inexplorados de la mente humana.
        <br>
        ¡Conoce a nuestro equipo!
    </div>
    <br>

    <div class="container">
        <div class="box box-1" style="--img: url(../img/arely.jpeg);" 
        data-text="Arely Zuleika Espino Dávalos"></div>
        <div class="box box-2" style="--img: url(../img/guille.jpg);" 
        data-text="Guillermo Alfonso Castañeda Hernández"></div>
        <div class="box box-3" style="--img: url(../img/vania.jpg);" 
        data-text="Vania Nayeli Pérez Ortíz"></div>
        <div class="box box-4" style="--img: url(../img/axel.jpg);" 
        data-text="Axel Arturo Paredes Huerta"></div>
        <div class="box box-7" style="--img: url(../img/americo.jpg);" 
        data-text="Américo Ismael Calzada González"></div>
    </div>

    <br><br>
    <div class="container2">
        Explora nuestras exposiciones y descubre obras que desafían la percepción y cuestionan la realidad. 
        <br>
        Nuestro compromiso es crear un espacio inclusivo para todos aquellos que buscan la belleza en la diversidad del arte. 
        <br>Vaniofrénicos es más que una galería, es un viaje a través de las mentes creativas y un escaparate de la expresión 
        <br>artística en su forma más auténtica.
        ¡Esperamos que disfrutes explorando nuestra galería y viendo obras de tus artistas favoritos!
    </div>

<br><br>

    <h1 style="text-align: center;">Acerca de Vaniofrénicos</h1>
<br>

<div class="containerr">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/vision.jpg" alt="Visión" style="width: 300px; height: 200px;">
                <h3>Visión</h3>
                <p>Ser líderes globales en la promoción del arte vanguardista, ofreciendo una experiencia única y enriquecedora para cada apasionado del arte.</p>
                <br>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/mision.jpg" alt="Misión" style="width: 300px; height: 250px;">
                <h3>Misión</h3>
                <p>Proporcionar una plataforma para artistas innovadores, asegurando la diversidad y la accesibilidad de obras de arte de alta calidad, para que todos puedan explorar y apreciar.</p>
                <br>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="tool-card">
                <img src="../img/objetivo.jpg" alt="Objetivo" style="width: 300px; height: 200px;">
                <h3>Objetivo</h3>
                <p>Innovar constantemente en nuestra galería para hacer que la exploración y disfrute del arte contemporáneo sea una experiencia emocionante y accesible para todos.</p>
            </div>
        </div>
    </div>
</div>



    
    <br><br><br>
    <!-- Termina página-->
    
                   <!--Aqui inicia nuestro footer -->
                   <footer class="page__footer">
                    <footer class="main-footer">
                        <div class="main-footer__full-content">
                            <div class="main-footer__links"><a class="main-footer__logo" href="index.html">
                                <span class="icon--svg main-footer__logo--svg" aria-hidden="true">
                                      <!--Icono G-->    <img src="../../media/g.png" alt="" style="width: 120px; margin-left: 19px; ">
                                </span></a>
                                <nav class="main-footer__primary-links" aria-label="Primary footer navigtion">
                                    <ul>
                                        <li class="main-footer__link"><a href="../../index.php">Inicio</a>
                                        </li>
                                        <li class="main-footer__link"><a href="../../tienda.php">Todas las Obras</a>
                                        </li>
                                        <li class="main-footer__link"><a href="../../about/AboutPage/about.php">Acerca de</a>
                                        </li>
                                        <li class="main-footer__link"><a href="../../ayuda.php">Ayuda</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="main-footer__secondary-links" aria-label="Secondary footer navigation">
        <ul>
            <li class="main-footer__link"><a href="#">Galerías y Exposiciones</a></li>
            <li class="main-footer__link"><a href="#">Cómo Comprar Arte</a></li>
            <li class="main-footer__link"><a href="#">Consultas y Soporte</a></li>
            <li class="main-footer__link"><a href="#">Sobre Vaniofrénicos Espacio</a></li>
        </ul>
    </nav>
    </div>

    <nav class="main-footer__promo-links" aria-label="Promotional footer navigation">
        <div class="main-footer__promotion">
            <div class="main-footer__promotion-image-wrapper">
                <figure class="img__wrapper">
                    <img src="../../media/art_palette_icon.png" style="width: 40px; height: 40px; margin-left: 25px;" alt="Icono de Paleta de Arte" class="main-footer__promotion-image" />
                </figure>
            </div>
            <div class="main-footer__promotion-info">
                <h4 class="main-footer__promotion-title">Descubre Nuevos Artistas</h4>
                <p class="main-footer__promotion-description">Explora colecciones únicas y encuentra tu próxima obra maestra</p>
            </div>
        </div>

        <div class="main-footer__promotion">
            <div class="main-footer__promotion-image-wrapper">
                <figure class="img__wrapper">
                    <img src="../../media/art_exhibition_icon.png" style="width: 40px; height: 40px; margin-left: 25px;" alt="Icono de Exposición" class="main-footer__promotion-image" />
                </figure>
            </div>
            <div class="main-footer__promotion-info">
                <h4 class="main-footer__promotion-title">Participa en Eventos de Arte</h4>
                <p class="main-footer__promotion-description">Asiste a eventos y exposiciones exclusivas en todo el mundo</p>
            </div>
        </div>
    </nav>

            <!--Redes sociales-->
    <nav class="main-footer__follow" aria-label="Social footer navigtion">
    <h4 class="main-footer__title">Síguenos en nuestras redes sociales</h4>
    <ul class="social-links footer__social">
        <li class="footer__social__img"><a target="_blank"
                aria-label="follow us on Facebook, opens a new window" class=""
                href="https://www.facebook.com/"><span class="icon--svgg icon--svgg--gray-fill icon--facebook "
                    aria-hidden="true">
                    <!--Facebook -->
                    <svg xmlns="http://www.w3.org/2000/s" width="18"
                        height="18" viewBox="0 0 18 18">
                        <!--icono de facebook-->
                        <path fill-rule="evenodd"
                            d="M9.426 17.647H.974A.974.974 0 010 16.673V.974C0 .436.436 0 .974 0h15.7c.537 0 .973.436.973.974v15.699a.974.974 0 01-.974.974h-4.497v-6.834h2.294l.343-2.663h-2.637v-1.7c0-.772.214-1.297 1.32-1.297h1.41V2.77a18.853 18.853 0 00-2.055-.105c-2.033 0-3.425 1.241-3.425 3.52V8.15h-2.3v2.663h2.3v6.834z">
                        </path>
                    </svg></span></a></li>
        <li class="footer__social__img"><a target="_blank"
                aria-label="follow us on Twitter, opens a new window" class=""
                href="https://twitter.com/"><span
                    class="icon--svgg icon--svgg--gray-fill icon--twitter"
                    aria-hidden="true">
                    <!--twitter-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 18 18">
                        <!--icono de twitter-->
                        <path
                            d="M3.5 5.1l3.8 5L4 13.6c-1.9 1.8-3.1 3.6-2.8 3.9.3.3 1.7-.8 3.1-2.5 3.2-3.8 4.1-3.8 6.4 0 1.3 2.2 2.5 3 4.5 3H18l-3.6-5-3.7-5.1L13.9 4c1.8-2.2 2.8-4 2.3-4-.4 0-1.8 1.3-3 3-1.3 1.6-2.6 3-3 3-.4 0-1.6-1.4-2.7-3C6.1.9 4.7 0 2.7 0H-.2l3.7 5.1zm6.3 3.3c5.3 7.6 5.8 8.6 4.4 8.6C13.4 17 3 2.7 3 1.6c0-2 2.3.3 6.8 6.8z">
                        </path>
                    </svg></span></a></li>
        <li class="footer__social__img"><a target="_blank"
                aria-label="follow us on Instagram, opens a new window" class=""
                href="https://www.instagram.com/"><span
                    class="icon--svgg icon--svgg--gray-fill" aria-hidden="true">
                    <!--Instagram-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <!--logo de instagram-->
                        <path fill-rule="evenodd"
                            d="M15.441 15.993H2.206a.552.552 0 01-.552-.552V7.17H3.86c-.287.414-.384 1.185-.384 1.675 0 2.953 2.408 5.356 5.368 5.356 2.96 0 5.368-2.403 5.368-5.356 0-.49-.069-1.25-.425-1.675h2.206v8.272a.552.552 0 01-.552.552M8.844 5.458a3.39 3.39 0 013.394 3.386 3.39 3.39 0 01-3.394 3.386A3.39 3.39 0 015.45 8.844a3.39 3.39 0 013.393-3.386m4.391-3.252h1.655c.304 0 .551.247.551.551v1.655a.552.552 0 01-.551.551h-1.655a.552.552 0 01-.551-.551V2.757c0-.304.247-.551.551-.551M15.55 0H2.098A2.095 2.095 0 000 2.093v13.461c0 1.156.94 2.093 2.098 2.093h13.451a2.095 2.095 0 002.098-2.093V2.093C17.647.937 16.707 0 15.549 0">
                        </path>

                    </svg></span></a></li>
        <li class="footer__social__img">
            <a target="_blank"
                aria-label="follow us on Tumblr, opens a new window" class=""
                href="https://www.tumblr.com/">
                <span class="icon--svgg icon--svgg--gray-fill" aria-hidden="true">
                    <!--Tumblr-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18"
                        viewBox="0 0 11 18">
                        <!--icono de Tumblr-->
                        <path fill-rule="evenodd"
                            d="M8.535 14.5c-1.532.038-1.83-1-1.842-1.751V7.217h3.844v-2.69h-3.83V0H3.904a.147.147 0 00-.138.133C3.602 1.518 2.904 3.949 0 4.922v2.295h1.937v5.806c0 1.988 1.58 4.812 5.749 4.745 1.407-.022 2.969-.569 3.314-1.04l-.92-2.535c-.356.158-1.037.295-1.545.307z">
                        </path>

                    </svg></span></a></li>
        <li class="footer__social__img">
            <a target="_blank"
                aria-label="follow us on Youtube, opens a new window" class=""
                href="https://www.youtube.com/">
                <span class="icon--svgg icon--svgg--gray-fill" aria-hidden="true">
                    <!--Youtube-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15"
                        viewBox="0 0 21 15">
                        <!--icono de youtube-->
                        <path fill-rule="evenodd"
                            d="M8.109 9.73l-.001-5.679 5.522 2.85-5.521 2.83zm12.124-6.663s-.2-1.393-.812-2.006c-.778-.806-1.649-.81-2.048-.856C14.513 0 10.223 0 10.223 0h-.009s-4.29 0-7.15.205c-.4.046-1.27.05-2.048.856-.612.613-.812 2.006-.812 2.006S0 4.703 0 6.338v1.534c0 1.636.204 3.272.204 3.272s.2 1.392.812 2.006c.778.805 1.8.78 2.254.864 1.635.155 6.949.203 6.949.203s4.294-.006 7.154-.21c.4-.048 1.27-.052 2.048-.857.612-.614.812-2.006.812-2.006s.204-1.636.204-3.272V6.338c0-1.635-.204-3.271-.204-3.271z">
                        </path>

                    </svg></span></a></li>
        <li class="footer__social__img"><a target="_blank"
                aria-label="follow us on Snapchat, opens a new window" class=""
                href="https://www.snapchat.com/"><span class="icon--svgg icon--svgg--gray-fill" aria-hidden="true">
                    <!--Snaptchat-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17"
                        viewBox="0 0 19 17">
                        <!--icono de Snapchat-->
                        <path fill-rule="evenodd"
                            d="M9.155.003C8.74.003 7.91.057 7.02.421c-.51.207-.968.488-1.363.834-.47.412-.853.92-1.138 1.51-.418.865-.319 2.322-.24 3.492.01.127.018.258.027.385a.784.784 0 01-.307.054c-.236 0-.516-.07-.833-.207a.798.798 0 00-.317-.06c-.188 0-.387.051-.56.145-.216.117-.356.283-.394.468-.025.121-.024.362.266.607.16.134.393.258.696.369.079.028.173.056.273.085.346.102.87.255 1.006.552.07.15.04.348-.088.587a5.67 5.67 0 01-.95 1.368c-.347.374-.73.686-1.136.928a4.386 4.386 0 01-1.594.575c-.221.033-.379.215-.366.421a.5.5 0 00.045.176c.09.194.297.358.633.502.411.176 1.026.325 1.827.44.04.072.083.25.112.373.03.13.062.264.107.406.05.153.176.337.502.337.123 0 .265-.025.43-.055.24-.043.569-.103.98-.103.227 0 .463.019.7.055.459.07.853.328 1.31.626.669.436 1.425.93 2.582.93.031 0 .063 0 .094-.003.038.002.085.003.135.003 1.157 0 1.913-.494 2.581-.93.458-.299.852-.556 1.31-.626.238-.036.473-.055.701-.055.393 0 .703.046.98.096.182.033.322.049.43.049.26 0 .435-.12.502-.332.044-.139.076-.27.107-.402.027-.114.07-.298.111-.37.802-.116 1.417-.264 1.828-.44.335-.144.542-.308.632-.5a.485.485 0 00.046-.177c.013-.206-.145-.388-.366-.422-2.498-.38-3.624-2.75-3.67-2.85-.138-.26-.167-.457-.098-.608.136-.296.66-.45 1.006-.551.1-.03.195-.057.273-.086.341-.124.585-.259.746-.412.192-.182.229-.357.227-.472-.006-.277-.236-.523-.6-.643a1.151 1.151 0 00-.407-.072.976.976 0 00-.378.071 2.267 2.267 0 01-.779.205.753.753 0 01-.258-.052l.023-.335.003-.05c.08-1.17.18-2.628-.238-3.493a4.731 4.731 0 00-1.144-1.515A4.822 4.822 0 0011.66.415 5.836 5.836 0 009.523 0l-.368.003z">
                        </path>
                    </svg></span></a></li>
        <li class="footer__social__img"><a target="_blank"
                aria-label="follow us on Pinterest, opens a new window" class=""
                href="https://www.pinterest.com.mx/"><span class="icon--svgg icon--svgg--gray-fill" aria-hidden="true">
                    <!--Pinterest-->
                    <svg xmlns="http://www.w3.org/2000/sv" width="18" height="16"
                        viewBox="0 0 18 16">
                        <!-- icono Pinterest-->
                        <path fill-rule="evenodd"
                            d="M0 8c0 3.275 2.216 6.09 5.388 7.327-.025-.558-.004-1.23.156-1.837l1.158-4.359s-.287-.51-.287-1.266c0-1.185.774-2.07 1.736-2.07.818 0 1.214.546 1.214 1.2 0 .732-.525 1.826-.795 2.84-.226.849.478 1.54 1.42 1.54 1.705 0 2.854-1.946 2.854-4.253 0-1.753-1.329-3.065-3.745-3.065-2.73 0-4.43 1.809-4.43 3.83 0 .698.23 1.189.592 1.569.167.176.19.245.13.447-.043.146-.142.501-.184.641-.06.203-.244.276-.45.2-1.258-.456-1.843-1.68-1.843-3.056 0-2.272 2.156-4.998 6.432-4.998 3.436 0 5.698 2.212 5.698 4.583 0 3.139-1.962 5.483-4.857 5.483-.97 0-1.885-.466-2.198-.996 0 0-.523 1.843-.633 2.198-.19.617-.564 1.234-.906 1.714.81.212 1.665.328 2.55.328 4.97 0 9-3.582 9-8s-4.03-8-9-8-9 3.582-9 8z">
                        </path>
                    </svg></span></a></li>
    </ul>
    </nav>
    </div>
    <p class="copy_right">&copy; 2023 Vaniofrénicos Espacio. Todos los derechos reservados. Prohibida la reproducción sin autorización.</p>
    </footer>

    </div>  
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>
