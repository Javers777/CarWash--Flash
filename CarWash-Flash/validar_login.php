<?php
echo '<meta charset="UTF-8">';

session_start();
include("conexion.php");

if (isset($_POST["btnLogin"])) {
    if (!empty($_POST["txtEmail"]) && !empty($_POST["txtPassword"])) {
        $usuario = $_POST["txtEmail"];
        $password = $_POST["txtPassword"];
        $sql = mysqli_query($con,"SELECT * FROM usuarios WHERE email_usu='$usuario' AND pas_usu='$password'");

        if ($datos = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            $_SESSION["cod_usu"] = $datos['cod_usu']; 
            $_SESSION["nom_usu"] = $datos['nom_usu']; 
            $_SESSION["ape_usu"] = $datos['ape_usu']; 
            header("Location: inicio.php"); 
            exit;
        } else {
            echo "<script>
                    alert('Correo o contraseña incorrectos');
                    window.location.href = 'index.php';
                </script>";
        }        
    }
}
?>
