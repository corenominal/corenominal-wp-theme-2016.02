<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta/default.php';
?>
<header class="masthead">
<div id="logo" class="container">
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<p class="site-description"><strong><?php bloginfo('description'); ?></strong></p>
<div id="nav-icons" class="nav-icons">
<a class="search-icon" href="<?php echo site_url( 'search' ); ?>"><i class="fa fa-search"></i></a>
</div>
<nav id="site-menu" class="site-menu">
<?php
/**
 * The header menu
 */
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>

</nav>
</div>
</header>
