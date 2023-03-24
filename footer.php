<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer py-4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <small>
                    &copy;  <?php echo date( 'Y' ); ?>  <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved
                </small>
            </div>
        </div>
    </div>
</footer>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

