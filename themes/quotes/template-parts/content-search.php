
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="search-quotes">
	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</div>
</article><!-- #post-## -->
