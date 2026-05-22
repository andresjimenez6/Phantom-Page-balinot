<?php
/**
 * Theme Front Page
 */

get_header();
?>

<main class="mt-20">
    <?php get_template_part( 'template-parts/sections/hero' ); ?>
    <?php get_template_part( 'template-parts/sections/novedades' ); ?>
    <?php get_template_part( 'template-parts/sections/promos' ); ?>
    <?php get_template_part( 'template-parts/sections/best-sellers' ); ?>
    <?php get_template_part( 'template-parts/sections/trust-badges' ); ?>
</main>

<?php
get_footer();
