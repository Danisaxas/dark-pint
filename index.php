<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darkness 33k</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <!-- Banner -->
        <div class="banner">
            <img src="images/banner.jpg" alt="Banner">
        </div>

        <!-- Cuadro Principal -->
        <div class="card" id="main-card">
            <img src="images/perfil.jpg" class="profile-pic" alt="Perfil">
            <h1>Darkness 33k</h1>
            <p>@Exzzex</p>
            <div class="buttons">
                <button onclick="loadInfo()">¡Info!</button>
                <button> &lt;/&gt; Habilidades</button>
                <button>💼 Teams</button>
            </div>
            <div class="code-box">
                <span id="code"></span><span class="cursor">|</span>
            </div>
        </div>

        <!-- Aquí se cargará el contenido de info.html -->
        <div id="info-container"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>