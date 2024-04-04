<?php
include "conexion_bd.php"; // Incluye el archivo de conexión

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibió un ID de hotel válido
    if (isset($_POST["hotelId"])) {
        // Obtener el ID del hotel desde la solicitud POST
        $hotelId = $_POST["hotelId"];

        // Aquí deberías realizar la inserción en la base de datos

        // Luego, envías la respuesta al cliente
        echo "¡La reserva del hotel con ID $hotelId se ha realizado con éxito!";
    } else {
        // Si no se proporcionó un ID de hotel válido, devolver un mensaje de error
        echo "Error: No se proporcionó un ID de hotel válido.";
    }
} else {
    // Si la solicitud no es de tipo POST, devolver un mensaje de error
    echo "Error: Esta página solo acepta solicitudes POST.";
}
?>


pasar datos del post formulkario acti de php metodo post 
los labe y los input debe de tener name y id 
id for username 
id username 

