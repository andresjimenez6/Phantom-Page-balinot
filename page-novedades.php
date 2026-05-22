<?php
/**
 * Template Name: Novedades
 * Description: Últimas piezas de la colección
 */

get_header();
?>

<main class="pt-20">
    <!-- Secciones Propias de Novedades -->
    <?php get_template_part( 'template-parts/sections/novedades_hero' ); ?>
    <?php get_template_part( 'template-parts/sections/novedades_grid' ); ?>
    <?php get_template_part( 'template-parts/sections/novedades_newsletter' ); ?>
</main>

<?php
get_footer();
