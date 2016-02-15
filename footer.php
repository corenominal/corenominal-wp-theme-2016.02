<?php
/**
 * The default footer template
 */
?>
<footer class="page-footer">
<div class="final-word">
<div class="container">
<!-- advert here -->
</div>
</div>
<div class="container">
<p class="footer-icons copyleft"><a href="<?php echo site_url( 'copyleft' ); ?>"><i class="fa fa-copyright fa-flip-horizontal"></i><span class="sr-only"> <?php echo date('Y') ?> Philip Newborough</span></a></p>
<p class="footer-icons poweredby"><a href="http://wordpress.org/" target="_blank"><i class="fa fa-wordpress"></i><span class="sr-only"> Proudly powered by WordPress</span></a></p>
</div>
</footer>
<?php wp_footer() ?>
</body>
</html>