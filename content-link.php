<article class="h-entry post link">
<h2><a class="p-name" href="<?php corenominal_the_link( $post->ID ) ?>" target="_blank">
<?php the_title() ?> <i class="fa fa-external-link"></i></a></h2>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
<p class="meta"><a class="u-url" href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<p class="meta"><?php corenominal_the_link_tags( $post->ID ) ?></p>
</footer>
</article>