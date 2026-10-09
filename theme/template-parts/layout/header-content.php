<?php
/**
 * Template part for displaying the header content
 *
 * Ported from the Edunex HTML template's main header and sticky duplicate
 * header. The sticky header is a visual duplicate shown/hidden on scroll by
 * `assets/js/main.js` — both share the same primary navigation menu via
 * `ednx_primary_nav()`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tutorial
 */

?>

<!-- start: Header Area -->
<header id="masthead" class="header-area header-1 header-fixed">
	<div class="header-top d-lg-block d-none">
		<div class="bg-noise"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header-top-content">
						<div class="countdown" data-date="2026-12-30 12:00:00" data-day_label="d" data-min_label="m"
							data-hour_label="h" data-sec_label="s">
							<div class="countdown-container days">
								<span class="countdown-value">00</span>
								<span class="countdown-heading">d</span>
							</div>

							<span class="divider">:</span>

							<div class="countdown-container hours">
								<span class="countdown-value">00</span>
								<span class="countdown-heading">h</span>
							</div>

							<span class="divider">:</span>

							<div class="countdown-container minutes">
								<span class="countdown-value">00</span>
								<span class="countdown-heading">m</span>
							</div>

							<span class="divider">:</span>

							<div class="countdown-container seconds">
								<span class="countdown-value">00</span>
								<span class="countdown-heading">s</span>
							</div>
						</div>
						<p class="topbar-text"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/fire.svg" alt="">ENDS SATURDAY &bull; Get 50% Off annual Pro membership</p>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Claim offer', 'ednx' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="topbar-close">
			<button class="close-btn">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17 1L1 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M1 1L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header-wrapper">
						<!-- site logo -->
						<div class="site_logo">
							<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo.png" alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</div>

						<!-- navigation -->
						<div class="menu-area d-none d-lg-inline-flex align-items-center">
							<?php ednx_primary_nav( true ); ?>
						</div>

						<!-- header right info -->
						<div class="header-right-item d-inline-flex">
							<div class="header-search-box d-lg-block d-none">
								<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<button type="submit"><i class="tji-search"></i></button>
									<input type="search" autocomplete="off" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search for here...', 'ednx' ); ?>">
								</form>
							</div>
							<div class="header-cart">
								<a class="cart-btn" href="<?php echo esc_url( home_url( '/cart' ) ); ?>">
									<i class="tji-cart-bag"></i>
									<span class="cart-count">02</span>
								</a>
							</div>
							<div class="header-user d-lg-none">
								<a class="user-btn" href="<?php echo esc_url( wp_login_url() ); ?>">
									<i class="tji-user"></i>
								</a>
							</div>
							<div class="header-button d-xl-flex d-none">
								<a class="tj-btn-primary tj-btn-primary-border tj-btn-primary-border-sm flip-text-wrap" href="<?php echo esc_url( wp_login_url() ); ?>">
									<span class="btn-text"><?php esc_html_e( 'Log in', 'ednx' ); ?></span>
								</a>
								<a class="tj-btn-primary tj-btn-primary-sm flip-text-wrap" href="<?php echo esc_url( wp_registration_url() ); ?>">
									<span class="btn-text"><?php esc_html_e( 'Sign in', 'ednx' ); ?></span>
								</a>
							</div>
						</div>

						<!-- menu bar -->
						<button class="menu_btn mobile_menu_bar d-lg-none" aria-controls="mobile-menu" aria-expanded="false">
							<span class="bars">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- end: Header Area -->

<!-- start: Sticky Header Area -->
<header class="header-area header-1 header-duplicate header-sticky">
	<div class="header-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header-wrapper">
						<!-- site logo -->
						<div class="site_logo">
							<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo.png" alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</div>

						<!-- navigation -->
						<div class="menu-area d-none d-lg-inline-flex align-items-center">
							<?php ednx_primary_nav( false ); ?>
						</div>

						<!-- header right info -->
						<div class="header-right-item d-inline-flex">
							<div class="header-search-box d-lg-block d-none">
								<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<button type="submit"><i class="tji-search"></i></button>
									<input type="search" autocomplete="off" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search for here...', 'ednx' ); ?>">
								</form>
							</div>
							<div class="header-cart">
								<a class="cart-btn" href="<?php echo esc_url( home_url( '/cart' ) ); ?>">
									<i class="tji-cart-bag"></i>
									<span class="cart-count">02</span>
								</a>
							</div>
							<div class="header-user d-lg-none">
								<a class="user-btn" href="<?php echo esc_url( wp_login_url() ); ?>">
									<i class="tji-user"></i>
								</a>
							</div>
							<div class="header-button d-xl-flex d-none">
								<a class="tj-btn-primary tj-btn-primary-border tj-btn-primary-border-sm flip-text-wrap" href="<?php echo esc_url( wp_login_url() ); ?>">
									<span class="btn-text"><?php esc_html_e( 'Log in', 'ednx' ); ?></span>
								</a>
								<a class="tj-btn-primary tj-btn-primary-sm flip-text-wrap" href="<?php echo esc_url( wp_registration_url() ); ?>">
									<span class="btn-text"><?php esc_html_e( 'Sign in', 'ednx' ); ?></span>
								</a>
							</div>
						</div>

						<!-- menu bar -->
						<button class="menu_btn mobile_menu_bar d-lg-none" aria-controls="mobile-menu" aria-expanded="false">
							<span class="bars">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- end: Sticky Header Area -->
