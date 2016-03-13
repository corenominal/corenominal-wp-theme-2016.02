<?php
/**
 * The default footer template
 */
?>
<footer class="page-footer container">
<p class="footer-icons"><a href="<?php echo site_url( 'copyleft' ); ?>"><i class="fa fa-copyright fa-flip-horizontal"></i><span class="sr-only"> &copy; <?php echo date('Y') ?> Philip Newborough</span></a></p>
</footer>
<?php wp_footer() ?>
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "corenominal",
  "url" : "https://corenominal.org",
  "logo": "https://corenominal.org/logo.png",
  "sameAs" : [ "http://www.facebook.com/corenominal",
    "http://www.twitter.com/corenominal",
    "https://plus.google.com/+PhilipNewborough",
    "https://github.com/corenominal",
    "https://codepen.io/corenominal",
    "https://uk.linkedin.com/in/corenominal",
    "https://www.reddit.com/user/corenominal"]
}
</script>
</body>
</html>