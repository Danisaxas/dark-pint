// Códigos para animar
const codes = [
    "$arr = ['PHP', 'HTML', 'CSS'];",
    "console.log('Hola Mundo');",
    "let x = 10; let y = 20; console.log(x + y);",
    "def saludo(): print('Hola desde Python');"
];

let index = 0;
let textIndex = 0;
let deleting = false;
const codeElement = document.getElementById("code");

function typeEffect() {
    if (!deleting) {
        if (textIndex < codes[index].length) {
            codeElement.innerHTML += codes[index][textIndex];
            textIndex++;
            setTimeout(typeEffect, 100);
        } else {
            setTimeout(() => {
                deleting = true;
                typeEffect();
            }, 2000);
        }
    } else {
        if (textIndex > 0) {
            codeElement.innerHTML = codes[index].substring(0, textIndex - 1);
            textIndex--;
            setTimeout(typeEffect, 50);
        } else {
            deleting = false;
            index = (index + 1) % codes.length;
            setTimeout(typeEffect, 500);
        }
    }
}

// Iniciar animación de código
typeEffect();

// Función para cargar info.html sin recargar la página
function loadInfo() {
    fetch("info.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("main-card").style.display = "none";
            document.getElementById("info-container").innerHTML = data;
        });
}

// Función para volver al cuadro principal
function showMain() {
    document.getElementById("info-container").innerHTML = "";
    document.getElementById("main-card").style.display = "block";
}