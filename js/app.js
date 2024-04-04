// Obtener todos los botones de "Detalles"
var detailButtons = document.querySelectorAll(".cta");

// Declarar la variable modal fuera del bucle para que esté disponible globalmente
var modal;

// Agregar un evento de clic a cada botón
detailButtons.forEach(function (button) {
    button.addEventListener("click", function (event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

        // Obtener el ID del hotel desde el atributo data
        var hotelId = button.getAttribute("data-hotel-id");

        // Obtener el modal correspondiente al hotel
        modal = document.getElementById("myModal" + hotelId);

        // Verificar si el modal existe antes de acceder a los elementos dentro de él
        if (modal) {
            // Obtener el botón de cierre del modal
            var span = modal.querySelector(".close");

            // Agregar evento de clic al botón de cierre para cerrar el modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // Mostrar el modal
            modal.style.display = "block";
        }
    });
});

// Agregar un evento de clic al enlace de inicio de sesión
var loginLink = document.getElementById("login");
loginLink.addEventListener("click", function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    console.log("Redirigiendo a la página de inicio de sesión...");
    window.location.href = "php/login.php";
});






// Cuando el usuario haga clic fuera del modal, cerrarlo
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function calcularPrecio() {
    var dias = parseInt(document.getElementById('dias').value);
    var precioPorDia = parseFloat(document.getElementById('precio').value);
    var total = dias * precioPorDia;
    document.getElementById('resultado').innerText = "Precio total de la estadía: $" + total.toFixed(2);
}