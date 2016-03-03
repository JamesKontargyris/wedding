<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wedding
 */

?>

<section class="l-page venue">
	<article id="post-<?php the_ID(); ?>">

		<header class="entry-header l-page__header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .page__header -->

        <div class="card">
            <div class="card__content">
                <h3 class="center small-bottom-margin">We have selected a number of hotels near Denton that we recommend to guests looking to stay the night (or beyond).</h3>
                <p class="center narrow">If you're looking to make a holiday of it, Ilkley offers some lovely hotels and is a great base for exploring the Yorkshire Dales and North Yorkshire towns like Harrogate and Wetherby. If you're just looking for somewhere to crash on the night, we've got you covered too.</p>
                <p class="center narrow"><em>Stated room availability is for the night of 10 September 2016.</em></p>
            </div>
        </div>


		<?php the_content(); ?>

		<footer class="entry-footer l-page__footer">
		</footer><!-- .page__footer -->

	</article><!-- #post-## -->
</section>
