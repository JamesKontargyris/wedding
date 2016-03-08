<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Cardo:400,400italic,700,700italic|Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php wp_head(); ?>
<!--    IE10+ specific targeting -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ie.css" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wedding' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <section class="site-header__menu">
            <a href="#" class="site-header__menu__link"><img class="svg site-header__menu__icon" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="Click for menu"> <img class="svg site-header__menu__icon is-hidden" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Click for menu"> <span class="is-hidden-medium">MENU</span></a>
        </section><!--.site-header__menu-->
		<section class="site-header__logo">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="svg site-header__logo__handj" src="<?php echo get_template_directory_uri(); ?>/img/handj_logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                    </a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="svg site-header__logo__handj" src="<?php echo get_template_directory_uri(); ?>/img/handj_logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                    </a></p>
			<?php endif; ?>

        </section><!-- .site-header__logo -->
        <section class="site-header__header-links">
            <a href="/rsvp" class="button button-primary smooth-scroll no-bottom-margin">RSVP</a>
            <a href="/contact-us" class="button button-secondary is-hidden-medium is-icon no-bottom-margin">
                <img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/envelope.svg" alt="Contact Us">
            </a>
        </section>

	</header><!-- #masthead -->
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->

	<div id="content" class="site-content">
