<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegación Responsiva</title>
    <link rel="stylesheet" href="../assets/styles/style_vistaUsuario.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <span class="logo">Reservaciones 📲</span>
            <button class="navbar-toggler" id="navbar-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
      
    </div>
</nav>

<div class="content">
    <h1></h1>
    <h2>¡Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?> aqui podra visualizar sus reservaciones!</h2>

    <div class="popular__card">
        <img src="../assets/1-3.webp" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Hotel Marquis Reforma</h4>
            <h4>$200 USD</h4>
          </div>
          <p>Paseo de la Reforma 465, Ciudad de México, CDMX</p>
          <a href="#" class="cta" data-hotel-id="1">Detalles</a>
        </div>
      </div>
      <button type="submit" formaction="bienvenida.php">Regresar</button>
</div>

<script src="../js/script._vistaUsuario.js"></script>
</body>
</html>