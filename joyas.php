<?php
// joyas.php - Catálogo de Alta Joyería
?>
<!DOCTYPE html>
<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Alta Joyería — PHANTOM LUXE</title>
    <meta name="description" content="Descubre la colección de alta joyería PHANTOM LUXE: anillos, collares, pendientes y brazaletes en oro 18k, platino y piedras preciosas." />
    
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;700&amp;family=Manrope:wght@200;300;400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

    <!-- ESTILOS GLOBALES EXTRAÍDOS -->
    <link href="assets/css/global.css" rel="stylesheet" />

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- TAILWIND CONFIG EXTRAÍDA -->
    <script src="assets/js/tailwind.config.js"></script>
</head>

<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">
    <!--====================================
         INCLUDES DE PHP (Catálogo)
    =====================================-->

    <!-- Cabeceras Globales Unificadas -->
    <?php include 'templates/layout/topbar.php'; ?>
    <?php include 'templates/layout/header.php'; ?>

    <main class="pt-20">
        <!-- Secciones Propias de esta Página -->
        <?php include 'templates/sections/joyas_hero.php'; ?>
        <?php include 'templates/sections/joyas_catalog.php'; ?>
    </main>

    <!-- Footer Global Unificado -->
    <?php include 'templates/layout/footer.php'; ?>
</body>

</html>
