<?php
get_header();
?>
<div class="container container-content">
<section class="content content-search">
<h1 class="sr-only"><?php the_title() ?></h1>
<form class="search-form search-result" action="<?php echo site_url(); ?>" method="get">
<input id="s" class="search-input" autocomplete="off" type="text" name="s" placeholder="S E A R C H . . ." value="<?php the_search_query(); ?>">
</form>
<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
?>
<article class="h-entry post">
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<div class="e-content">
<?php the_excerpt() ?>
</div>
<footer>
<i class="fa fa-minus"></i> <i class="fa fa-minus"></i>
<p class="meta"><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<p class="meta"><?php the_tags( '<i class="fa fa-tags"></i> <span class="sr-only">Tags: </span>' ) ?></p>
</footer>
</article>
<?php
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
<?php else : ?>
<p class="search-no-results">No results for "<?php the_search_query() ?>" <i class="fa fa-frown-o"></i></p>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
