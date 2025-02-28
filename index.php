<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="profile-card">
        <img src="perfil.jpg" class="profile-pic" alt="Foto de perfil">
        <h2>MinoTBug</h2>
        <p>@MinoTBug</p>
        
        <div class="buttons">
            <button onclick="loadPage('info.php')">¡Info</button>
            <button>💻 Habilidades</button>
            <button>💼 Teams</button>
        </div>
    </div>

    <div id="content"></div>

    <script src="script.js"></script>
</body>
</html>