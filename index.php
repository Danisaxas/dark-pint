<?php
include 'db.php'; // Conexión a la base de datos

// Obtener todas las imágenes de la base de datos
$query = "SELECT * FROM images ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

// Obtener los comentarios para cada imagen
$comments_query = "SELECT * FROM comments WHERE image_id = ? ORDER BY created_at DESC";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Galería de Imágenes</h1>
    </header>
    
    <!-- Formulario para subir imágenes -->
    <section class="upload-form">
        <h2>Sube una nueva imagen</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <input type="submit" value="Subir Imagen">
        </form>
    </section>

    <!-- Mostrar imágenes -->
    <section class="image-gallery">
        <h2>Imágenes Subidas</h2>
        <div class="container">
            <?php while ($image = $result->fetch_assoc()) { ?>
                <div class="image-card">
                    <img src="uploads/<?php echo $image['file_name']; ?>" alt="Imagen">
                    <div class="image-info">
                        <p><strong>Subido por:</strong> Usuario <?php echo $image['user_id']; ?></p>
                        <p><strong>Tamaño:</strong> <?php echo number_format($image['file_size'] / 1024, 2); ?> KB</p>
                        <p><strong>Fecha:</strong> <?php echo date("d M Y, H:i", strtotime($image['created_at'])); ?></p>
                    </div>
                    
                    <!-- Comentarios -->
                    <div class="comments">
                        <h3>Comentarios:</h3>
                        <form action="comment.php" method="POST">
                            <input type="hidden" name="image_id" value="<?php echo $image['id']; ?>">
                            <textarea name="comment" placeholder="Escribe un comentario..." required></textarea>
                            <button type="submit">Comentar</button>
                        </form>

                        <?php
                        $stmt_comment = $conn->prepare($comments_query);
                        $stmt_comment->bind_param("i", $image['id']);
                        $stmt_comment->execute();
                        $comments_result = $stmt_comment->get_result();

                        while ($comment = $comments_result->fetch_assoc()) {
                            echo "<p><strong>Usuario {$comment['user_id']}:</strong> {$comment['comment_text']}</p>";
                        }
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Galería de Imágenes</p>
    </footer>
</body>
</html>
