<?php
include "conexion_bd.php"; // Incluye el archivo de conexión

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hasheamos la contraseña

    // Verificar si el nombre de usuario ya está registrado
    $sql_check_username = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario'";
    $result_check_username = mysqli_query($conn, $sql_check_username);
    if (mysqli_num_rows($result_check_username) > 0) {
        echo "El nombre de usuario ya está en uso. Por favor, elija otro.";
    } else {
        // Verificar si el correo electrónico ya está registrado
        $sql_check_email = "SELECT * FROM usuarios WHERE email='$email'";
        $result_check_email = mysqli_query($conn, $sql_check_email);
        if (mysqli_num_rows($result_check_email) > 0) {
            echo "El correo electrónico ya está registrado";
        } else {
            // Insertar datos en la tabla de usuarios
            $sql = "INSERT INTO usuarios (nombre_usuario, email, telefono, contraseña1) VALUES ('$usuario', '$email', '$telefono', '$passwordHash')";
            if (mysqli_query($conn, $sql)) {
                // Registro exitoso, mostrar alerta y redirigir a login.php
                echo "<script>
                alert('¡Cuenta creada exitosamente!');
                window.location = 'login.php';
                </script>";
                exit(); // Asegúrate de detener la ejecución del script después de redirigir
            } else {
                echo "Error al registrar el usuario: " . mysqli_error($conn);
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles_login.css">
  <title>Registro de nuevo Usuario</title>
</head>
<body>
  <div class="container">
    <div class="heading">Registro de nuevo Usuario</div>
    <form action="" method="POST" class="form">
      <input required="" class="input" type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario">
      <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
      <input required="" class="input" type="number" name="telefono" id="telefono" placeholder="Número de celular">
      <input required="" class="input" type="password" name="password" id="password" placeholder="Contraseña">
      <input required="" class="input" type="password" name="passwordDos" id="passwordDos" placeholder="Confirma tu contraseña">
      <input class="login-button" type="submit" value="Registrarse">
    </form>
    <span class="agreement2"><a href="login.php">Regresar a inicio de sesión 🎐</a></span>
  </div>
  <script>
    // Función para borrar los valores de los campos de entrada
    function borrarValoresCampos() {
        document.getElementById("usuario").value = "";
        document.getElementById("email").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("password").value = "";
        document.getElementById("passwordDos").value = "";
    }
</script>
</body>
</html>
