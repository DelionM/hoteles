<?php
session_start(); // Inicia la sesión
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles.css" />
  <title>Reservaciones Hotel</title>
</head>
<body>
  <header class="hero">
    <nav class="nav container">
      <div class="nav__logo">
      <h2 class="nav__title">¡Hola, <?php echo $_SESSION['nombre_usuario']; ?>!</h2>
    </div>
    </nav>
    <section class="hero__container container">
    <h1 class="hero__title">¡Hola, <?php echo $_SESSION['nombre_usuario']; ?>!</h1>
      <p class="hero__paragraph">Puedes realizar la consulta selección y ver precios de nuestros destinos</p>
      <a href="vistaUsuario.php" class="cta" id="verReservas">Ver reservas</a>

    </section>
  </header>
  <section class="section__container popular__container">
    <h2 class="section__header">Popular Hotels</h2>
    <div class="popular__grid">
<!-- **************************************************************************************************************************************** -->
      <!-- uno -->
      <div class="popular__card1 popular__card">
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
      <!-- modal 3 -->
      <div class="modal" id="myModal1">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/1-3.webp" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/1-1.webp" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/1-2.webp" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Hotel Marquis Reforma.</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="1">Reservar</button>

              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7092350353373!2d-99.1760586253976!3d19.424965140925863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cddfc5f22d1a75%3A0xf27e238720339bb1!2sHotel%20Marquis%20Reforma!5e0!3m2!1ses-419!2smx!4v1712000668923!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <div class="popular__card2 popular__card">
        <img src="../assets/2-1.webp" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Fairmont Mayakoba</h4>
            <h4>$350 USD</h4>
          </div>
          <p>Carretera Federal Cancún-Playa del Carmen Km. 298, Playa del Carmen, Quintana Roo</p>
          <a href="#" class="cta" data-hotel-id="2">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal2">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/2-1.webp" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/2-2.webp" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/2-3.webp" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Fairmont Mayakoba</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="2">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.585179484553!2d-87.03001242536521!3d20.686448899449008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e6788ea8922a9%3A0x3ac35106db90502b!2sFairmont%20Mayakoba!5e0!3m2!1ses-419!2smx!4v1712001436836!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card3 popular__card">
        <img src="../assets/3-1.webp" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Grand Velas Riviera Maya</h4>
            <h4> $500 USD</h4>
          </div>
          <p> Carretera Cancún-Tulum Km. 62, Playa del Carmen, Quintana Roo</p>
          <a href="#" class="cta" data-hotel-id="3">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->

      <div class="modal" id="myModal3">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/3-3.webp" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/3-2.webp" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/3-1.webp" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Grand Velas Riviera Maya</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class=" reserve-button" data-hotel-id="3">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14930.338280877577!2d-87.0377372582134!3d20.686473667339694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e5d781aae6d93%3A0xd9906e1324d837f9!2sGrand%20Velas%20Riviera%20Maya!5e0!3m2!1ses-419!2smx!4v1712001685960!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card4 popular__card">
        <img src="../assets/4-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Hotel Casa Awolly

            </h4>
            <h4>$100 USD</h4>
          </div>
          <p>Playa del Carmen, Q.R.</p>
          <a href="#" class="cta" data-hotel-id="4">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal4">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/4-2.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/4-1.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/4-3.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Hotel Casa Awolly</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="4">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2930.8809239971456!2d-98.97042616327116!3d19.8650639738831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1910063ad2115%3A0xcfc795f823cb4d72!2sEscuela%20Superior%20de%20Tizayuca%20UAEH!5e0!3m2!1ses!2smx!4v1711410261019!5m2!1ses!2smx"
                  style="border:0; width: 100%; height: 60vh;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
