<?php
/**
 * Template Name: Smartwatches
 * Description: Colección de Smartwatches
 */

get_header();
?>

<main class="pt-20">
    <!-- Secciones Propias de Smartwatches -->
    <?php get_template_part( 'template-parts/sections/smartwatches_hero' ); ?>
    <?php get_template_part( 'template-parts/sections/smartwatches_filters' ); ?>
    <?php get_template_part( 'template-parts/sections/smartwatches_grid' ); ?>
    <?php get_template_part( 'template-parts/sections/smartwatches_editorial' ); ?>
</main>

<?php
get_footer();
