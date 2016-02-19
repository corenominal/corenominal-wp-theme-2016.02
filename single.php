<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
while ( have_posts() ) :
the_post();
$categories = get_the_category();
$category = $categories[0]->slug;
require get_template_directory() . '/article_' . $category . '.php';
comments_template();
endwhile;
?>
</section>
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if( !empty( $next_post ) || !empty( $prev_post ) ): ?>
<div id="pager" class="pager">
<?php if ( !empty( $prev_post ) ): ?>
<div id="next_posts_link" class="next_posts_link">
<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-chevron-left"></i> <?php echo $prev_post->post_title; ?></a>
</div>
<?php endif; ?>
<?php if ( !empty( $next_post )  ): ?>
<div id="previous_posts_link" class="previous_posts_link">
<a href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-chevron-right"></i> <?php echo $next_post->post_title; ?></a>
</div>
<?php endif; ?>
</div>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
