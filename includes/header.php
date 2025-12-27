<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VivaLife | Bebidas y Dulces</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons (Versión CDN para vanilla JS) -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Tailwind CSS (CDN para desarrollo rápido sin Node.js) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Configuración personalizada de Tailwind en JS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'viva-red': '#F40009',
                        'viva-dark': '#121212',
                        'viva-gray': '#F5F5F5',
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    },
                    animation: {
                        'marquee': 'marquee 20s linear infinite',
                    }
                },
            }
        }
    </script>
</head>
<body class="font-sans text-viva-dark bg-white">

    <!-- Header / Navbar -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 bg-viva-red rounded-full flex items-center justify-center text-white font-bold text-xs">V</div>
                    <span id="logo-text" class="font-black text-2xl tracking-tighter text-white md:text-viva-dark transition-colors">
                        VIVA<span class="text-viva-red">LIFE</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#inicio" class="nav-link text-sm font-bold uppercase tracking-wider hover:text-viva-red transition-colors">Inicio</a>
                    <a href="#productos" class="nav-link text-sm font-bold uppercase tracking-wider hover:text-viva-red transition-colors">Productos</a>
                    <a href="#historia" class="nav-link text-sm font-bold uppercase tracking-wider hover:text-viva-red transition-colors">Historia</a>
                    
                    <!-- Iconos -->
                    <div class="flex items-center space-x-4 border-l border-gray-300 pl-4">
                        <i data-lucide="search" class="w-5 h-5 cursor-pointer hover:text-viva-red"></i>
                        <i data-lucide="shopping-cart" class="w-5 h-5 cursor-pointer hover:text-viva-red relative">
                            <span class="absolute -top-2 -right-2 bg-viva-red text-white text-[10px] font-bold h-4 w-4 flex items-center justify-center rounded-full">3</span>
                        </i>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-viva-dark">
                        <i data-lucide="menu" class="w-8 h-8"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Fullscreen -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-white hidden flex-col p-6 transform transition-transform duration-300">
        <div class="flex justify-between items-center mb-10">
            <span class="font-black text-3xl text-viva-dark">VIVA<span class="text-viva-red">LIFE</span></span>
            <button id="close-menu-btn" class="text-viva-dark">
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>
        </div>
        <div class="flex-1 flex flex-col justify-center space-y-8 text-center">
            <a href="#inicio" class="mobile-link text-4xl font-black text-viva-dark hover:text-viva-red transition-colors uppercase tracking-tighter">Inicio</a>
            <a href="#productos" class="mobile-link text-4xl font-black text-viva-dark hover:text-viva-red transition-colors uppercase tracking-tighter">Productos</a>
            <a href="#contacto" class="mobile-link text-4xl font-black text-viva-dark hover:text-viva-red transition-colors uppercase tracking-tighter">Contacto</a>
        </div>
    </div>