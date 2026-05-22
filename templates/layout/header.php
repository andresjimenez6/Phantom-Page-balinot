    <!-- 2. HEADER (TopAppBar) -->
    <header id="header"
        class="fixed top-8 w-full z-50 transition-all duration-500 bg-white/80 backdrop-blur-xl shadow-[0_24px_48px_rgba(0,0,0,0.04)] h-20 flex justify-between items-center px-12">
        <div class="flex-1 flex gap-x-8 items-center">
            <nav class="hidden lg:flex gap-x-8">
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-950 border-b border-secondary/50 pb-1"
                    href="landing.html">Relojes</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="joyas.html">Joyas</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="smartwatches.html">Smartwatches</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="Regalos.html">Regalos</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="novedades.html">Novedades</a>
            </nav>
            <button class="lg:hidden material-symbols-outlined text-neutral-950"
                aria-label="Abrir menú de navegación">menu</button>
        </div>
        <div class="flex-shrink-0 text-center">
            <h1 class="font-headline text-2xl font-light tracking-[0.3em] text-neutral-950">PHANTOM</h1>
        </div>
        <div class="flex-1 flex justify-end items-center gap-x-6">
            <button class="material-symbols-outlined hover:opacity-70 transition-opacity"
                aria-label="Buscar productos">search</button>
            <button class="material-symbols-outlined hover:opacity-70 transition-opacity"
                aria-label="Mi cuenta">person</button>
            <button class="material-symbols-outlined hover:opacity-70 transition-opacity"
                aria-label="Lista de favoritos">favorite</button>
            <div class="relative group">
                <button class="material-symbols-outlined hover:opacity-70 transition-opacity"
                    aria-label="Carrito de compra (2 artículos)">shopping_bag</button>
                <span aria-hidden="true"
                    class="absolute -top-1 -right-1 bg-secondary text-white text-[8px] px-1.5 py-0.5 rounded-full">2</span>
            </div>
        </div>
    </header>
