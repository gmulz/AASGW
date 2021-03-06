<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AASGW
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'aasgw' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
                <div id="masthead-bg">
                        <img src ="/wp-content/themes/aasgw/images/paul.jpg"/>
                </div>
		<div class="site-branding">
<!--			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
                    
                    <div id="masthead-fg">
                        <a href="/" id="logo">
                            <img src="/wp-content/themes/aasgw/images/logo.png" alt="Allergy & Asthma Specialists of Greater Washington"/>
                        </a>
                    </div>
                    
                    <div id="locations-top">
                        
                        <span style="border-bottom: 1px solid black; white-space:pre;">    Locations    </span>
                        <div>
                            <div class="locations-list">
                                <a href="/"> Culpeper</a><br>
                                <a href="/"> Fairfax</a><br>
                                <a href="/"> Front Royal</a>
                            </div>
                            <div class="locations-list">
                                <a href="/"> Gainesville</a><br>
                                <a href="/"> Tysons Corner</a><br>
                                <a href="/"> Warrenton</a>
                            </div>
                        </div>
                    </div>
                    
		</div><!-- .site-branding -->

		<!-- #site-navigation -->
	</header><!-- #masthead -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e('Primary Menu', 'aasgw'); ?></button>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            <?php book_appointment_menu(); ?>
        </nav>

	<div id="content" class="site-content">
