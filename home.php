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

            <section class="home-hero">
                <div class="home-hero__corner-top-left"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-corner.svg" alt=""></div>
                <div class="home-hero__corner-top-right"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-corner.svg" alt=""></div>
                <div class="home-hero__corner-bottom-left"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-corner.svg" alt=""></div>
                <div class="home-hero__corner-bottom-right"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-corner.svg" alt=""></div>

                <div class="home-hero__content">
                    <img class="svg home-hero__mobile-silhouettes" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-small.svg" alt="<?php bloginfo( 'name' ); ?>">
                    <div class="home-hero__title">
                        <div class="home-hero__title__small-text">
                            The Marriage of
                        </div>
                        <div class="home-hero__title__large-text">
                            <span class="home-hero__title__large-text__name">Hele</span>n <span class="home-hero__title__large-text__ampersand">&amp;</span> <span class="home-hero__title__large-text__name">Jame</span>s
                        </div>
                        <div class="home-hero__title__divider">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/heading-bells.svg" alt="---"
                                 class="svg">
                        </div>
                        <div class="home-hero__title__medium-text">
                            Tenth of September <br class="is-hidden-small">Two Thousand and Sixteen
                        </div>
                    </div>
                    <div class="home-hero__scroll-arrow bounce">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.svg" alt="Scroll Down" class="svg">
                    </div>
                </div>
			</section><!--.home-hero-->

            <section class="our-story card has-garland-top">
                <div class="card__content">
                    <ul class="our-story__photos photos-row">
                        <li class="photos-row__photo"><img class="is-circular" src="<?php echo get_template_directory_uri(); ?>/img/proposal-photo-1.jpg" alt="Proposal Photo 1"></li>
                        <li class="photos-row__photo"><img class="is-circular" src="<?php echo get_template_directory_uri(); ?>/img/proposal-photo-2.jpg" alt="Proposal Photo 2"></li>
                        <li class="photos-row__photo"><img class="is-circular" src="<?php echo get_template_directory_uri(); ?>/img/proposal-photo-3.jpg" alt="Proposal Photo 3"></li>
                    </ul>
                    <p class="our-story__pull-quote pull-quote-narrow is-centered-text">
                        "After 10 years together, it was about time I asked Helen to marry me. So where better to propose than Times Square?"
                    </p>
                    <div class="our-story__stories">
                        <div class="our-story__stories__helen is-centered-text">
                            <img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/silhouette-helen.svg" alt="Helen Silhouette">
                            <h5>Helen</h5>
                            <p><em>"'Magic can happen when you least expect it'. New York was the perfect place for the next chapter to begin. After James surprised me with dinner and a show on Broadway on a rainy Summer's evening, I thought it couldn't get much better. He had been acting a little strange all day - it all fell into place when at around midnight he got down on one knee and proposed! We celebrated with cocktails overlooking Times Square - certainly a night I'll never forget.</em></p>
                            <p><em>"I can't believe where the last 10 and a half years have gone, from the Rat and Emu student bar in Dartington, Devon where it all began to our little haven in Hebden Bridge - it's been an adventure! ”</em></p>
                        </div>
                        <div class="our-story__stories__james is-centered-text">
                            <img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/silhouette-james.svg" alt="James Silhouette">
                            <h5>James</h5>
                            <p><em>“We got the chance to visit New York - one of our favourite cities - last summer. I knew it would be the perfect place to propose. I made plans in the few months before we left: I found a spot in Times Square on Google Street View; I ran it past the in-laws-to-be; I found a glittery (temporary) ring that would look great in Facebook photos (we took a trip to Tiffany's on 5th Avenue for the real thing)."</em></p>
                            <p><em>"On the evening of 27 July 2015, after surprising Helen with a Broadway show (and in a British-level downpour), I asked some unsuspecting Canadian tourists to take a photo of us, got down on one soggy knee and popped the question.”</em></p>
                        </div>
                    </div>
                    <div class="our-story__highlight-line"><em>We can't wait to see you all on our special day – let's party the night away!</em></div>
                </div>
            </section><!--.our-story-->

            <section class="card itinerary">
                <div class="card__content">
                    <h2>The Big Day<div class="heading-bells"></div></h2>
                    <div class="itinerary__event">
                        <div class="circle-icon">
                            <img class="svg itinerary__event__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-wedding-rings.svg" alt="Wedding Rings">
                        </div>
                        <div class="itinerary__event__title">
                            <div class="itinerary__event__title__serif">The</div>
                            <div class="itinerary__event__title__cursive">Ceremony</div>
                        </div>
                        <div class="itinerary__event__details">
                            <span>2.00pm</span>
                            <address>
                                St. Helen's Church <br>
                                Denton <br>
                                Ilkley <br>
                                LS29 0HH
                            </address>
                        </div>
                    </div>
                    <div class="itinerary__event">
                        <div class="circle-icon">
                            <img class="svg itinerary__event__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-champagne-flute.svg" alt="Wedding Rings">
                        </div>
                        <div class="itinerary__event__title">
                            <div class="itinerary__event__title__serif">The</div>
                            <div class="itinerary__event__title__cursive">Reception</div>
                        </div>
                        <div class="itinerary__event__details">
                            <span>After the ceremony</span><br>
                            Wedding Breakfast will follow
                            <address>
                                Denton Hall <br>
                                Denton Road<br>
                                Ilkley <br>
                                LS29 0HH
                            </address>
                        </div>
                    </div>
                    <div class="itinerary__event">
                        <div class="circle-icon">
                            <img class="svg itinerary__event__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-mask.svg" alt="Wedding Rings">
                        </div>
                        <div class="itinerary__event__title">
                            <div class="itinerary__event__title__serif">The</div>
                            <div class="itinerary__event__title__cursive">Wrap Party</div>
                        </div>
                        <div class="itinerary__event__details">
                            <span>8.00pm - 1.00am</span>
                            <address>
                                Denton Hall <br>
                                Denton Road<br>
                                Ilkley <br>
                                LS29 0HH
                            </address>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <p class="center no-bottom-margin"><a href="/wedding-info" class="button button-primary">Important Info</a></p>
                </div>
            </section><!--.itinerary-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
