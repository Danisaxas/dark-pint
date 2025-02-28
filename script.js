// Animación de letras
const letters = document.querySelectorAll('.letter');

letters.forEach((letter, index) => {
  letter.style.animationDelay = `${index * 0.1}s`;
});

// Efecto de scroll para animaciones
window.addEventListener('scroll', () => {
  const elements = document.querySelectorAll('.animate-on-scroll');
  elements.forEach(element => {
    if (isInViewport(element)) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });
});

// Función para verificar si el elemento está en el viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return rect.top >= 0 && rect.bottom <= window.innerHeight;
}

// Animación de aparición de texto con retraso
document.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    document.querySelector('.intro-text').classList.add('visible');
  }, 500); // Retraso de 500ms antes de mostrar el texto
});
