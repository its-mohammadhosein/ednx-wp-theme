<?php
/**
 * The template for displaying a single instructor
 *
 * Ported from the Edunex HTML template's `instructor-details.html`. The
 * demo's "About"/"Experience" copy is free-form bio content, so it lives
 * in the post's real editor content (the_content()) rather than hardcoded
 * fields — only the structural chrome (rate, rating, sessions, socials)
 * uses the `instructor` meta keys documented in
 * inc/custom-post-types.php. "Courses by [instructor]" queries real
 * `course` posts linked via their ednx_instructor_id meta. Reviews reuse
 * the theme's standard WordPress comments.
 *
 * @package tutorial
 */

get_header();

while ( have_posts() ) :
	the_post();

	$ednx_instructor_id  = get_the_ID();
	$ednx_designation    = ednx_meta( 'ednx_designation' );
	$ednx_rating         = ednx_meta( 'ednx_rating' );
	$ednx_sessions       = ednx_meta( 'ednx_sessions' );
	$ednx_rate_per_hour  = ednx_meta( 'ednx_rate_per_hour' );
	$ednx_response_rate  = ednx_meta( 'ednx_response_rate' );
	$ednx_response_time  = ednx_meta( 'ednx_response_time' );
	$ednx_socials        = array(
		'facebook'  => array( 'icon' => 'tji-facebook', 'url' => ednx_meta( 'ednx_social_facebook' ) ),
		'instagram' => array( 'icon' => 'tji-instagram', 'url' => ednx_meta( 'ednx_social_instagram' ) ),
		'x'         => array( 'icon' => 'tji-x-twitter', 'url' => ednx_meta( 'ednx_social_x' ) ),
		'linkedin'  => array( 'icon' => 'tji-linkedin', 'url' => ednx_meta( 'ednx_social_linkedin' ) ),
	);
	?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header tj-page-header-2">
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
									<a href="<?php echo esc_url( get_post_type_archive_link( 'instructor' ) ); ?>"><?php esc_html_e( 'Instructor', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Instructor details', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="tj-page-header-instructor">
								<div class="tj-instructor-img">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium' ); ?>
									<?php else : ?>
										<?php echo get_avatar( get_the_ID(), 160 ); ?>
									<?php endif; ?>
								</div>
								<div class="tj-instructor-content">
									<div class="name-area">
										<h1 class="name tj-fs-h2"><?php the_title(); ?></h1>
										<?php if ( $ednx_designation ) : ?>
											<span class="designation"><?php echo esc_html( $ednx_designation ); ?></span>
										<?php endif; ?>
									</div>
									<div class="course-meta">
										<?php if ( $ednx_rating ) : ?>
											<div class="single-rating">
												<i class="tji-star"></i>
												<span class="label"><?php echo esc_html( $ednx_rating ); ?></span>
											</div>
										<?php endif; ?>
										<?php if ( $ednx_sessions ) : ?>
											<span><i class="tji-book"></i><?php echo esc_html( $ednx_sessions ); ?> <?php esc_html_e( 'sessions', 'ednx' ); ?></span>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Instructor Details Section -->
		<section class="tj-details section-gap-bottom fix tj-sticky-container-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="tj-course-details-wrapper tj-tab-sticky-wrapper">
							<div class="tj-course-tab-wrap tj-sticky-item-2">
								<div class="tj-course-tab">
									<a class="tab-nav tj-scroll-btn" href="#about"><?php esc_html_e( 'About', 'ednx' ); ?></a>
									<a class="tab-nav tj-scroll-btn" href="#courses"><?php esc_html_e( 'Courses', 'ednx' ); ?></a>
									<?php if ( comments_open() || get_comments_number() ) : ?>
										<a class="tab-nav tj-scroll-btn" href="#reviews"><?php esc_html_e( 'Reviews', 'ednx' ); ?></a>
									<?php endif; ?>
								</div>
							</div>

							<div id="about" class="tj-instructor-about">
								<div <?php ednx_content_class(); ?>>
									<?php the_content(); ?>
								</div>
							</div>

							<?php
							$ednx_instructor_courses = new WP_Query(
								array(
									'post_type'           => 'course',
									'posts_per_page'       => 6,
									'ignore_sticky_posts'  => true,
									'no_found_rows'        => true,
									'meta_key'             => 'ednx_instructor_id', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
									'meta_value'           => $ednx_instructor_id, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
								)
							);
							if ( $ednx_instructor_courses->have_posts() ) :
								?>
								<div id="courses" class="tj-instructor-courses">
									<h3 class="title">
										<?php
										printf(
											/* translators: %s: instructor name */
											esc_html__( 'Courses by %s', 'ednx' ),
											esc_html( get_the_title() )
										);
										?>
									</h3>
									<div class="row rg-20">
										<?php
										while ( $ednx_instructor_courses->have_posts() ) :
											$ednx_instructor_courses->the_post();
											?>
											<div class="col-md-6">
												<?php get_template_part( 'template-parts/content/content-course-card' ); ?>
											</div>
											<?php
										endwhile;
										wp_reset_postdata();
										?>
									</div>
								</div>
							<?php endif; ?>

							<?php if ( comments_open() || get_comments_number() ) : ?>
								<div id="reviews" class="tj-course-reviews">
									<h3 class="title"><?php esc_html_e( 'Student reviews', 'ednx' ); ?></h3>
									<?php comments_template(); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="tj-sticky-item-2">
							<div class="tj-course-sidebar">
								<div class="tj-course-widget-price">
									<?php if ( $ednx_rate_per_hour ) : ?>
										<div class="price-wrap">
											<div class="course-price tj-fs-h6"><?php echo esc_html( '$' . number_format_i18n( (float) $ednx_rate_per_hour, 2 ) . '/h' ); ?></div>
										</div>
									<?php endif; ?>
									<?php if ( $ednx_rating || $ednx_sessions || $ednx_response_rate || $ednx_response_time ) : ?>
										<div class="tj-instructor-info">
											<?php if ( $ednx_rating ) : ?>
												<div class="info-item">
													<div class="single-rating">
														<i class="tji-star"></i>
														<span class="label"><?php echo esc_html( $ednx_rating ); ?></span>
													</div>
													<span class="text"><?php esc_html_e( 'Rating', 'ednx' ); ?></span>
												</div>
											<?php endif; ?>
											<?php if ( $ednx_sessions ) : ?>
												<div class="info-item">
													<span class="title"><?php echo esc_html( $ednx_sessions ); ?></span>
													<span class="text"><?php esc_html_e( 'Sessions', 'ednx' ); ?></span>
												</div>
											<?php endif; ?>
											<?php if ( $ednx_response_rate ) : ?>
												<div class="info-item">
													<span class="title"><?php echo esc_html( $ednx_response_rate ); ?></span>
													<span class="text"><?php esc_html_e( 'Response', 'ednx' ); ?></span>
												</div>
											<?php endif; ?>
											<?php if ( $ednx_response_time ) : ?>
												<div class="info-item">
													<span class="title"><?php echo wp_kses( $ednx_response_time, array() ); ?></span>
													<span class="text"><?php esc_html_e( 'Replies in', 'ednx' ); ?></span>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									<a class="tj-btn-primary tj-btn-primary-md tj-btn-full flip-text-wrap" href="#">
										<span class="btn-text"><?php esc_html_e( 'Book session', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
								</div>
								<?php
								$ednx_has_socials = array_filter( wp_list_pluck( $ednx_socials, 'url' ) );
								if ( $ednx_has_socials ) :
									?>
									<div class="tj-course-share">
										<h3 class="course-widget-title"><?php esc_html_e( 'Connect social', 'ednx' ); ?></h3>
										<ul class="tj-socials tj-socials-2">
											<?php foreach ( $ednx_socials as $ednx_social ) : ?>
												<?php if ( $ednx_social['url'] ) : ?>
													<li><a href="<?php echo esc_url( $ednx_social['url'] ); ?>" target="_blank" rel="noopener"><i class="<?php echo esc_attr( $ednx_social['icon'] ); ?>"></i></a></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Instructor Details Section -->

		<?php
		$ednx_similar_query = new WP_Query(
			array(
				'post_type'           => 'instructor',
				'posts_per_page'      => 6,
				'post__not_in'        => array( $ednx_instructor_id ),
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
			)
		);
		if ( $ednx_similar_query->have_posts() ) :
			?>
			<!-- start: Instructor Section -->
			<section class="tj-instructor-section section-gap section-separator fix">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sec-heading">
								<span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i><?php esc_html_e( 'Keep learning', 'ednx' ); ?></span>
								<div class="sec-heading-inner">
									<h2 class="sec-title tj-fade-anim" data-delay="0.3"><?php esc_html_e( 'Similar instructors.', 'ednx' ); ?></h2>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="tj__slider-wrapper">
								<div class="tj-instructor-slider-2 swiper swiper-container tj-fade-anim" data-delay=".3">
									<div class="swiper-wrapper">
										<?php
										while ( $ednx_similar_query->have_posts() ) :
											$ednx_similar_query->the_post();
											?>
											<div class="swiper-slide">
												<?php get_template_part( 'template-parts/content/content-instructor-card' ); ?>
											</div>
											<?php
										endwhile;
										wp_reset_postdata();
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end: Instructor Section -->
			<?php
		endif;
		?>
	</main>

	<?php
endwhile;

get_footer();
