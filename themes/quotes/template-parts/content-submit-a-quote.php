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

    <form method="post" class="user-input">
        <div class="name-input">
            <p>first name</p>
            <input name="first_name">
            <p>last name</p>
            <input name="last_name">
        </div>
        <p>email</p>
        <input name="email">
        <p>quote author <span class="mandatory">*</span></p>
        <input class="quoteAuthor" name="quote_author">
        <p>quote <span class="mandatory">*</span></p>
        <textarea name="quote" class="quoteContent" cols="40" rows="10"></textarea>
    </form>

    <button type='button' id='submit-quote-button' class="green-branding" >Submit</button>
            
	</div><!-- .entry-content -->
</article><!-- #post-## -->
