<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-div">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div><!-- .entry-div -->
    <?php if (is_user_logged_in() == true) { ?>
    <form method="post" class="user-input">
            <div>
                <p>quote author <span class="mandatory">*</span></p>
                <input class="quoteAuthor" name="quote_author">
            </div>
        <p>quote <span class="mandatory">*</span></p>
        <textarea name="quote" class="quoteContent" cols="40" rows="10"></textarea>
    </form>

    <button type='button' id='submit-quote-button' class="green-branding" >Submit</button>

    <?php 
    }else {
        echo '<h3> You must log-in to create a post </h3>';
        echo '<button type="button" id="log-in" class="green-branding" onclick = "window.location.href = `http://localhost/quotes/wp-admin/`">Log-in</button>';
    }
    
    ?>
            
	</div><!-- .entry-content -->
</article><!-- #post-## -->
