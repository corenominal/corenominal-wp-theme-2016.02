<?php $the_link = get_post_custom_values('the_link', $post->ID) ?>
<article class="h-entry post link">
<?php if( is_single() ): ?>
<h1><a class="p-name" href="<?php echo $the_link[0] ?>" target="_blank"><?php the_title() ?> <i class="fa fa-external-link"></i></a></h1>
<?php else: ?>
<h2><a class="p-name" href="<?php echo $the_link[0] ?>" target="_blank"><?php the_title() ?> <i class="fa fa-external-link"></i></a></h2>
<?php endif; ?>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
<i class="fa fa-minus"></i> <i class="fa fa-minus"></i>
<p class="meta"><a class="u-url" href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<p class="meta"><?php the_tags( '<i class="fa fa-tags"></i> <span class="sr-only">Tags: </span>' ) ?></p>
</footer>
</article>
