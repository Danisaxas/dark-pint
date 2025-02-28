<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>📷 Galería de Imágenes</h1>

    <!-- Formulario para subir imágenes -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit">Subir Imagen</button>
    </form>

    <div class="gallery">
        <?php
        $files = glob("uploads/*.{jpg,png,gif,jpeg}", GLOB_BRACE);
        foreach ($files as $file) {
            echo "<div class='image-container'><img src='$file'></div>";
        }
        ?>
    </div>

</body>
</html>
