<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
while ( have_posts() ) :
the_post();
require get_template_directory() . '/content-' . $post->post_type . '.php';
comments_template();
endwhile;
?>
</section>
<?php if( get_next_posts_link() || get_previous_posts_link() ): ?>
<div id="pager" class="pager">
<div id="next_posts_link" class="next_posts_link">
<?php next_posts_link( '<i class="fa fa-chevron-left"></i> Older Posts' ) ?>
</div>
<div id="previous_posts_link" class="previous_posts_link">
<?php previous_posts_link( 'Newer Posts <i class="fa fa-chevron-right"></i>' ) ?>
<?php //previous_posts_link() ?>
</div>
</div>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
