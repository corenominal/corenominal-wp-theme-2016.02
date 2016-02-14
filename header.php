<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta/default.php';
?>
<header class="masthead">
<div class="container">
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<p class="site-description"><strong><?php bloginfo('description'); ?></strong></p>
<nav>
<?php
/**
 * The header menu
 */
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>

</nav>
</div>
</header>
