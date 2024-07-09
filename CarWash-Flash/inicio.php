<?php
session_start();
if (empty($_SESSION["cod_usu"])) {
    header("location: index.php");
    exit;
}
?>
        
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Car wash Flash</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                                                <li><a href="controlador_cerrar_sesion.php">Cerrar Sesión</a></li>
                                            </ul>
                                        </nav>

                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="https://chat.whatsapp.com/CoL0EFay3t3C1R5e3wdRrI"
                                            class="btn header-btn"><img src="assets/img/icon/smartphone.svg" alt=""> +51
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
    <main>
        <!-- slider Area Start-->
        <div class="container-fluid">
            <div class="slider-area position-relative">
                <div class="slider-active dot-style">
                    <!-- Single Slider -->
                    <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 col-lg-11 col-md-11">

                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".2s">Lavado de Autos</h1>
                                        <div class="hero-details">
                                            <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                                <!-- Aquí agrupamos los textos -->
                                                <div class="detail-text">
                                                    <h2>& Detallado</h2>
                                                    <h2>& Detallado</h2>
                                                </div>
                                            </div>
                                            <p data-animation="fadeInUp" data-delay=".4s">Mantenemos tu auto impecable
                                                y reluciente, utilizando productos de alta calidad para garantizar un
                                                acabado perfecto y duradero.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider Area End-->
        <!--? Office environment  Start-->
        <section class="office-environments">
            <div class="container">
                <div class="environments-wrapper section-bg02" data-background="assets/img/gallery/section_bg02.png">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 offset-xl-5 offset-lg-4">
                            <div class="office-pera">
                                <div class="section-tittle">
                                    <h2 class="mb-30">Contamos con equipos 3D</h2>
                                    <p>Utilizamos equipo avanzado y moderno para garantizar que cada vehículo reciba el
                                        mejor tratamiento. Ofrecemos resultados excepcionales con tecnología de punta
                                        para asegurar la satisfacción total de nuestros clientes.</p>
                                    <a href="examples/lavado3D.html" class="btn" target="_blank">Lavado 3D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Office environment  End-->
        <!--? Pricing Card Start -->
        <section class="pricing-card-area fix section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="section-tittle text-center mb-90">
                            <h2>Ofrecemos los mejores servicios a nuestros clientes.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Lavado ESTANDAR</h4>
                                <p>A partir de</p>
                            </div>
                            <div class="card-mid">
                                <h4>S/120</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Lavado exterior con agua y jabón.</li>
                                    <li>Enjuague con agua a presión.</li>
                                    <li>Secado manual con paños suaves.</li>
                                    <li>Limpieza de tapetes.</li>
                                    <li>Limpieza de consola central y portavasos.</li>
                                    <li>Limpieza de marcos de las puertas.</li>
                                </ul>
                                <a href="registro_veh.php" class="btn">Registro de Vehículos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Lavado ORO</h4>
                                <p>A partir de</p>
                            </div>
                            <div class="card-mid">
                                <h4>S/140</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Lavado exterior con agua y jabón.</li>
                                    <li>Enjuague con agua a presión.</li>
                                    <li>Secado manual con paños suaves.</li>
                                    <li>Limpieza de rines y llantas.</li>
                                    <li>Aspirado del interior.</li>
                                    <li>Limpieza de cristales exteriores e interiores.</li>
                                </ul>
                                <a href="registro_veh.php" class="btn">Registro de Vehículos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>Lavado Avanzado</h4>
                                <p>A partir de</p>
                            </div>
                            <div class="card-mid">
                                <h4>S/250</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Lavado exterior con agua y jabón.</li>
                                    <li>Enjuague con agua a presión.</li>
                                    <li>Secado manual con paños suaves.</li>
                                    <li>Limpieza de rines y llantas.</li>
                                    <li>Aspirado del interior.</li>
                                    <li>Limpieza de cristales exteriores e interiores.</li>
                                </ul>
                                <a href="registro_veh.php" class="btn">Registro de Vehículos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Card End -->
        <!--? Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-caption pb-bottom">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active dot-style">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.svg" alt="" class="quotes-sign">
                                        <p>"El lavado de autos aquí es excepcional. Mi coche nunca había estado tan
                                            limpio y brillante. El equipo es muy profesional y el servicio es rápido y
                                            eficiente. ¡Muy recomendable!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/testimonial.svg" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Javier Muñoz</span>
                                            <p>Ceo de la UNI</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.svg" alt="" class="quotes-sign">
                                        <p>"El mejor servicio de lavado de autos que he probado. No solo dejan el auto
                                            impecable, sino que también utilizan productos de alta calidad que cuidan la
                                            pintura. Definitivamente volveré."</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/testimonial.svg" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Vergara Porras</span>
                                            <p>CEO de la San Marcos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
            </div>
            <!-- testimonial-right img -->
            <div class="testimonial-right-img">
                <img src="assets/img/gallery/testimonial-right-img.png" alt="">
            </div>
        </section>
        <!--? Testimonial Area End -->
        <!--? Services Area Start -->
        <section class="categories-area section-padding40">
            <div class="container">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-11">
                        <div class="section-tittle mb-60">
                            <h2>¿Por qué elegir nuestros servicios?</h2>
                            <p>Nuestros servicios se destacan por su calidad, eficiencia y compromiso con la
                                satisfacción del cliente, utilizando tecnología avanzada y productos ecológicos.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Lavado de autos 100% sin detergentes</h5>
                                <p>Ofrecemos un lavado de autos ecológico que no utiliza detergentes, cuidando tanto tu
                                    vehículo como el medio ambiente. Nuestra tecnología avanzada garantiza un acabado
                                    impecable sin productos químicos agresivos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Máquinas eficientes para secado de superficies</h5>
                                <p>Nuestras máquinas de secado garantizan eficiencia y resultados óptimos,
                                    proporcionando un secado rápido y cuidadoso de todas las superficies de tu vehículo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Desinfección Completa Del Interior</h5>
                                <p>Nuestro servicio de lavado incluye una desinfección completa del interior del
                                    vehículo, utilizando productos naturales y no tóxicos que eliminan bacterias y
                                    virus, proporcionando un ambiente seguro y saludable para ti y tu familia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services4.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Protección segura de la laca</h5>
                                <p>Brindamos protección segura para la laca de tu vehículo, asegurando su durabilidad y
                                    aspecto impecable a lo largo del tiempo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Services Area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-4 offset-lg-5 offset-md-2 col-xl-6 col-lg-6 offset-sm-1 col-sm-11">
                        <div class="video-wrap">
                            <!-- Video icon -->
                            <div class="video-icon">
                                <a class="popup-video btn-icon"
                                    href="https://youtu.be/yedzcMBe0zk?si=RjsT37G6ylRmowbt"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="section-tittle section-tittle2 mb-90">
                            <h2>Tu auto se verá como nuevo.</h2>
                            <p>Nuestro compromiso con la excelencia garantiza que cada detalle de tu vehículo sea
                                tratado con cuidado y precisión. Con nuestros servicios, disfrutarás de un aspecto
                                impecable y reluciente en cada visita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
        <div class="maps-area">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <img src="assets/img/gallery/map.png" alt="" class="w-100">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <img src="assets/img/gallery/map-left.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </main>
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
                                    <a href="https://x.com/carwash_oficial" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=61559886568713&is_tour_completed"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://github.com/CarWashFlash/Proyecto" target="_blank"><i
                                            class="fa-brands fa-github"></i></a>
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

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>