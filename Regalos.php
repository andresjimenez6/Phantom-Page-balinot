<?php
// Regalos.php - The Art of Gifting
?>
<!DOCTYPE html>
<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Regalos Exclusivos — PHANTOM LUXE</title>
    <meta name="description" content="Descubre la colección de regalos exclusivos de PHANTOM LUXE: cajas de lujo, tarjetas de regalo y joyería premium." />
    
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
        <!-- Secciones Propias de Regalos -->
        <?php include 'templates/sections/Regalos_hero.php'; ?>
        <?php include 'templates/sections/Regalos_categories.php'; ?>
        <?php include 'templates/sections/Regalos_packaging.php'; ?>
        <?php include 'templates/sections/Regalos_giftcards.php'; ?>
    </main>

    <!-- Footer Global Unificado -->
    <?php include 'templates/layout/footer.php'; ?>
</body>

</html>
