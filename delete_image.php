// delete_image.php
<?php
include 'db.php'; // Asegúrate de tener la conexión a la base de datos aquí

if (isset($_GET['image_id'])) {
    $image_id = $_GET['image_id'];
    
    // Obtener la ruta de la imagen
    $query = "SELECT * FROM images WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $image = $result->fetch_assoc();
    
    // Eliminar el archivo de la carpeta
    unlink('uploads/' . $image['file_name']);
    
    // Eliminar la entrada en la base de datos
    $query = "DELETE FROM images WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    
    echo "Imagen eliminada con éxito.";
} else {
    echo "No se ha especificado una imagen.";
}
?>