<!-- ROLA CONTRASEÑA DE INTERNET 
biblioTECA42030 -->
      <!-- Tres -->
      <div class="popular__card5 popular__card">
        <img src="../assets/5-3.webp" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4> Hotel Xcaret Mexico</h4>
            <h4>$300 USD</h4>
          </div>
          <p> Playa del Carmen, Quintana Roo</p>
          <a href="#" class="cta" data-hotel-id="5">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal5">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/5-3.webp" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/5-2.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/5-1.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Nombre: Hotel Ejemplo</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="5">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2930.8809239971456!2d-98.97042616327116!3d19.8650639738831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1910063ad2115%3A0xcfc795f823cb4d72!2sEscuela%20Superior%20de%20Tizayuca%20UAEH!5e0!3m2!1ses!2smx!4v1711410261019!5m2!1ses!2smx"
                  style="border:0; width: 100%; height: 60vh;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card6 popular__card">
        <img src="../assets/6-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Rosewood San Miguel de Allende</h4>
            <h4> $400 USD</h4>
          </div>
          <p> San Miguel de Allende, Gto.</p>
          <a href="#" class="cta" data-hotel-id="6">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal6">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/6-1.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/6-3.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/6-1.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>San Miguel de Allende, Gto.</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="6">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.0816588110424!2d-100.74772502535927!3d20.90903409188112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b51b030c39001%3A0xd047b2f9edd984b!2sRosewood%20San%20Miguel%20de%20Allende!5e0!3m2!1ses-419!2smx!4v1712002747424!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card7 popular__card">
        <img src="../assets/7-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Live Aqua Beach Resort Cancún            </h4>
            <h4> $250 USD</h4>
          </div>
          <p>Cancún, Quintana Roo</p>
          <a href="#" class="cta" data-hotel-id="7">Detalles</a>
        </div>
      </div>
      <div class="modal" id="myModal7">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/7-2.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/7-1.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/7-3.webp" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Live Aqua Beach Resort Cancún   </p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="7">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.1249807770446!2d-86.76570352535387!3d21.10758288506783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b763c98a835%3A0x62b9e74196e6a1ea!2sLive%20Aqua%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1712003086069!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card8 popular__card">
        <img src="../assets/8-2.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Hotel Habita            </h4>
            <h4>$150 USD</h4>
          </div>
          <p> Miguel Hidalgo, CDMX</p>
          <a href="#" class="cta" data-hotel-id="8">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal8">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/8-1.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/8-2.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/8-3.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Miguel Hidalgo, CDMX</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="8">Reservar</button>

                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.551414480954!2d-99.19449702646779!3d19.431778700609613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8aaa7564397%3A0x25cca7dff30fadbd!2sHabita%20Hotel!5e0!3m2!1ses-419!2smx!4v1712003453819!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card9 popular__card">
        <img src="../assets/9-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>The Cape, a Thompson Hotel

            </h4>
            <h4> $400 USD</h4>
          </div>
          <p>Cabo San Lucas, B.C.S.</p>
          <a href="#" class="cta" data-hotel-id="9">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal9">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/9-1.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/9-2.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/9-3.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>The Cape, a Thompson Hotel</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="9">Reservar</button>
                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.398572130119!2d-109.87130042530292!3d22.898665320941916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86af4b70b62941fd%3A0x78b79ea3013b4225!2sThe%20Cape%2C%20A%20Thompson%20Hotel!5e0!3m2!1ses-419!2smx!4v1712003618799!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card10 popular__card">
        <img src="../assets/10-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Four Seasons Resort Punta Mita
            </h4>
            <h4>$600 USD</h4>
          </div>
          <p> Punta de Mita, Nayarit</p>
          <a href="#" class="cta" data-hotel-id="10">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal10">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/10-2.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/10-3.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/10-1.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Punta de Mita, Nayarit</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="10">Reservar</button>
                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.2545095296714!2d-105.53188542536272!3d20.78098899624367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421145c10b5cd35%3A0x6a34d46b32dc24ae!2sFour%20Seasons%20Resort%20Punta%20Mita!5e0!3m2!1ses-419!2smx!4v1712003786680!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Tres -->
      <div class="popular__card11 popular__card">
        <img src="../assets/11-1.webp" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Hotel Escondido
            </h4>
            <h4>$250 USD</h4>
          </div>
          <p>Santa María Colotepec, Oaxaca</p>
          <a href="#" class="cta" data-hotel-id="11">Detalles</a>
        </div>
      </div>
      <!-- modal 3 -->
      <div class="modal" id="myModal11">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/11-2.webp" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/11-3.webp" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/11-1.webp" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p> Hotel Escondido</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="11">Reservar</button>
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.181043719664!2d-96.73069212545204!3d17.06379481204783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7217c2e528173%3A0xbebea65c999c3e30!2sHotel%20Escondido%20Oaxaca!5e0!3m2!1ses-419!2smx!4v1712003982849!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- **************************************************************************************************************************************** -->
      <!-- Cuatro -->
      <div class="popular__card12 popular__card">
        <img src="../assets/12-1.jpg" alt="popular hotel" />
        <div class="popular__content">
          <div class="popular__card__header">
            <h4>Chablé Resort & Spa</h4>
            <h4> $700 USD</h4>
          </div>
          <p>Chocholá, Yucatán</p>
          <a href="#" class="cta" data-hotel-id="12">Detalles</a>
        </div>
      </div>
      <!-- modal 4 -->
      <div class="modal" id="myModal12">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- Contenido del hotel -->
          <div class="hotel-container">
            <div class="hotel-images">
              <img src="../assets/12-2.jpg" alt="Hotel Image" class="hotel-image-left" />
              <div class="hotel-image-right">
                <img src="../assets/12-1.jpg" alt="Hotel Image" class="hotel-image-top" />
                <img src="../assets/12-3.jpg" alt="Hotel Image" class="hotel-image-bottom" />
              </div>
            </div>
            <div class="main-wrapper">
              <div class="hotel-details">
                <h2>Detalles del Hotel</h2>
                <p>Chablé Resort & Spa</p>
                <p>Categoría: 5 estrellas</p>
                <p>Servicios: Piscina, Restaurante, Gimnasio</p>
                <button class="reserve-button" data-hotel-id="12">Reservar</button>
                <!-- Agrega más detalles según sea necesario -->
              </div>
              <div class="price-calculator">
                <h2>Calculadora de Precio de Estadía</h2>
                <div class="input-group">
                  <label for="dias">Días de Hospedaje:</label>
                  <input type="number" id="dias" placeholder="Ingrese los días">
                </div>
                <div class="input-group">
                  <label for="precio">Precio por día:</label>
                  <input type="number" id="precio" placeholder="Ingrese el precio por día">
                </div>
                <button class="calculate-button" onclick="calcularPrecio()">Calcular Precio</button>
                <p id="resultado"></p>
              </div>
            </div>
            <!-- Sección para el mapa de Google -->
            <div class="map-container">
              <div class="hotel-map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910228.7327253213!2d-91.97081340000001!3d20.75421900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f561835befc1c9b%3A0x97a1410413119e33!2zQ2hhYmzDqSBZdWNhdMOhbg!5e0!3m2!1ses-419!2smx!4v1712004469376!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- Agregar más detalles del hotel aquí -->
    </div>
    </div>
    <!-- Agrega más tarjetas de hotel y modales según sea necesario -->
    </div>
  </section>
  <footer>
    <div class="footer-content">
      <h2>Reservación de hoteles</h2>
      <p>Copyright Delion 2024</p>
    </div>
  </footer>
  <script src="../js/app.js"></script>
  <script>



document.addEventListener("DOMContentLoaded", function() {
        var linkVistaUsuario = document.getElementById("verReservas");
        linkVistaUsuario.addEventListener("click", function(event) {
            event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
            console.log("Redirigiendo a la página de reservas...");
            window.location.href = "vistaUsuario.php";
        });
    });
   // Controlador de eventos de clic para los botones de reserva
document.querySelectorAll('.reserve-button').forEach(button => {
    button.addEventListener('click', function() {
        // Obtener el ID del hotel desde el atributo data-hotel-id
        const hotelId = this.getAttribute('data-hotel-id');
        // Ocultar la tarjeta correspondiente al hotel reservado
        const hotelCard = document.getElementById(`myModal${hotelId}`);
        if (hotelCard) {
            hotelCard.style.display = 'none';
        }
        // Aquí puedes agregar cualquier otra lógica necesaria, como mostrar un mensaje de confirmación
    });
});

</script>
</body>
</html>