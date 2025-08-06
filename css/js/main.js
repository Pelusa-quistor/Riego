// Mostrar carrito
document.getElementById('cart-btn').addEventListener('click', () => {
  document.getElementById('cart-sidebar').classList.add('active');
});

// Cerrar carrito
document.getElementById('close-cart').addEventListener('click', () => {
  document.getElementById('cart-sidebar').classList.remove('active');
});


// Slider automático cada 30 segundos
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

setInterval(() => {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
}, 30000); // 30000 milisegundos = 30 segundos
