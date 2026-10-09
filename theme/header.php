<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tutorial
 */

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#primary" class="sr-only"><?php esc_html_e( 'Skip to content', 'ednx' ); ?></a>

	<div class="body-overlay"></div>

	<!-- Preloader Start -->
	<div class="preloader is-loading">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-icon.png" alt="<?php esc_attr_e( 'Loading', 'ednx' ); ?>"></div>
		</div>
	</div>
	<!-- Preloader End -->

	<!-- Back to top -->
	<div class="back-to-top-wrapper">
		<button id="back-to-top" type="button" class="back-to-top-btn">
			<span class="back-to-top-icon"><i class="tji-arrow-up-2"></i></span>
		</button>
	</div>

	<!-- start: Hamburger Menu -->
	<div class="hamburger-area">
		<div class="hamburger_bg"></div>
		<div class="hamburger_wrapper">
			<div class="hamburger_inner">
				<div class="hamburger_top d-flex align-items-center justify-content-between">
					<div class="hamburger_logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile_logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo.png" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					</div>
					<div class="hamburger_close">
						<button class="hamburger_close_btn">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</button>
					</div>
				</div>
				<div class="hamburger-text d-none d-lg-block">
					<p><?php bloginfo( 'description' ); ?></p>
				</div>
				<div class="hamburger-search-area">
					<h5 class="hamburger-title"><?php esc_html_e( 'Search now', 'ednx' ); ?></h5>
					<div class="hamburger_search">
						<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<button type="submit"><i class="tji-search"></i></button>
							<input type="search" autocomplete="off" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search here...', 'ednx' ); ?>">
						</form>
					</div>
				</div>
				<div class="hamburger_menu">
					<div class="mobile_menu"></div>
				</div>
				<div class="hamburger-infos">
					<h5 class="hamburger-title"><?php esc_html_e( 'Contact info', 'ednx' ); ?></h5>
					<div class="contact-info">
						<div class="contact-item">
							<span class="subtitle"><?php esc_html_e( 'Phone:', 'ednx' ); ?></span>
							<a class="contact-link" href="tel:+1(009)544-7818">+1 (009) 544-7818</a>
						</div>
						<div class="contact-item">
							<span class="subtitle"><?php esc_html_e( 'Email:', 'ednx' ); ?></span>
							<a class="contact-link" href="mailto:support@edunex.com">support@edunex.com</a>
						</div>
						<div class="contact-item">
							<span class="subtitle"><?php esc_html_e( 'Location:', 'ednx' ); ?></span>
							<span class="contact-link">189 Congress, Suite 300 TX 78701, USA</span>
						</div>
					</div>
				</div>
			</div>
			<div class="hamburger-socials">
				<h5 class="hamburger-title"><?php esc_html_e( 'Follow us', 'ednx' ); ?></h5>
				<div class="social-links">
					<ul class="tj-socials">
						<li>
							<a href="https://facebook.com" target="_blank"><i class="tji-facebook"></i></a>
						</li>
						<li>
							<a href="https://instagram.com" target="_blank"><i class="tji-instagram"></i></a>
						</li>
						<li>
							<a href="https://x.com" target="_blank"><i class="tji-x-twitter"></i></a>
						</li>
						<li>
							<a href="https://linkedin.com/" target="_blank"><i class="tji-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end: Hamburger Menu -->

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="smooth-wrapper">
		<div id="smooth-content">
