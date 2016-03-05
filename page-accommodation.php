<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wedding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<section class="l-page">
					<article id="post-<?php the_ID(); ?>">

						<header class="entry-header l-page__header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .page__header -->

						<?php the_content(); ?>

						<?php
						$hotels = get_posts(['post_type' => 'hotel', 'orderby' => 'menu_order']);

						if($hotels) :
							foreach($hotels as $hotel) : $hotel_id = $hotel->ID;
						?>

						<div class="card-shallow">
							<div class="card__content">
								<section class="hotel">
									<div class="hotel__photo">
										<?php if(has_post_thumbnail($hotel_id)) : ?>
											<?php echo get_the_post_thumbnail( $hotel_id, 'hotel-desktop', ['class' => 'is-desktop-photo', 'alt' => get_the_title($hotel_id)] ); ?>
											<?php echo get_the_post_thumbnail( $hotel_id, 'hotel-mobile', ['class' => 'is-mobile-photo', 'alt' => get_the_title($hotel_id)] ); ?>
										<?php endif; ?>
									</div>
									<div class="hotel__details">
										<div class="hotel__details__title"><?php echo get_the_title($hotel_id); ?></div>

										<?php if(get_field('address', $hotel_id)) : ?>
											<div class="hotel__details__address"><?php echo get_field('address', $hotel_id); ?> <?php if(get_field('map_url', $hotel_id)) : ?>
													<a href="<?php echo get_field('map_url', $hotel_id); ?>" target="_blank" class="button button-secondary button-small no-bottom-margin">Map</a>
												<?php endif; ?></div>
										<?php endif; ?>

										<?php if(get_field('hotel_url', $hotel_id)) : ?>
											<div class="hotel__details__url"><a href="<?php echo 'http://' . str_replace('http://', '', get_field('hotel_url', $hotel_id)); ?>" target="_blank"><?php echo get_field('hotel_url', $hotel_id); ?></a></div>
										<?php endif; ?>

										<?php if(!empty(get_field('rates', $hotel_id)['body'][0][0]['c'])) : $rates = get_field('rates', $hotel_id); ?>

											<div class="hotel__details__rooms">
												<table class="rates-table">
													<?php foreach($rates['body'] as $tr) : ?>
														<tr>
															<?php foreach($tr as $td) : ?>
																<td><?php echo $td['c']; ?></td>
															<?php endforeach; ?>
														</tr>
													<?php endforeach; ?>
												</table>
											</div>

										<?php endif; ?>

										<div class="hotel__details__book-link">
											<a href="<?php echo get_field('booking_url', $hotel_id); ?>" target="<?php echo get_field('target', $hotel_id); ?>" class="button button-primary"><?php echo get_field('button_text', $hotel_id); ?></a>
										</div>

										<?php if(get_field('description', $hotel_id)) : ?>
											<div class="hotel__details__description">

												<?php echo get_field('description', $hotel_id); ?>

												<?php echo get_field('tripadvisor_widget', $hotel_id) ? '<br><br>' . get_field('tripadvisor_widget', $hotel_id) : ''; ?>

											</div>
										<?php endif; ?>
									</div>
								</section>
							</div>
						</div>

						<?php endforeach; endif; ?>

						<footer class="entry-footer l-page__footer">
						</footer><!-- .page__footer -->

					</article><!-- #post-## -->
				</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
