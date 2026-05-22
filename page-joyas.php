<?php
/**
 * Template Name: Joyas
 * Description: Catálogo de Alta Joyería
 */

get_header();
?>

<main class="pt-20">
    <!-- Secciones Propias de esta Página -->
    <?php get_template_part( 'template-parts/sections/joyas_hero' ); ?>
    <?php get_template_part( 'template-parts/sections/joyas_catalog' ); ?>
</main>

<?php
get_footer();
