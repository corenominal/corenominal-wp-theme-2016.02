<?php
get_header();
?>
<div class="container container-content">
<section class="content">
<?php
while ( have_posts() ) :
the_post();
?>
<h1 class="sr-only"><?php the_title() ?></h1>
<form class="search-form search-page" action="<?php echo site_url(); ?>" method="get">
<input id="s" class="search-input" autocomplete="off" type="text" name="s" placeholder="S E A R C H . . ." value="<?php the_search_query(); ?>">
</form>
<?php
endwhile;
?>
</section>
</div>
<?php
get_footer();
