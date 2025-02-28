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
        // Escribiendo letra por letra
        if (textIndex < codes[index].length) {
            codeElement.innerHTML += codes[index][textIndex];
            textIndex++;
            setTimeout(typeEffect, 100);
        } else {
            // Esperar antes de borrar
            setTimeout(() => {
                deleting = true;
                typeEffect();
            }, 2000);
        }
    } else {
        // Borrando letra por letra
        if (textIndex > 0) {
            codeElement.innerHTML = codes[index].substring(0, textIndex - 1);
            textIndex--;
            setTimeout(typeEffect, 50);
        } else {
            // Cambiar al siguiente código
            deleting = false;
            index = (index + 1) % codes.length;
            setTimeout(typeEffect, 500);
        }
    }
}

// Iniciar efecto de escritura
typeEffect();

// Función para mostrar el cuadro de información y ocultar el principal
function showInfo() {
    document.getElementById("main-card").style.display = "none";
    document.getElementById("info-card").style.display = "block";
}

// Función para volver al cuadro principal
function showMain() {
    document.getElementById("info-card").style.display = "none";
    document.getElementById("main-card").style.display = "block";
}