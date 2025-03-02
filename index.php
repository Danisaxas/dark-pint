<?php
require 'vendor/autoload.php';  // Cargar las dependencias de Composer// Ajusta la ruta si es necesario

use Predis\Client;

// Conexión a Redis
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => 'redis-10371.c14.us-east-1-2.ec2.redns.redis-cloud.com',
    'port'   => 10371,
    'password' => 'oRI6dUm70nlq3IGJoh1jf94P0ARvR2A4' // Si Redis tiene autenticación
]);

// Guardar datos si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $redis->set("nombre", "Daniel");
    $redis->set("edad", "15");
    $redis->set("lenguajes", json_encode(["PHP", "Python"]));
}

// Recuperar datos
$nombre = $redis->get("nombre");
$edad = $redis->get("edad");
$lenguajes = json_decode($redis->get("lenguajes"), true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="light-mode">
    <div class="background-animation"></div>

    <div class="container mt-5">
        <div class="card mx-auto p-4" style="max-width: 400px;">
            <button id="toggleMode" class="btn btn-secondary btn-sm">🌙 Modo oscuro</button>
            <h1 class="text-center mt-3">Información Personal</h1>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Edad:</strong> <?php echo $edad; ?></p>
            <p><strong>Lenguajes:</strong> <?php echo implode(", ", $lenguajes); ?></p>
        </div>
    </div>

    <script>
        const toggleButton = document.getElementById('toggleMode');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
            toggleButton.textContent = document.body.classList.contains('dark-mode') ? '☀️ Modo claro' : '🌙 Modo oscuro';
        });
    </script>
</body>
</html>
