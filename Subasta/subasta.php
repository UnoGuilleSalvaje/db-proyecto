<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Subasta Galería de Arte</title>
  <meta name="title" content="Vaniofrénicos.com | sitio oficial Vaniofrénicos Galería" />
    <meta property="og:type" content="website" />
    <link rel="icon" href="../media/g.png" type="image/x-icon">
    <link rel="shortcut icon" href="media/g.png" type="image/x-icon" >
    <link rel="stylesheet" href="./subasta.css">
    <link rel="stylesheet" href="../estilos/styles.css">
    <link href="index.html" rel="canonical"/>

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
                  echo '<a class="user-menu-tab sign-in" href="../login_registro/index.php">
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
        <a class="user-menu-tab join-dropdown" href="../login_registro/index.php">
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
            
            <a class="desktopNav__logo" href="../index.php">
                <span class="icon--svg icon--svg mvl-animated-logo" aria-hidden="true">
                    <img src="../media/v.png" alt=""><!--LOGO DEL SITIO-->
                </span>
            </a>
            
            <div class="desktopNav__right-links">
      <div class="desktopNav__tabContainer">
          <?php if (isset($_SESSION['username'])): ?>
              <div class="searchPromo__wrap">
                  <br><br>
                  <a href="../logout.php" class="logout-link" style="margin-right: 15px;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
              </div>
          <?php else: ?>
              <!-- Usuario no logueado: Muestra la sección de login -->
              <a class="searchPromo desktopNav__tab" style="vertical-align: inherit;" href="../login_registro/index.php">
                  <img class="searchPromo__image" src="../media/tickets.png" alt="logo" />
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
                                href="../index.php">Inicio</a>
                            <div class="desktopNav__flyout-container nav-flyout-container-0">
                              
                            </div>
                        </li>
                        <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-1"
                                class="desktopNav__link mvl-flyout-button"
                                href="../tienda.php">Galería</a>
                            <div class="desktopNav__flyout-container nav-flyout-container-1">
                            
                            </div>
                        </li>
                        <li class="desktopNav__linkWrapper ">
        <a class="desktopNav__link" href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
        </a>
        <ul class="dropdown-menu nav-flyout-container-2" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="../mostrar_peliculas.php?genero=Retrato">Retratos</a></li>
        <li><a class="dropdown-item" href="../mostrar_peliculas.php?genero=Paisaje">Paisajes</a></li>
        <li><a class="dropdown-item" href="../mostrar_peliculas.php?genero=Bodegón">Bodegón</a></li>
        </ul>
    </li>
                        
            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-4"
                    class="desktopNav__link mvl-flyout-button" href="../about/AboutPage/about.php">Acerca de</a>
                <div class="desktopNav__flyout-container nav-flyout-container-4">
                  
                </div>
            </li>
            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-5"
                    class="desktopNav__link mvl-flyout-button"
                    href="../ayuda.php">Ayuda</a>
                <div class="desktopNav__flyout-container nav-flyout-container-5">
                  
                </div>
            </li>
            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-6"
                    class="desktopNav__link mvl-flyout-button"
                    href="../Contactanos/index.php">Contáctanos</a>
                <div class="desktopNav__flyout-container nav-flyout-container-6">
                    
                </div>
            </li>
            <li class="desktopNav__linkWrapper"><a id="mvl-flyout-button-6"
                    class="desktopNav__link mvl-flyout-button"
                    href="Subasta/subasta.php">Subasta</a>
                <div class="desktopNav__flyout-container nav-flyout-container-6">
                    
                </div>
            </li>
      <li class="desktopNav__linkWrapper">
      <?php
      // Verifica si el usuario está logueado y si su rol es 'admin'

      if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {  
          echo '<li class="desktopNav__linkWrapper ">
          <a class="desktopNav__link" href="../AdministrarProductos.php" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
          </a>
          <ul class="dropdown-menu nav-flyout-container-2" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="../alta_producto.php">Altas</a></li>
          <li><a class="dropdown-item" href="../editar_producto.php">Cambios</a></li>
          <li><a class="dropdown-item" href="../eliminar_producto.php">Bajas</a></li>
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

                  <!-- Header -------------------- -->
                  </header>
            
<!-- partial:index.partial.html -->
<main>
  <ul class='slider'>
    <li class='item' style="background-image: url('https://cdn.mos.cms.futurecdn.net/dP3N4qnEZ4tCTCLq59iysd.jpg')">
      <div class='content'>
        <h2 class='title'>"Lossless Youths"</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button>Read More</button>
      </div>
    </li>
    <li class='item' style="background-image: url('https://i.redd.it/tc0aqpv92pn21.jpg')">
      <div class='content'>
        <h2 class='title'>"Estrange Bond"</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button>Read More</button>
      </div>
    </li>
    <li class='item' style="background-image: url('https://wharferj.files.wordpress.com/2015/11/bio_north.jpg')">
      <div class='content'>
        <h2 class='title'>"The Gate Keeper"</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button>Read More</button>
      </div>
    </li>
    <li class='item' style="background-image: url('https://images7.alphacoders.com/878/878663.jpg')">
      <div class='content'>
        <h2 class='title'>"Last Trace Of Us"</h2>
        <p class='description'>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
        </p>
        <button>Read More</button>
      </div>
    </li>
    <li class='item' style="background-image: url('https://theawesomer.com/photos/2017/07/simon_stalenhag_the_electric_state_6.jpg')">
      <div class='content'>
        <h2 class='title'>"Urban Decay"</h2>
        <p class='description'>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
        </p>
        <button>Read More</button>
      </div>
    </li>
    <li class='item' style="background-image: url('https://da.se/app/uploads/2015/09/simon-december1994.jpg')">
      <div class='content'>
        <h2 class='title'>"The Migration"</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button>Read More</button>
      </div>
    </li>
  </ul>
  <nav class='nav'>
    <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
    <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
  </nav>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
