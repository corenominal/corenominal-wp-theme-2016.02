<article class="h-entry post">
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
<i class="fa fa-minus"></i> <i class="fa fa-minus"></i>
<p class="meta"><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<p class="meta"><?php the_tags( '<i class="fa fa-tags"></i> <span class="sr-only">Tags: </span>' ) ?></p>
</footer>
</article>