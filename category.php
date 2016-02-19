<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
switch ( strtolower( single_cat_title( '', false ) ) )
{
	case 'posts':
		echo '<h1 class="taxonomy-title">Blog</h1>';
		break;
	
	default:
		echo '<h1 class="taxonomy-title">' . single_cat_title( '', false ) . '</h1>';
		break;
}
// The loop
while ( have_posts() ) :
the_post();
$categories = get_the_category();
$category = $categories[0]->slug;
require get_template_directory() . '/article_' . $category . '.php';
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
</div>
</div>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
