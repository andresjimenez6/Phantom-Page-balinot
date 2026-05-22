<?php
// novedades.php - Últimas piezas de la colección
?>
<!DOCTYPE html>
<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Novedades — PHANTOM LUXE</title>
    <meta name="description" content="Descubre las últimas incorporaciones y ediciones limitadas de PHANTOM LUXE." />
    
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;family=Noto+Serif:ital,wght@0,300;0,400;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

    <!-- ESTILOS GLOBALES EXTRAÍDOS -->
    <link href="assets/css/global.css" rel="stylesheet" />

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- TAILWIND CONFIG EXTRAÍDA -->
    <script src="assets/js/tailwind.config.js"></script>
</head>

<body class="bg-surface font-body text-on-surface antialiased overflow-x-hidden selection:bg-secondary/30">
    <!--====================================
         INCLUDES DE PHP (Server-Side)
    =====================================-->

    <!-- Cabeceras Globales Unificadas -->
    <?php include 'templates/layout/topbar.php'; ?>
    <?php include 'templates/layout/header.php'; ?>

    <main class="pt-20">
        <!-- Secciones Propias de Novedades -->
        <?php include 'templates/sections/novedades_hero.php'; ?>
        <?php include 'templates/sections/novedades_grid.php'; ?>
        <?php include 'templates/sections/novedades_newsletter.php'; ?>
    </main>

    <!-- Footer Global Unificado -->
    <?php include 'templates/layout/footer.php'; ?>
</body>

</html>
