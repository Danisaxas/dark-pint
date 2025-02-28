<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $uploadDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $uploadFile = $uploadDir . $fileName;
    
    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $validTypes = ["jpg", "jpeg", "png", "gif"];

    if (in_array($fileType, $validTypes)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            echo "✅ Imagen subida correctamente.";
        } else {
            echo "❌ Error al subir la imagen.";
        }
    } else {
        echo "❌ Formato no permitido (solo JPG, JPEG, PNG, GIF).";
    }
}
header("Location: index.php");
exit;
?>
