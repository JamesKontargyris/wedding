<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
 */

?>

	</div><!-- #content -->


	<?php if(is_in_future('10 September 2016')) : ?>
		<section class="countdown">
			<div class="countdown__timer">
				<div class="countdown__timer__days counter"><div class="number"></div> <span>Days</span></div>
				<div class="countdown__timer__hours counter is-hidden-medium"><div class="number"></div> <span>Hours</span></div>
				<div class="countdown__timer__minutes counter is-hidden-medium"><div class="number"></div> <span>Minutes</span></div>
			</div>
			Until the big day
		</section>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="site-footer__menu is-hidden-small">
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
			<img class="svg site-footer__menu__knot" src="<?php echo get_template_directory_uri(); ?>/img/knot.svg" alt="">
		</section>
		<section class="site-footer__contact-details">
			<h5 class="light-gray uppercase spread">Get in touch</h5>
			<a href="mailto:hello@helenandjameswedding.co.uk">hello@helenandjameswedding.co.uk</a> <br>
			Helen: 07921 159145 <br>
			James: 07561 396658
		</section>
		<section class="site-footer__small-print">
			&copy; James Kontargyris Design <?php echo date('Y'); ?>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
