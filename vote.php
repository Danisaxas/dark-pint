// vote.php
<?php
include 'db.php'; // Conexión a la base de datos

if (isset($_GET['image_id'], $_GET['vote'])) {
    $image_id = $_GET['image_id'];
    $vote = $_GET['vote']; // 'like' o 'dislike'
    $user_id = 1; // El ID del usuario autenticado
    
    // Insertar el voto en la base de datos
    $query = "INSERT INTO votes (user_id, image_id, vote_type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iis", $user_id, $image_id, $vote);
    $stmt->execute();
    
    echo "Voto registrado.";
}

// Mostrar votos (likes/dislikes) de una imagen
$image_id = $_GET['image_id'];
$query = "SELECT vote_type, COUNT(*) AS total FROM votes WHERE image_id = ? GROUP BY vote_type";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $image_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['vote_type'] . ": " . $row['total'] . "</p>";
}
?>
