<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wedding
 */

?>

<section class="l-page">
	<article id="post-<?php the_ID(); ?>">

		<header class="entry-header l-page__header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .page__header -->

		<?php the_content(); ?>

		<footer class="entry-footer l-page__footer">
		</footer><!-- .page__footer -->

	</article><!-- #post-## -->
</section>