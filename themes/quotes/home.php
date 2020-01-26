<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <h1> Archives </h1>

        <?php if ( have_posts() ) : ?>

            <div class="cats">
                <h2> Quote Authors </h2>
                <ul class="categories-container">
                <?php wp_get_archives('type=postbypost&limit=1000'); ?>
                </ul>
            </div>

            <div class="cats">
                <h2> categories </h2>
                <ul class="categories-container">
                    <?php wp_list_categories( 'title_li' ) ?>
                </ul>
            </div>
            
            <div class="cats">
                <h2> tags </h2>
                <ul class="tags-container">
                    <?php 
                    $args = array('taxonomy' => 'post_tag', 'hide_empty' => true, 'title_li' => __( '' ) );
                    wp_list_categories( $args ) 
                    ?>
                </ul>
            </div>

			<?php while ( have_posts() ) : the_post(); ?>


			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
