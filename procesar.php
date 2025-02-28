<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos
    $nombre = $_POST['nombre'];

    // Mostramos un mensaje de éxito
    echo "<h1>Gracias por enviar el formulario, $nombre!</h1>";
    echo "<a href='index.php'>Regresar a la página principal</a>";
}
?>
