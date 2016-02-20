<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
while ( have_posts() ) :
the_post();
require get_template_directory() . '/article_page.php';
comments_template();
endwhile;
?>
</section>
</div>
<?php
get_sidebar();
get_footer();
