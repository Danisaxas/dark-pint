// Lista de códigos que se mostrarán
const codeLines = [
  "const arr = ['PHP', 'HTML', 'CSS'];",
  "function myFunction() { return 'JavaScript'; }",
  "const python = 'Python';",
  "let x = 10; console.log(x);",
  "if (user === 'admin') { access = true; }"
];

let codeIndex = 0;
let charIndex = 0;
let isDeleting = false;
const codeText = document.getElementById("code-text");

function typeCode() {
  const currentCode = codeLines[codeIndex];

  if (!isDeleting) {
    // Escribiendo letra por letra
    codeText.textContent = currentCode.substring(0, charIndex + 1);
    charIndex++;

    if (charIndex === currentCode.length) {
      isDeleting = true;
      setTimeout(typeCode, 1500); // Espera antes de borrar
      return;
    }
  } else {
    // Borrando letra por letra
    codeText.textContent = currentCode.substring(0, charIndex - 1);
    charIndex--;

    if (charIndex === 0) {
      isDeleting = false;
      codeIndex = (codeIndex + 1) % codeLines.length; // Siguiente código
    }
  }

  setTimeout(typeCode, isDeleting ? 50 : 100); // Velocidad de escritura y borrado
}

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(typeCode, 1000); // Iniciar después de 1s
});

// Mostrar cuadro de información y ocultar el menú
function showInfo() {
  document.getElementById("main-menu").classList.add("hidden");
  document.getElementById("info-box").classList.remove("hidden");
}

// Volver al menú principal
function showMenu() {
  document.getElementById("info-box").classList.add("hidden");
  document.getElementById("main-menu").classList.remove("hidden");
}