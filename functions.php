<?php
/**
 * The magic WordPress functions.php file. Whoa, functions!
 * ========================================================
 */

/**
 * Theme support.
 */
require get_template_directory() . '/functions/theme_support.php';

/**
 * Enqueue scripts
 */
require get_template_directory() . '/functions/enqueue_scripts.php';

/**
 * Menus
 */
require get_template_directory() . '/functions/menus.php';

/**
 * Taxonomies
 */
require get_template_directory() . '/functions/taxonomies.php';

/**
 * Widgets
 */
require get_template_directory() . '/functions/widgets.php';

/**
 * Metaboxes
 */
require get_template_directory() . '/functions/metaboxes.php';
