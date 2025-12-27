    <!-- FOOTER -->
    <footer class="bg-viva-dark text-gray-400 py-12 border-t border-gray-800 text-sm">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-2">
                <h2 class="text-2xl font-bold text-white mb-4">VIVA<span class="text-viva-red">LIFE</span></h2>
                <p class="max-w-xs">Redefiniendo el sabor con ingredientes premium y una pasión inquebrantable por la calidad.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4 uppercase">Tienda</h4>
                <ul class="space-y-2">
                    <li>Bebidas</li>
                    <li>Dulces</li>
                    <li>Merchandise</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4 uppercase">Legal</h4>
                <ul class="space-y-2">
                    <li>Privacidad</li>
                    <li>Términos</li>
                    <li>Cookies</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-12 pt-8 border-t border-gray-800">
            &copy; 2025 VivaLife Inc. Todos los derechos reservados.
        </div>
    </footer>

    <!-- Lógica JavaScript (Vanilla JS) -->
    <script>
        // Inicializar Iconos Lucide
        lucide.createIcons();

        // Lógica del Navbar Scroll
        const navbar = document.getElementById('navbar');
        const logoText = document.getElementById('logo-text');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-white', 'shadow-md', 'py-2');
                navbar.classList.remove('bg-transparent', 'py-4');
                logoText.classList.remove('text-white');
                logoText.classList.add('text-viva-dark');
                // Cambiar color de links si fuera necesario
            } else {
                navbar.classList.remove('bg-white', 'shadow-md', 'py-2');
                navbar.classList.add('bg-transparent', 'py-4');
                logoText.classList.add('text-white');
                logoText.classList.remove('text-viva-dark');
            }
        });

        // Lógica Menú Móvil
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        }

        mobileMenuBtn.addEventListener('click', toggleMenu);
        closeMenuBtn.addEventListener('click', toggleMenu);
        
        mobileLinks.forEach(link => {
            link.addEventListener('click', toggleMenu);
        });
    </script>
</body>
</html>