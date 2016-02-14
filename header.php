<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta/default.php';
?>

<?php
/**
 * The header menu
 */
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>