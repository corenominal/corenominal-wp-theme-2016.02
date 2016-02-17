<?php
/**
 * The homepage sidebar template.
 */
?>
<aside class="sidebar">
<div class="container">
<div class="latest">
<?php dynamic_sidebar('corenominal-aside-column-one-widget') ?>
<?php dynamic_sidebar('corenominal-aside-column-two-widget') ?>
<?php dynamic_sidebar('corenominal-aside-column-three-widget') ?>
</div>
<div class="powered-by">
<h4><i class="fa fa-wordpress"></i> Powered by WordPress</h4>
<p>This site is proudly powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. My theme is open source and is <a href="https://github.com/corenominal/corenominal-wp-theme-2016.02" target="_blank">available from GitHub</a>.</p>
</div>
</div>
</aside>