<?php
/**
 * The default footer template
 */
?>
<footer class="page-footer">
<div class="final-word">
<div class="container">
<h4><i class="fa fa-wordpress"></i> Powered by WordPress</h4>
<p>This site is proudly powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. My theme is open source and is <a href="https://github.com/corenominal/corenominal-wp-theme-2016.02" target="_blank">available from GitHub</a>.</p>
</div>
</div>
<div class="container">
<p class="footer-icons"><a href="<?php echo site_url( 'copyleft' ); ?>"><i class="fa fa-copyright fa-flip-horizontal"></i><span class="sr-only"> <?php echo date('Y') ?> Philip Newborough</span></a></p>
</div>
</footer>
<?php wp_footer() ?>
</body>
</html>