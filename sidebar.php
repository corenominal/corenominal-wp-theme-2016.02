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
<div class="follow clear">
<ul class="social-links">
<li><a target="_blank" href="https://twitter.com/corenominal"><i class="fa fa-twitter fa-fw"></i><span class="sr-only"> Follow me on Twitter</span></a></li>
<li><a target="_blank" href="https://github.com/corenominal"><i class="fa fa-github fa-fw"></i><span class="sr-only"> Follow me on GitHub</span></a></li>
<li><a target="_blank" href="https://codepen.io/corenominal"><i class="fa fa-codepen fa-fw"></i><span class="sr-only"> Follow me on CodePen</span></a></li>
<li><a target="_blank" href="https://uk.linkedin.com/in/corenominal"><i class="fa fa-linkedin fa-fw"></i><span class="sr-only"> Connect with me on LinkedIn</span></a></li>
<li><a target="_blank" href="https://facebook.com/corenominal"><i class="fa fa-facebook fa-fw"></i><span class="sr-only"> Friend me on Facebook</span></a></li>
<li><a target="_blank" href="<?php echo site_url('feed'); ?>"><i class="fa fa-rss fa-fw"></i><span class="sr-only"> Subscribe to my feed</span></a></li>
<?php if( is_user_logged_in() ): ?>
<li><a target="_blank" href="<?php echo site_url('wp-admin'); ?>"><i class="fa fa-wordpress fa-fw"></i><span class="sr-only"> WordPress Admin</span></a></li>
<?php endif; ?>
</ul>
</div>
<div class="powered-by clear">
<h4><i class="fa fa-wordpress"></i> Powered by WordPress</h4>
<p>This site is proudly powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. My theme is open source and is <a href="https://github.com/corenominal/corenominal-wp-theme-2016.02" target="_blank">available from GitHub</a>.</p>
</div>
</div>
</aside>