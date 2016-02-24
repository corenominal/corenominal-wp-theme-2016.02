<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
while ( have_posts() ) :
the_post();
?>
<h1 class="taxonomy-title"><a href="<?php echo site_url() ?>">&nbsp;~&nbsp;</a> <span>Tags</span></h1>
<ul class="tags">
<?php
$args = array(
	'orderby' 	 => 'count',
	'order' 	 => 'DESC',
	'hide_empty' => true
	);
$tags = get_tags( $args );
foreach ($tags as $tag):
?>
<li><a class="nowrap" href="<?php echo site_url( 'tag/' . $tag->slug ) ?>"><?php echo $tag->name ?></a></li>
<?php
endforeach;
?>
</ul>
<?php
endwhile;
?>
</section>
</div>
<?php
get_sidebar();
get_footer();
