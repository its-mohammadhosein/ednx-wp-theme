<?php
/**
 * Template part for displaying the footer content
 *
 * Ported from the Edunex HTML template's footer section (CTA strip, widget
 * columns and copyright bar).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tutorial
 */

$ednx_assets_uri = get_template_directory_uri() . '/assets';
?>

<!-- start: Footer Section -->
<footer id="colophon" class="footer-section footer-1 section-gap-top">
	<div class="footer-inner">
		<div class="footer-cta">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cta-area">
							<div class="sec-heading sec-heading-center">
								<span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i> <?php esc_html_e( 'Chose categories', 'ednx' ); ?></span>
								<h2 class="sec-title tj-fade-anim" data-delay=".3"><?php esc_html_e( 'Transform Future Using Online.', 'ednx' ); ?></h2>
								<div class="btn-area tj-fade-anim" data-delay=".4">
									<a class="tj-btn-primary flip-text-wrap" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">
										<span class="btn-text"><?php esc_html_e( 'Start learning free', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
									<a class="tj-btn-primary tj-btn-primary-light flip-text-wrap" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">
										<span class="btn-text"><?php esc_html_e( 'Explore courses', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
								</div>
							</div>
							<div class="cta-user-img cta-user-1 tj-fade-anim" data-direction="right"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-1.png" alt=""></div>
							<div class="cta-user-img cta-user-2 tj-fade-anim" data-direction="right"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-2.png" alt=""></div>
							<div class="cta-user-img cta-user-3 tj-fade-anim" data-direction="right"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-6.png" alt=""></div>
							<div class="cta-user-img cta-user-4 tj-fade-anim" data-direction="left"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-3.png" alt=""></div>
							<div class="cta-user-img cta-user-5 tj-fade-anim" data-direction="left" data-offset="80"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-5.png" alt=""></div>
							<div class="cta-user-img cta-user-6 tj-fade-anim" data-direction="left" data-offset="100"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/users/user-img-4.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-main-wrapper">
			<div class="bg-img" data-bg-image="<?php echo esc_url( $ednx_assets_uri ); ?>/images/footer/footer-bg.png"></div>
			<div class="footer-main-area">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer-widget-wrapper">
								<div class="footer-widget footer-widget-subscribe tj-fade-anim">
									<h3 class="title"><?php esc_html_e( 'Subscribe for Latest Learning Update.', 'ednx' ); ?></h3>
									<div class="subscribe-form">
										<form action="#" method="post">
											<span class="icon"><i class="tji-envelope"></i></span>
											<input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter email', 'ednx' ); ?>">
											<button type="submit"><i class="tji-arrow-right-2"></i></button>
											<label for="agree"><input id="agree" type="checkbox"><?php esc_html_e( 'agree to our', 'ednx' ); ?> <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><?php esc_html_e( 'Terms & Condition?', 'ednx' ); ?></a></label>
										</form>
									</div>
								</div>
								<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
									<?php dynamic_sidebar( 'sidebar-1' ); ?>
								<?php else : ?>
									<div class="footer-widget footer-widget-nav-menu tj-fade-anim" data-delay=".3">
										<div class="title"><?php esc_html_e( 'Programs', 'ednx' ); ?></div>
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-2',
												'container'      => false,
												'items_wrap'     => '<ul>%3$s</ul>',
												'fallback_cb'    => false,
												'link_before'    => '<span>',
												'link_after'     => '</span>',
											)
										);
										?>
									</div>
									<div class="footer-widget footer-widget-contact tj-fade-anim" data-delay="0.7">
										<div class="title"><?php esc_html_e( 'Contact us', 'ednx' ); ?></div>
										<div class="footer-contact">
											<div class="footer-info">189 Congress, Suite 300 TX 78701, USA</div>
											<a href="tel:+1(009)544-7818" class="footer-info">+1 (009) 544-7818</a>
											<a href="mailto:hello@edunex.com" class="footer-info">hello@edunex.com</a>
										</div>
										<div class="footer-socials">
											<ul class="tj-socials tj-socials-dark">
												<li><a href="https://facebook.com" target="_blank"><i class="tji-facebook"></i></a></li>
												<li><a href="https://instagram.com" target="_blank"><i class="tji-instagram"></i></a></li>
												<li><a href="https://x.com" target="_blank"><i class="tji-x-twitter"></i></a></li>
												<li><a href="https://linkedin.com/" target="_blank"><i class="tji-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tj-copyright-area">
				<div class="tj-copyright-wrap">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="tj-copyright-content-area tj-fade-anim" data-delay=".3">
									<div class="footer-logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/logos/logo-2.png" alt="<?php bloginfo( 'name' ); ?>">
										</a>
									</div>
									<div class="tj-copyright-text-wrapper">
										<div class="tj-copyright-text">
											<p>
												&copy;<span><?php echo esc_html( date_i18n( 'Y' ) ); ?></span>
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. <?php esc_html_e( 'All rights reserved', 'ednx' ); ?>
											</p>
										</div>
									</div>
									<div class="download-buttons">
										<a href="https://play.google.com/store"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/footer/play-store.svg" alt=""></a>
										<a href="https://www.apple.com/app-store"><img src="<?php echo esc_url( $ednx_assets_uri ); ?>/images/footer/app-store.svg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end: Footer Section -->
