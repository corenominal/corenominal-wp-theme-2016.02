<article class="h-entry post snippet">
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
<p class="meta"><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>  <?php the_time('F j, Y') ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php the_time() ?></a></p>
<p class="meta"><?php corenominal_the_snippet_languages( $post->ID ) ?></p>
<p class="meta"><?php corenominal_the_snippet_tags( $post->ID ) ?></p>
</footer>
</article>