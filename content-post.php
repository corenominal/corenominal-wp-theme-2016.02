<article class="h-entry post">
<?php if( is_single() ): ?>
<h1 class="p-name"><?php the_title() ?></h1>
<?php else: ?>
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<?php endif; ?>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
<i class="fa fa-minus"></i> <i class="fa fa-minus"></i>
<?php if( is_single() ): ?>
<p class="meta"><a class="u-url" href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<?php else: ?>
<p class="meta"><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<?php endif; ?>
<p class="meta"><?php the_tags( '<i class="fa fa-tags"></i> <span class="sr-only">Tags: </span>' ) ?></p>
</footer>
</article>
