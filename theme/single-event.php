<?php
/**
 * The template for displaying a single event
 *
 * Ported from the Edunex HTML template's `event-details.html`. The demo's
 * Overview/Agenda/Speakers/Venue/FAQ copy is free-form content, so it
 * lives in the_content() rather than hardcoded fields — only the
 * structural chrome (date, time, location, seats, host, includes) uses
 * the `event` meta keys documented in inc/custom-post-types.php. The
 * "early bird" discount badge, countdown and seat-progress bar from the
 * demo are simplified since they need several more niche meta fields for
 * what's a decorative flourish.
 *
 * @package tutorial
 */

get_header();

while ( have_posts() ) :
	the_post();

	$ednx_event_date      = ednx_meta( 'ednx_event_date' );
	$ednx_event_time      = ednx_meta( 'ednx_event_time' );
	$ednx_event_location  = ednx_meta( 'ednx_event_location' );
	$ednx_event_type      = ednx_meta( 'ednx_event_type' );
	$ednx_seats_left      = ednx_meta( 'ednx_seats_left' );
	$ednx_seats_total     = ednx_meta( 'ednx_seats_total' );
	$ednx_event_price     = ednx_meta( 'ednx_event_price' );
	$ednx_host_id         = ednx_meta( 'ednx_host_id' );
	$ednx_includes_raw    = ednx_meta( 'ednx_includes' );
	$ednx_includes        = $ednx_includes_raw ? array_filter( array_map( 'trim', explode( "\n", $ednx_includes_raw ) ) ) : array();
	$ednx_event_timestamp = $ednx_event_date ? strtotime( $ednx_event_date ) : false;
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
									<a href="<?php echo esc_url( get_post_type_archive_link( 'event' ) ); ?>"><?php esc_html_e( 'Events', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Event details', 'ednx' ); ?></span>
								</span>
							</div>
							<?php if ( $ednx_event_type ) : ?>
								<div class="tj-categories">
									<a class="tj-cat" href="<?php the_permalink(); ?>"><?php echo esc_html( $ednx_event_type ); ?></a>
								</div>
							<?php endif; ?>
							<h1 class="tj-page-title"><?php the_title(); ?></h1>
							<?php if ( has_excerpt() ) : ?>
								<p class="tj-page-desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
							<?php endif; ?>
							<div class="course-meta">
								<?php if ( $ednx_event_timestamp ) : ?>
									<span><i class="tji-calendar"></i><?php echo esc_html( date_i18n( 'M - d - Y', $ednx_event_timestamp ) ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_event_location ) : ?>
									<span><i class="tji-location"></i><?php echo esc_html( $ednx_event_location ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_event_time ) : ?>
									<span><i class="tji-clock"></i><?php echo esc_html( $ednx_event_time ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_seats_left ) : ?>
									<span><i class="tji-seat"></i><?php echo esc_html( $ednx_seats_left ); ?> <?php esc_html_e( 'seats left', 'ednx' ); ?></span>
								<?php endif; ?>
							</div>
							<div class="tj-page-header-bottom">
								<?php if ( $ednx_host_id ) : ?>
									<div class="author-wrap">
										<div class="author-avatar">
											<?php echo get_avatar( $ednx_host_id, 56 ); ?>
										</div>
										<div class="author-info">
											<span class="designation"><?php esc_html_e( 'Hosted by', 'ednx' ); ?></span>
											<h3 class="name tj-fs-h6"><a href="<?php echo esc_url( get_permalink( $ednx_host_id ) ); ?>"><?php echo esc_html( get_the_title( $ednx_host_id ) ); ?></a></h3>
										</div>
									</div>
								<?php endif; ?>
								<div class="tj-share-btn share-popup">
									<span class="btn-icon"><i class="tji-share"></i></span>
									<span class="btn-text"><?php esc_html_e( 'Share', 'ednx' ); ?></span>
									<div class="share-wrap">
										<div class="share-title"><?php esc_html_e( 'Share this event', 'ednx' ); ?></div>
										<ul class="tj-socials tj-socials-2">
											<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener"><i class="tji-facebook"></i></a></li>
											<li><a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&amp;text=<?php echo rawurlencode( get_the_title() ); ?>" target="_blank" rel="noopener"><i class="tji-x-twitter"></i></a></li>
											<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener"><i class="tji-linkedin"></i></a></li>
										</ul>
										<div class="tj-copy">
											<span class="copy-icon"><i class="tji-link"></i></span>
											<span class="copy-text"><span><?php echo esc_html( get_permalink() ); ?></span></span>
											<span class="copy-icon"><i class="tji-copy"></i></span>
											<span class="copy-tooltip"><?php esc_html_e( 'Copied!', 'ednx' ); ?></span>
										</div>
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

		<!-- start: Course Details Section -->
		<section class="tj-course-details section-gap-bottom fix tj-sticky-container-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="tj-course-details-wrapper tj-tab-sticky-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="tj-course-details-img">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>

							<div class="tj-course-tab-wrap tj-sticky-item-2">
								<div class="tj-course-tab">
									<a class="tab-nav tj-scroll-btn" href="#overview"><?php esc_html_e( 'Overview', 'ednx' ); ?></a>
								</div>
							</div>

							<div id="overview" class="tj-event-overview">
								<div <?php ednx_content_class( 'tutor-course-details-content' ); ?>>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="tj-sticky-item-2">
							<div class="tj-course-sidebar">
								<div class="tj-course-widget-price">
									<div class="price-wrap">
										<div class="course-price tj-fs-h6"><?php echo $ednx_event_price ? esc_html( '$' . number_format_i18n( (float) $ednx_event_price, 2 ) ) : esc_html__( 'Free', 'ednx' ); ?></div>
									</div>
									<?php if ( $ednx_seats_left && $ednx_seats_total ) : ?>
										<?php $ednx_seats_percent = min( 100, round( ( ( $ednx_seats_total - $ednx_seats_left ) / $ednx_seats_total ) * 100 ) ); ?>
										<div class="seat-booked-wrap">
											<div class="seat-booked-title-wrap">
												<span class="seat-booked-title">
													<?php
													printf(
														/* translators: 1: seats booked, 2: total seats */
														esc_html__( '%1$s of %2$s seats booked', 'ednx' ),
														esc_html( number_format_i18n( $ednx_seats_total - $ednx_seats_left ) ),
														esc_html( number_format_i18n( $ednx_seats_total ) )
													);
													?>
												</span>
												<span class="seat-booked-percent"><?php echo esc_html( $ednx_seats_percent ); ?>%</span>
											</div>
											<div class="seat-booked-progress-bar" style="--seat-progress-value: <?php echo esc_attr( $ednx_seats_percent ); ?>%">
												<span class="seat-booked-progress-value" aria-hidden="true"></span>
											</div>
										</div>
									<?php endif; ?>
									<a class="tj-btn-primary tj-btn-primary-md tj-btn-full flip-text-wrap" href="#">
										<span class="btn-text"><?php esc_html_e( 'Book seat now', 'ednx' ); ?></span>
										<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
									</a>
								</div>
								<?php if ( $ednx_includes ) : ?>
									<div class="tj-course-widget-list">
										<h3 class="course-widget-title"><?php esc_html_e( 'This event includes', 'ednx' ); ?></h3>
										<div class="tj-course-widget-list-inner">
											<?php foreach ( $ednx_includes as $ednx_include ) : ?>
												<div class="tj-course-widget-list-item">
													<span class="icon"><i class="tji-check"></i></span>
													<span class="text"><?php echo esc_html( $ednx_include ); ?></span>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Course Details Section -->

		<?php
		$ednx_related_events = new WP_Query(
			array(
				'post_type'           => 'event',
				'posts_per_page'      => 6,
				'post__not_in'        => array( get_the_ID() ),
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
				'meta_key'            => 'ednx_event_date', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
				'orderby'             => 'meta_value',
				'order'               => 'ASC',
			)
		);
		if ( $ednx_related_events->have_posts() ) :
			?>
			<!-- start: Event Section -->
			<section class="related-event-section section-gap section-separator fix">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sec-heading">
								<span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i><?php esc_html_e( 'Keep learning', 'ednx' ); ?></span>
								<div class="sec-heading-inner">
									<h2 class="sec-title tj-fade-anim" data-delay="0.3"><?php esc_html_e( 'Related Events.', 'ednx' ); ?></h2>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="tj__slider-wrapper">
								<div class="tj-event-slider swiper swiper-container tj-fade-anim" data-delay=".3">
									<div class="swiper-wrapper">
										<?php
										while ( $ednx_related_events->have_posts() ) :
											$ednx_related_events->the_post();
											?>
											<div class="swiper-slide">
												<?php get_template_part( 'template-parts/content/content-event-card' ); ?>
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
			<!-- end: Event Section -->
			<?php
		endif;
		?>
	</main>

	<?php
endwhile;

get_footer();
