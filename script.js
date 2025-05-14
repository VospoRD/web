// Función para mostrar el formulario de contacto
function mostrarContacto() {
    const contactoSection = document.getElementById('contacto');
    contactoSection.scrollIntoView({ behavior: 'smooth' });
}

// Animación del menú al hacer scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.style.backgroundColor = '#FF8533';
    } else {
        header.style.backgroundColor = '#FF6B00';
    }
});

// Validación del formulario
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();
    const nombre = document.querySelector('input[name="nombre"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const mensaje = document.querySelector('textarea[name="mensaje"]').value;

    if (nombre && email && mensaje) {
        alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
        e.target.submit();
    } else {
        alert('Por favor, completa todos los campos.');
    }
});

function toggleMenu() {
    const menuList = document.querySelector('nav ul');
    menuList.classList.toggle('active');
}