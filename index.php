<?php
/**
 * El index.php es requerido por WordPress. 
 * Se mostrará si no hay una plantilla más específica (como front-page.php).
 */

get_header();
?>
<main class="pt-20 px-12 pb-20">
    <div class="max-w-7xl mx-auto">
        <h1 class="font-headline text-3xl mb-8">Blog / Actualidad</h1>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                echo '<div class="mb-4 text-neutral-600 border-b pb-4">';
                echo '<h2 class="font-headline text-xl"><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h2>';
                the_excerpt();
                echo '</div>';
            }
        } else {
            echo '<p>No hay contenido disponible.</p>';
        }
        ?>
    </div>
</main>
<?php
get_footer();
