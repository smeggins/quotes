<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="entry-content">
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
		) );
	?>

	<?php $quote = get_random_quote_array(); ?>
		<article class = 'random-quote'>      
					<div class = "quote-content"><?php the_content(); ?></div>
					<div class = "quote-title">- <?php the_title(); ?></div>
		</article>

	<button type='button' id='random-quote-button' class="green-branding">Show Me Another!</button>

</div><!-- .entry-content -->
</div><!-- #post-## -->
