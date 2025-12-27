// Carrito simple
let cartCount = 0;
const cartCountElement = document.getElementById('cart-count');
const toast = document.getElementById('toast');
const toastMessage = document.getElementById('toast-message');

function addToCart(productName) {
    // Incrementar contador
    cartCount++;
    cartCountElement.innerText = cartCount;

    // Animación pequeña en el contador
    cartCountElement.style.transform = 'scale(1.2)';
    setTimeout(() => {
        cartCountElement.style.transform = 'scale(1)';
    }, 200);

    // Mostrar Toast
    showToast(`${productName} agregado al carrito`);
}

function showToast(message) {
    toastMessage.innerText = message;
    toast.classList.add('show');
    
    // Ocultar después de 3 segundos
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Toggle Menú Móvil (Simple)
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav');

menuToggle.addEventListener('click', () => {
    // En una app real, cambiaríamos clases de CSS para abrir/cerrar
    // Aquí hacemos un toggle simple de display para demostrar funcionalidad
    if (nav.style.display === 'block') {
        nav.style.display = 'none';
    } else {
        nav.style.display = 'block';
        nav.style.position = 'absolute';
        nav.style.top = '60px';
        nav.style.left = '0';
        nav.style.width = '100%';
        nav.style.background = 'white';
        nav.style.padding = '20px';
        nav.style.boxShadow = '0 5px 10px rgba(0,0,0,0.1)';
        
        // Cambiar dirección del ul a columna para móvil
        const ul = nav.querySelector('ul');
        ul.style.flexDirection = 'column';
        ul.style.alignItems = 'center';
    }
});

// Filtros de botones (Solo visual para el showcase)
const filterBtns = document.querySelectorAll('.filter-btn');
filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});