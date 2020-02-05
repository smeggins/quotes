<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class = 'random-quote category-tag'<?php post_class(); ?>>
		<div class = "quote-content">
			<?php the_excerpt(); ?>
		</div>
		<div class = "quote-title">
			- <?php the_title(); ?>
		</div>
</article><!-- #post-## -->


