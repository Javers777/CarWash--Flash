<?php
session_start();
if (!empty($_SESSION["cod_usu"])) {
    header("location: inicio.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/3a7225da88.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/regis.css">
</head>

<body>
    <!-- Formulario de Iniciar Sesión -->
    <?php include("conexion.php"); ?>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="validar_login.php" method="POST" class="sign-in-form">
                    <h2 class="signin-title">Iniciar sesión</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="txtEmail" placeholder="Correo electrónico" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="txtPassword" placeholder="Contraseña" required>
                    </div>
                    
                    <input type="submit" name="btnLogin" value="Iniciar Sesión" class="btn solid">

                    <p class="social-text">Síguenos en nuestras redes sociales</p>
                    <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=61559886568713&is_tour_completed" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/carwash_oficial" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/CarWashFlash/Proyecto" target="_blank" class="social-icon">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </form>

                <!-- Formulario de Registro -->
                <form action="#" class="sign-up-form">
                    <h2 class="signup-title">¡Hola, amigo!</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario">
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Apellido de usuario">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo electrónico">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña">
                    </div>
                    <input type="submit" value="Registrarse" class="btn solid">

                    <p class="social-text">Síguenos en nuestras redes sociales</p>
                    <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=61559886568713&is_tour_completed" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/carwash_oficial" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/CarWashFlash/Proyecto" target="_blank" class="social-icon">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Paneles de Cambio -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¡Bienvenido de nuevo!</h3>
                    <p>Introduce tus datos para acceder a todas las funciones del sitio web.</p>
                    <button class="btn transparent" id="sign-up-btn">Registrarse</button>
                </div>
                <img src="assets/img/undraw_maker_launch_crhe.svg" class="image" alt="Bienvenido">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Registrarse</h3>
                    <p>Crea una cuenta para acceder a todas las funciones del sitio web.</p>
                    <button class="btn transparent" id="sign-in-btn">Iniciar sesión</button>
                </div>
                <img src="assets/img/undraw_press_play_bx2d.svg" class="image" alt="Registrarse">
            </div>
        </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>
