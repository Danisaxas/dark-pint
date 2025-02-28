<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Página Personal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Banner Principal -->
  <div class="banner">
    <div class="perfil-icon">
      <img src="images/perfil.jpg" alt="Perfil" class="perfil-img">
    </div>
  </div>

  <!-- Cuadro Principal -->
  <div class="info-box" id="main-menu">
    <h2>Darkness 33k</h2>
    <p>@Exzzex</p>
    
    <div class="buttons">
      <button onclick="showInfo()">¡Info</button>
      <button>&lt;/&gt; Habilidades</button>
      <button>💼 Teams</button>
    </div>

    <!-- Animación de código -->
    <div class="code-container">
      <span id="code-text"></span>
      <span class="cursor">|</span>
    </div>
  </div>

  <!-- Cuadro de Información (Oculto por defecto) -->
  <div class="info-box hidden" id="info-box">
    <span class="back-btn" onclick="showMenu()">⬅️</span>
    <h2><strong>Nombre:</strong> Daniel</h2>
    <p><strong>Usuario:</strong> @Exzzex</p>
    <p><strong>ID:</strong> [7202754124]</p>
    <p><strong>Edad:</strong> -15</p>
    <p><strong>BestFriend:</strong> Ryan, Master</p>
    <p><strong>💖:</strong> Vicky</p>
  </div>

  <script src="script.js"></script>
</body>
</html>