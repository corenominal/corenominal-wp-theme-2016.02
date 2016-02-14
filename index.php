<?php
get_header();
?>
<div class="container">
<?php
// Set-up the loop
$post_types = array( 'post', 'link', 'snippet' );
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type' 		=> $post_types,
	'paged' 			=> $paged,
	'posts_per_page'	=> 10
	);
query_posts( $args );

while ( have_posts() ) :
the_post();
require get_template_directory() . '/content-' . $post->post_type . '.php';
endwhile;
?>
</div>
<?php
get_footer();