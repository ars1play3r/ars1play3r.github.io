<?php require_once 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<main>
    <!-- HERO SECTION -->
    <section id="inicio" class="relative w-full h-[85vh] md:h-screen flex items-center overflow-hidden bg-viva-dark">
        <div class="absolute inset-0 z-0">
            <img src="<?= $products_data['hero']['image'] ?>" alt="Hero Background" class="w-full h-full object-cover object-center opacity-70 md:opacity-60">
            <div class="absolute inset-0 bg-gradient-to-t from-viva-dark via-viva-dark/40 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 w-full grid grid-cols-1 md:grid-cols-12">
            <div class="md:col-span-7 lg:col-span-6 flex flex-col justify-center text-white">
                <div class="inline-flex items-center gap-2 mb-6 w-max bg-viva-red/90 backdrop-blur-sm px-4 py-2 rounded-full border border-red-400/30">
                    <span class="text-xs font-bold uppercase tracking-widest text-white">Nuevo Lanzamiento</span>
                </div>
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black leading-[0.9] tracking-tighter mb-6 uppercase">
                    <?= $products_data['hero']['title'] ?>
                </h1>
                <p class="text-lg sm:text-xl text-gray-200 mb-8 max-w-md font-light leading-relaxed">
                    <?= $products_data['hero']['subtitle'] ?>
                </p>
                <button class="bg-viva-red text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-red-700 transition-all flex items-center gap-3 w-max shadow-lg shadow-red-900/50">
                    <?= $products_data['hero']['cta'] ?> <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <section class="bg-viva-dark py-6 overflow-hidden relative">
        <div class="whitespace-nowrap flex gap-8 animate-marquee">
            <?php for($i=0; $i<10; $i++): ?>
                <span class="text-white/20 font-black text-4xl md:text-6xl italic uppercase tracking-tighter">Fresh • Tasty • Sweet • Bold •</span>
            <?php endfor; ?>
        </div>
    </section>

    <!-- FEATURED SECTION -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16">
                <div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-viva-dark leading-[0.9] tracking-tighter mb-4">
                        <?= $products_data['featured']['title'] ?>
                    </h2>
                    <div class="h-1 w-20 bg-viva-red mb-4"></div>
                    <p class="text-gray-500 text-lg md:text-xl font-light">
                        <?= $products_data['featured']['description'] ?>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 auto-rows-[400px]">
                <?php foreach($products_data['featured']['items'] as $index => $item): ?>
                    <div class="relative group overflow-hidden rounded-2xl md:rounded-3xl cursor-pointer <?= $index === 0 ? 'lg:row-span-2' : '' ?>">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-90 group-hover:opacity-80"></div>
                        
                        <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full z-10 text-white transform group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="flex justify-between items-end">
                                <div>
                                    <?php if($item['badge']): ?>
                                        <span class="inline-block bg-viva-red text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-widest mb-3"><?= $item['badge'] ?></span>
                                    <?php endif; ?>
                                    <h3 class="text-2xl md:text-4xl font-black uppercase tracking-tight leading-none mb-1"><?= $item['name'] ?></h3>
                                    <p class="text-white/80 font-light text-lg"><?= $item['price'] ?></p>
                                </div>
                                <button class="bg-white text-viva-dark p-3 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300 hover:scale-110">
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CATALOG SECTION -->
    <section id="productos" class="py-16 md:py-24 bg-viva-gray">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-black text-viva-dark tracking-tight mb-12 text-center">TODO EL CATÁLOGO</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <?php foreach($products_data['catalog'] as $product): ?>
                    <div class="group relative bg-white rounded-xl sm:rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden h-full flex flex-col">
                        <div class="relative w-full aspect-[4/3] overflow-hidden bg-gray-50">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 z-20 bg-white p-3 rounded-full shadow-lg text-viva-dark hover:bg-viva-red hover:text-white transition-all opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 duration-300">
                                <i data-lucide="plus" class="w-5 h-5"></i>
                            </button>
                        </div>
                        <div class="p-5 md:p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] md:text-xs text-gray-400 font-bold uppercase tracking-widest mb-2"><?= $product['category'] ?></p>
                                <h3 class="text-lg md:text-xl font-bold text-viva-dark leading-tight mb-3 group-hover:text-viva-red transition-colors"><?= $product['name'] ?></h3>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                                <span class="text-xl md:text-2xl font-black text-viva-dark"><?= $product['price'] ?></span>
                                <span class="text-xs font-bold text-gray-400 uppercase hover:text-viva-red cursor-pointer transition-colors">Detalles &rarr;</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>