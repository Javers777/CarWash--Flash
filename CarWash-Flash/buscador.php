<?php
session_start();
if (empty($_SESSION["cod_usu"])) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo | Productos</title>
    <script src="https://kit.fontawesome.com/283335a286.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="inicio.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="inicio.php">Inicio</a></li>
                                                <li><a href="about.php">Acerca de</a></li>
                                                <li><a href="services.php">Servicios</a></li>
                                                <li><a href="catalogo.php">Catálogo</a></li>
                                                <li><a>BIENVENIDO,
                                                        <?php
                                                        echo $_SESSION["nom_usu"] . " " . $_SESSION["ape_usu"];
                                                        ?>
                                                </a></li>
                                                <li><a href="controlador_cerrar_sesion">Cerrar Sesión</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="https://chat.whatsapp.com/CoL0EFay3t3C1R5e3wdRrI" class="btn header-btn"><img src="assets/img/icon/smartphone.svg" alt=""> +51
                                            981 090 987 </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <header>
        <section id="container-slider">
            <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
                <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                <li><a itlist="itList_1" href="#"></a></li>
                <li><a itlist="itList_2" href="#"></a></li>
            </ul>
            <ul id="slider">
                <li style="background-image: url('assets/img/Portada1.jpg'); z-index:0; opacity: 1;">
                    <div class="content_slider">
                        <div>
                            <h2 class="titulo">Cátalogo</h2>
                            <p>Productos de primera calidad para el cuidado y limpieza de vehículos.</p>
                        </div>
                    </div>
                </li>
                <li style="background-image: url('assets/img/Portada2.jpg'); ">
                    <div class="content_slider">
                        <div>
                            <h2 class="titulo">Cátalogo</h2>
                            <p>Productos de primera calidad para el cuidado y limpieza de vehículos.</p>
                        </div>
                    </div>
                </li>
                <li style="background-image: url('assets/img/Portada3.jpg'); ">
                    <div class="content_slider">
                        <div>
                            <h2 class="titulo">Cátalogo</h2>
                            <p>Productos de primera calidad para el cuidado y limpieza de vehículos.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </header>
    <?php
    include("conexion.php");

    $bus = $_POST["bus"];

    $mos = mysqli_query($con, "SELECT * FROM productos WHERE nom_pro LIKE '$bus%'");

    if ($mos->num_rows > 0) {
        $contador = 1;
        while ($fila = $mos->fetch_assoc()) {
            $img_src = "assets/img/limpieza" . $contador . ".jpg";
            echo '
            <div class="producto" data-producto="limpieza">
                <img src="' . $img_src . '">
                <h2>' . $fila["nom_pro"] . '</h2>
                <p>' . $fila["des_pro"] . '</p>
            </div>';
            $contador++;
        }
    }
    ?>

    <footer>
        <div class="footer-wrapper section-bg2" data-background="assets/img/gallery/footer-bg.png">
            <!-- Inicio del Footer-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="inicio.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>¡Contáctanos hoy para obtener el mejor servicio de lavado de autos en la
                                                ciudad! Nuestro equipo está aquí para ayudarte con cualquier pregunta o
                                                consulta que puedas tener. ¡Esperamos escucharte pronto!</p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">+51 981 090 987</a></li>
                                            <li class="number2"><a href="#">contacto@carwash.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Horario de apertura</h4>
                                    <ul>
                                        <li><a href="#">Lun-Vie (9.00-19.00)</a></li>
                                        <li><a href="#">Sáb (12.00-19.00)</a></li>
                                        <li><a href="#">Dom <span>(Cerrado)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navegación</h4>
                                    <ul>
                                        <li><a href="inicio.php">Inicio</a></li>
                                        <li><a href="about.html">Acerca de</a></li>
                                        <li><a href="services.html">Servicios</a></li>
                                        <li><a href="contact.html">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://x.com/carwash_oficial" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=61559886568713&is_tour_completed" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://github.com/CarWashFlash/Proyecto" target="_blank"><i class="fa-brands fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- área inferior del footer -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> Todos los derechos
                                        reservados | CarWash</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin del Footer-->
        </div>
    </footer>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/slider.js"></script>
</body>

</html>