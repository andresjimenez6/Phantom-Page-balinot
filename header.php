<!DOCTYPE html>
<html class="light" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;family=Noto+Serif:ital,wght@0,300;0,400;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-surface font-body text-on-surface antialiased overflow-x-hidden selection:bg-secondary/30"); ?>>
    <!--====================================
         LAYOUT GLOBAL - Topbar y Navegación
    =====================================-->

    <?php get_template_part('template-parts/layout/topbar'); ?>

    <!-- 2. HEADER (TopAppBar) -->
    <header id="header"
        class="fixed top-8 w-full z-50 transition-all duration-500 bg-white/80 backdrop-blur-xl shadow-[0_24px_48px_rgba(0,0,0,0.04)] h-20 flex justify-between items-center px-12">
        <div class="flex-1 flex gap-x-8 items-center">
            <nav class="hidden lg:flex gap-x-8">
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-950 border-b border-secondary/50 pb-1"
                    href="<?php echo esc_url( home_url( '/' ) ); ?>">Relojes</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="<?php echo esc_url( site_url( '/joyas' ) ); ?>">Joyas</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="<?php echo esc_url( site_url( '/smartwatches' ) ); ?>">Smartwatches</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="<?php echo esc_url( site_url( '/regalos' ) ); ?>">Regalos</a>
                <a class="font-label text-[11px] uppercase tracking-[0.1em] text-neutral-500 hover:text-neutral-800 transition-colors"
                    href="<?php echo esc_url( site_url( '/novedades' ) ); ?>">Novedades</a>
            </nav>
            <button class="lg:hidden material-symbols-outlined text-neutral-950"
                aria-label="Abrir menú de navegación">menu</button>
        </div>
        <div class="flex-shrink-0 text-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1 class="font-headline text-2xl font-light tracking-[0.3em] text-neutral-950">PHANTOM</h1>
            </a>
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
