// Esta parte maneja la animación de los códigos
document.addEventListener("DOMContentLoaded", () => {
  let codes = document.querySelectorAll(".code");
  let delay = 0;

  codes.forEach(code => {
    code.style.animationDelay = `${delay}s`;
    delay += 1;
  });
});