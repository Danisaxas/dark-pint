<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body text-center">
                <h1 class="mb-4">Información Personal</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Ingresa tu nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Mostrar</button>
                </form>

                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = htmlspecialchars($_POST["nombre"]);
                    echo "<h3 class='mt-4'>Nombre: $nombre</h3>";
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>
