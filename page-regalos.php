<?php
/**
 * Template Name: Regalos
 * Description: The Art of Gifting
 */

get_header();
?>

<main class="pt-20">
    <!-- Secciones Propias de Regalos -->
    <?php get_template_part( 'template-parts/sections/Regalos_hero' ); ?>
    <?php get_template_part( 'template-parts/sections/Regalos_categories' ); ?>
    <?php get_template_part( 'template-parts/sections/Regalos_packaging' ); ?>
    <?php get_template_part( 'template-parts/sections/Regalos_giftcards' ); ?>
</main>

<?php
get_footer();
