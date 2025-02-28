/* Configuración general */
body {
    font-family: Arial, sans-serif;
    background: url('images/grid-background.jpg');
    color: white;
    text-align: center;
    margin: 0;
    padding: 0;
}

/* Contenedor principal */
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

/* Banner */
.banner img {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
}

/* Tarjetas */
.card {
    background: black;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
    width: 90%;
    max-width: 400px;
    margin-top: -50px;
}

.profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid white;
}

/* Botones */
.buttons button {
    background: #333;
    color: white;
    border: none;
    padding: 10px;
    margin: 5px;
    border-radius: 10px;
    cursor: pointer;
}

.buttons button:hover {
    background: #555;
}

/* Cuadro de código */
.code-box {
    margin-top: 10px;
    font-family: monospace;
    background: rgba(255, 255, 255, 0.1);
    padding: 10px;
    border-radius: 5px;
    display: inline-block;
}

/* Cursor de escritura */
.cursor {
    animation: blink 0.8s infinite;
}

@keyframes blink {
    50% { opacity: 0; }
}

/* Ocultar el cuadro de información por defecto */
.info-card {
    display: none;
}

/* Botón de regresar */
.back-btn {
    position: absolute;
    left: 10px;
    top: 10px;
    background: white;
    border: none;
    padding: 5px;
    cursor: pointer;
}