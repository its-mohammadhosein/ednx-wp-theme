<?php
/**
 * Template Name: Coming Soon
 *
 * Ported from the Edunex HTML template's `coming-soon.html`. This page is
 * intentionally standalone (no header/footer, no navigation) like the
 * source template, so it doesn't call get_header()/get_footer() — it
 * builds its own minimal <html> document instead, while still firing
 * wp_head()/wp_footer() for plugin/asset compatibility. Decorative only:
 * the countdown and email form aren't wired to a real launch date or
 * mailing list.
 *
 * To actually put the site in "coming soon" mode, assign this template to
 * a published page and use a maintenance-mode plugin (or a small
 * template_redirect check) to route visitors to it — a theme template
 * alone doesn't intercept the rest of the site.
 *
 * @package tutorial
 */

while ( have_posts() ) :
	the_post();
	?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="body-overlay"></div>

<!-- Preloader Start -->
<div class="preloader is-loading">
	<div class="loading-container">
		<div class="loading"></div>
		<div id="loading-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-icon.png" alt="<?php esc_attr_e( 'Loading', 'ednx' ); ?>"></div>
	</div>
</div>
<!-- Preloader End -->

<!-- Coming soon start -->
<section class="tj-coming-soon-section">
	<div class="tj_coming_soon" data-bg-image="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bg/coming-soon-bg.webp">
		<div class="tj_coming_soon_wrap">
			<div class="tj_coming_soon_content">
				<span class="sec-subtitle"><i class="tji-subtitle"></i> <?php esc_html_e( 'Something new is brewing', 'ednx' ); ?></span>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="desc"><?php echo wp_kses_post( get_the_content() ); ?></div>
			</div>

			<div class="query_form">
				<form action="#">
					<span class="icon"><i class="tji-envelope"></i></span>
					<input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter email', 'ednx' ); ?>">
					<button type="submit" class="tj-btn-primary tj-btn-primary-sm flip-text-wrap">
						<span class="btn-text"><?php esc_html_e( 'Notify me', 'ednx' ); ?></span>
						<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
					</button>
				</form>
				<span class="form_note"><i class="tji-guarantee"></i> <?php esc_html_e( 'No spam — just one launch email.', 'ednx' ); ?></span>
			</div>
			<div class="coming-soon-social">
				<ul class="tj-socials tj-socials-2">
					<li><a href="https://facebook.com" target="_blank" rel="noopener"><i class="tji-facebook"></i></a></li>
					<li><a href="https://instagram.com" target="_blank" rel="noopener"><i class="tji-instagram"></i></a></li>
					<li><a href="https://x.com" target="_blank" rel="noopener"><i class="tji-x-twitter"></i></a></li>
					<li><a href="https://linkedin.com/" target="_blank" rel="noopener"><i class="tji-linkedin"></i></a></li>
				</ul>
			</div>
			<div class="coming-soon-copyright d-flex justify-content-center">
				<div class="tj-copyright-text">
					<p>
						&copy;<span><?php echo esc_html( date_i18n( 'Y' ) ); ?></span>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. <?php esc_html_e( 'All rights reserved', 'ednx' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Coming soon end -->

<?php wp_footer(); ?>
</body>
</html>
	<?php
endwhile;
