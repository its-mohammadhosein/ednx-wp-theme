<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * Ported from the Edunex HTML template's `error.html`.
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tutorial
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header error-page-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-page-header-content">
							<div class="tj-page-link">
								<span><i class="tji-home"></i></span>
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Error 404', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Error Section -->
		<section class="tj-error-section section-gap-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-error-wrap text-center">
							<div class="tj-error-content">
								<div class="error-img">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404/error.webp" alt="404">
								</div>
								<span class="sec-subtitle"><i class="tji-subtitle"></i> <?php esc_html_e( 'Page not found', 'ednx' ); ?></span>
								<h2 class="error-title"><?php esc_html_e( 'This Page Skipped Class.', 'ednx' ); ?></h2>
								<div class="error-desc"><?php esc_html_e( "The page you're looking for was moved, renamed or never enrolled. Let's get you back to learning.", 'ednx' ); ?></div>
								<div class="error-btn d-flex flex-wrap align-items-center justify-content-center gap-3">
									<a class="tj-btn-primary flip-text-wrap" href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<span class="btn-text"><?php esc_html_e( 'Back to home', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
									<a class="tj-btn-primary tj-btn-primary-light flip-text-wrap" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">
										<span class="btn-text"><?php esc_html_e( 'Explore courses', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Error Section -->
	</main>

<?php
get_footer();
