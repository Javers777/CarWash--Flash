<?php
session_start();
if (empty($_SESSION["cod_usu"])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                                                <li><a href="controlador_cerrar_sesion.php">Cerrar Sesión</a></li>
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

    <div class="container">
        <h2 class="text-center">Registro de Vehículos</h2>
        <form class="row g-3 justify-content-center" action="" method="post">
            <input type="hidden" name="cod_usu" value="<?php echo $_SESSION['cod_usu']; ?>">
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input class="form-control" type="text" name="txtnom" placeholder="Nombre del Propietario" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input class="form-control" type="number" name="txtcontac" placeholder="Número de Contacto" maxlength="9" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input class="form-control" type="email" name="txtemail" placeholder="Correo Electrónico" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <select class="form-select form-select-lg mb-3" name="txtmodelo" required>
                        <option value="">Seleccionar modelo</option>
                        <option value="Kia">Kia</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Renault">Renault</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Subaru">Subaru</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                    <input class="form-control" type="text" name="txtplaca" maxlength="7" placeholder="Placa del Vehículo" required>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="input-group">
                    <label for="txtcolor" class="input-group-text">Color del vehículo:</label>
                    <input class="form-control form-control-color" type="color" name="txtcolor" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                    <input class="form-control" type="number" name="txtyear" placeholder="Año del Vehículo" min="1886" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="input-group">
                    <select class="form-select form-select-lg mb-3" name="txttipo" required>
                        <option value="">Seleccione el tipo</option>
                        <option value="sedan">Sedán</option>
                        <option value="suv">SUV</option>
                        <option value="camion">Camión</option>
                        <option value="motocicleta">Motocicleta</option>
                        <option value="van">Van</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group">
                    <label for="txtfecha" class="input-group-text">Fecha de registro:</label>
                    <input class="form-control" type="date" name="txtfecha" placeholder="Fecha de Registro" required>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <button type="submit" name="submit" class="btn btn-primary">Registrar Vehículo</button>
            </div>
        </form>

        <form class="form-inline justify-content-center mt-5" action="" method="post">
            <label class="mr-2">Seleccionar fecha de registro:</label>
            <select name="fecha_reg">
                <?php
                include("conexion.php");

                $datos = mysqli_query($con, "SELECT fecha_reg, COUNT(*) as contar FROM vehiculos GROUP BY fecha_reg HAVING contar > 1");

                if ($datos->num_rows > 0) {
                    while ($fila = $datos->fetch_assoc()) {

                        echo "<option value='" . $fila['fecha_reg'] . "'>" . $fila['fecha_reg'] . "</option>";
                    }
                }
                ?>
            </select>
            <input class="ml-2 btn btn-primary" type="submit" name="Filtrar" value="Filtrar">
        </form>

        <div>
            <?php

            if (isset($_POST["Filtrar"])) {

                $fech = $_POST["fecha_reg"];

                $datos = mysqli_query($con, "SELECT * FROM vehiculos WHERE fecha_reg = '$fech'");

                if ($datos) {
                    if (mysqli_num_rows($datos) > 0) {
                        echo "<table class='mx-auto mr-2 mt-5' border='1'>
                      <tr>  
                      <th>Codigo de Vehiculo</th>
                      <th>Modelo</th>
                      <th>Fecha de registro</th>
                      </tr>";

                        while ($fila = mysqli_fetch_assoc($datos)) {
                            echo "<tr>
                        <td>" . $fila['cod_vehi'] . "</td>
                        <td>" . $fila['mod_vehi'] . "</td>
                        <td>" . $fila['fecha_reg'] . "</td>
                        </tr>";
                        }
                        echo "</table>";
                    }
                }
            }
            ?>  
        </div>

    </div>

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
                                        <li><a href="about.php">Acerca de</a></li>
                                        <li><a href="services.html">Servicios</a></li>
                                        <li><a href="catalogo.php">Catálogo</a></li>
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

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> Todos los derechos
                                        reservados | CarWash</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <script src="./assets/js/jquery.nice-select.min.js"></script>

    <script src="./assets/js/main.js"></script>

</body>

</html>