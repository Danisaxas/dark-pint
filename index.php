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
                <button onclick="showInfo()">¡Info!</button>
                <button> &lt;/&gt; Habilidades</button>
                <button>💼 Teams</button>
            </div>
            <div class="code-box">
                <span id="code"></span><span class="cursor">|</span>
            </div>
        </div>

        <!-- Cuadro de Información (Oculto por defecto) -->
        <div class="card info-card" id="info-card">
            <button class="back-btn" onclick="showMain()">⬅️</button>
            <h2><strong>Nombre:</strong> Daniel</h2>
            <p><strong>Usuario:</strong> @Exzzex</p>
            <p><strong>ID:</strong> [7202754124]</p>
            <p><strong>Edad:</strong> -15</p>
            <p><strong>BestFriend:</strong> Ryan, Master</p>
            <p><strong>💖:</strong> Vicky</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>