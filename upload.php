// upload.php
<?php
include 'db.php'; // Tu conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];

    // Validar que la imagen sea válida
    if ($image_size < 5000000 && in_array(pathinfo($image_name, PATHINFO_EXTENSION), ['jpg', 'png', 'gif'])) {
        $new_name = uniqid() . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
        $target = 'uploads/' . $new_name;
        
        // Mover la imagen a la carpeta de uploads
        move_uploaded_file($image_tmp, $target);
        
        // Guardar la información de la imagen en la base de datos
        $query = "INSERT INTO images (file_name, file_size) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $new_name, $image_size);
        $stmt->execute();
        
        echo "Imagen subida y guardada con éxito.";
    } else {
        echo "La imagen no es válida.";
    }
}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Subir Imagen">
</form>
