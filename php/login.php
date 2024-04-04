<?php
include "conexion_bd.php"; // Incluye el archivo de conexión
session_start(); // Inicia la sesión

// Comprueba si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    // Comprobar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) > 0) {
        // Obtener los datos del usuario
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['contraseña1'];

        // Depuración: Imprimir las contraseñas encriptadas almacenadas en la base de datos y la contraseña ingresada por el usuario
        echo "Contraseña almacenada en la base de datos: " . $hashedPassword . "<br>";
        echo "Contraseña ingresada por el usuario: " . $password . "<br>";

        // Verificar la contraseña
        if (password_verify($password, $hashedPassword)) {
            // Inicio de sesión exitoso, redirigir a bienvenida.php
            $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
            header("Location: bienvenida.php");
            exit(); // Asegúrate de detener la ejecución del script después de redirigir
        } else {
            echo "Credenciales incorrectas. Por favor, intenta nuevamente.";
        }
    } else {
        echo "Credenciales incorrectas. Por favor, intenta nuevamente.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles_login.css">
  <title>Inicio de Sesión</title>
</head>
<body>
  <div class="container">
    <div class="heading">Iniciar sesión</div>
    <form action="" method="POST" class="form">
      <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
      <input required="" class="input" type="password" name="password" id="password" placeholder="Contraseña">
      <input class="login-button" type="submit" value="Ingresar">
    </form>
    <span class="agreement"><a href="crearNuevaCuenta.php">Crear una nueva cuenta</a></span>
    <span class="agreement2"><a href="../index.html">Regresar al inicio 🎐</a></span>
  </div>
</body>
</html>

