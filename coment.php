// comment.php
<?php
include 'db.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'], $_POST['image_id'])) {
    $comment = $_POST['comment'];
    $image_id = $_POST['image_id'];
    $user_id = 1; // Asegúrate de obtener el ID del usuario autenticado
    
    $query = "INSERT INTO comments (user_id, image_id, comment_text) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iis", $user_id, $image_id, $comment);
    $stmt->execute();
    
    echo "Comentario agregado.";
}

// Mostrar comentarios de una imagen
$image_id = $_GET['image_id'];
$query = "SELECT * FROM comments WHERE image_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $image_id);
$stmt->execute();
$result = $stmt->get_result();
while ($comment = $result->fetch_assoc()) {
    echo "<p>" . $comment['comment_text'] . " - Usuario " . $comment['user_id'] . "</p>";
}
?>
