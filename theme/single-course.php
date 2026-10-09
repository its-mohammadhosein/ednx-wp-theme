<?php
/**
 * The template for displaying a single course
 *
 * Ported from the Edunex HTML template's `courses-details.html`. The
 * demo's "Overview"/"Curriculum"/"FAQs" tabs are all free-form marketing
 * copy in the source template, so that content lives in the post's real
 * editor content (the_content()) rather than hardcoded fields — only the
 * structural chrome around it (price box, meta, instructor, tags) uses the
 * `course` meta keys documented in inc/custom-post-types.php. Reviews
 * reuse the theme's standard WordPress comments rather than a dedicated
 * star-rating review system.
 *
 * @package tutorial
 */

get_header();

while ( have_posts() ) :
	the_post();

	$ednx_level         = ednx_meta( 'ednx_level' );
	$ednx_lessons       = ednx_meta( 'ednx_lessons' );
	$ednx_duration      = ednx_meta( 'ednx_duration' );
	$ednx_students      = ednx_meta( 'ednx_students' );
	$ednx_rating        = ednx_meta( 'ednx_rating' );
	$ednx_rating_count  = ednx_meta( 'ednx_rating_count' );
	$ednx_price         = ednx_meta( 'ednx_price' );
	$ednx_sale_price    = ednx_meta( 'ednx_sale_price' );
	$ednx_video_url     = ednx_meta( 'ednx_video_url' );
	$ednx_instructor_id = ednx_meta( 'ednx_instructor_id' );
	$ednx_includes_raw  = ednx_meta( 'ednx_includes' );
	$ednx_includes      = $ednx_includes_raw ? array_filter( array_map( 'trim', explode( "\n", $ednx_includes_raw ) ) ) : array();
	$ednx_categories    = get_the_terms( get_the_ID(), 'course_category' );
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
									<a href="<?php echo esc_url( get_post_type_archive_link( 'course' ) ); ?>"><?php esc_html_e( 'Courses', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Course details', 'ednx' ); ?></span>
								</span>
							</div>
							<?php if ( $ednx_categories && ! is_wp_error( $ednx_categories ) ) : ?>
								<div class="tj-categories">
									<a class="tj-cat" href="<?php echo esc_url( get_term_link( $ednx_categories[0] ) ); ?>"><?php echo esc_html( $ednx_categories[0]->name ); ?></a>
								</div>
							<?php endif; ?>
							<h1 class="tj-page-title"><?php the_title(); ?></h1>
							<?php if ( has_excerpt() ) : ?>
								<p class="tj-page-desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
							<?php endif; ?>
							<div class="course-meta">
								<?php if ( $ednx_rating ) : ?>
									<div class="single-rating">
										<i class="tji-star"></i>
										<span class="label"><?php echo esc_html( $ednx_rating ); ?><?php if ( $ednx_rating_count ) : ?><span>(<?php echo esc_html( $ednx_rating_count ); ?>)</span><?php endif; ?></span>
									</div>
								<?php endif; ?>
								<?php if ( $ednx_lessons ) : ?>
									<span><i class="tji-book"></i><?php echo esc_html( $ednx_lessons ); ?> <?php esc_html_e( 'Lesson', 'ednx' ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_duration ) : ?>
									<span><i class="tji-clock"></i><?php echo esc_html( $ednx_duration ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_students ) : ?>
									<span><i class="tji-user-duo"></i><?php echo esc_html( $ednx_students ); ?> <?php esc_html_e( 'Students', 'ednx' ); ?></span>
								<?php endif; ?>
								<?php if ( $ednx_level ) : ?>
									<span><i class="tji-layers"></i><?php echo esc_html( $ednx_level ); ?></span>
								<?php endif; ?>
							</div>
							<div class="tj-page-header-bottom">
								<?php if ( $ednx_instructor_id ) : ?>
									<div class="author-wrap">
										<div class="author-avatar">
											<?php echo get_avatar( $ednx_instructor_id, 56 ); ?>
										</div>
										<div class="author-info">
											<span class="designation"><?php esc_html_e( 'Created by', 'ednx' ); ?></span>
											<h3 class="name tj-fs-h6"><a href="<?php echo esc_url( get_permalink( $ednx_instructor_id ) ); ?>"><?php echo esc_html( get_the_title( $ednx_instructor_id ) ); ?></a></h3>
										</div>
									</div>
								<?php endif; ?>
								<div class="btn-area">
									<div class="tj-share-btn share-popup">
										<span class="btn-icon"><i class="tji-share"></i></span>
										<span class="btn-text"><?php esc_html_e( 'Share', 'ednx' ); ?></span>
										<div class="share-wrap">
											<div class="share-title"><?php esc_html_e( 'Share this course', 'ednx' ); ?></div>
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
									<a href="#" class="tj-wishlist-btn-2">
										<span class="btn-icon"><i class="tji-heart"></i></span>
										<span class="btn-text"><?php esc_html_e( 'Wishlist', 'ednx' ); ?></span>
									</a>
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
		<section class="tj-course-details-section section-gap-bottom">
			<div class="container">
				<div class="row rg-60">
					<div class="col-lg-8">
						<div class="tj-course-tab-wrap tj-sticky-item-2">
							<div class="tj-course-tab">
								<a class="tab-nav tj-scroll-btn" href="#overview"><?php esc_html_e( 'Overview', 'ednx' ); ?></a>
								<?php if ( $ednx_instructor_id ) : ?>
									<a class="tab-nav tj-scroll-btn" href="#instructor"><?php esc_html_e( 'Instructor', 'ednx' ); ?></a>
								<?php endif; ?>
								<?php if ( comments_open() || get_comments_number() ) : ?>
									<a class="tab-nav tj-scroll-btn" href="#reviews"><?php esc_html_e( 'Reviews', 'ednx' ); ?></a>
								<?php endif; ?>
							</div>
						</div>

						<div id="overview" class="tj-course-overview">
							<div <?php ednx_content_class( 'tutor-course-details-content' ); ?>>
								<?php the_content(); ?>
							</div>
						</div>

						<?php if ( $ednx_instructor_id ) : ?>
							<div id="instructor" class="tj-course-instructor">
								<h3 class="title"><?php esc_html_e( 'Instructor', 'ednx' ); ?></h3>
								<div class="category-item">
									<div class="cate-images"><?php echo get_avatar( $ednx_instructor_id, 72 ); ?></div>
									<div class="cate-text">
										<h6 class="title"><a href="<?php echo esc_url( get_permalink( $ednx_instructor_id ) ); ?>"><?php echo esc_html( get_the_title( $ednx_instructor_id ) ); ?></a></h6>
										<?php
										$ednx_instructor_designation = ednx_meta( 'ednx_designation', '', $ednx_instructor_id );
										if ( $ednx_instructor_designation ) :
											?>
											<span class="designation"><?php echo esc_html( $ednx_instructor_designation ); ?></span>
										<?php endif; ?>
									</div>
								</div>
								<?php
								$ednx_instructor_post = get_post( $ednx_instructor_id );
								if ( $ednx_instructor_post && has_excerpt( $ednx_instructor_post ) ) :
									?>
									<p><?php echo esc_html( get_the_excerpt( $ednx_instructor_post ) ); ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<?php if ( comments_open() || get_comments_number() ) : ?>
							<div id="reviews" class="tj-course-reviews">
								<?php comments_template(); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="col-lg-4">
						<div class="tj-course-sidebar">
							<div class="tj-course-thumb">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/course/course-img-4.webp" alt="<?php the_title_attribute(); ?>">
								<?php endif; ?>
								<?php if ( $ednx_video_url ) : ?>
									<a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px" href="<?php echo esc_url( $ednx_video_url ); ?>">
										<span><i class="tji-play"></i></span>
									</a>
								<?php endif; ?>
							</div>
							<div class="tj-course-widget-price">
								<div class="price-wrap">
									<div class="course-price tj-fs-h6">
										<?php echo $ednx_price ? esc_html( '$' . number_format_i18n( (float) $ednx_price, 2 ) ) : esc_html__( 'Free', 'ednx' ); ?>
										<?php if ( $ednx_sale_price ) : ?>
											<del><?php echo esc_html( '$' . number_format_i18n( (float) $ednx_sale_price, 2 ) ); ?></del>
										<?php endif; ?>
									</div>
									<?php if ( $ednx_price && $ednx_sale_price && $ednx_sale_price > $ednx_price ) : ?>
										<div class="discount-badge">
											<?php echo esc_html( round( ( 1 - ( $ednx_price / $ednx_sale_price ) ) * 100 ) . '% ' . __( 'off', 'ednx' ) ); ?>
										</div>
									<?php endif; ?>
								</div>
								<a class="tj-btn-primary tj-btn-primary-md tj-btn-full flip-text-wrap" href="#">
									<span class="btn-text"><?php esc_html_e( 'Start learning', 'ednx' ); ?></span>
									<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
								</a>
								<div class="guarantee-text"><i class="tji-guarantee"></i><?php esc_html_e( '30-day money-back guarantee', 'ednx' ); ?></div>
							</div>
							<?php if ( $ednx_includes ) : ?>
								<div class="tj-course-widget-list">
									<h3 class="course-widget-title"><?php esc_html_e( 'This course includes', 'ednx' ); ?></h3>
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
							<div class="tj-course-share">
								<div class="tj-share-btn share-popup">
									<span class="btn-icon"><i class="tji-share"></i></span>
									<span class="btn-text"><?php esc_html_e( 'Share this course', 'ednx' ); ?></span>
									<div class="share-wrap">
										<div class="share-title"><?php esc_html_e( 'Share this course', 'ednx' ); ?></div>
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
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Course Details Section -->

		<?php
		$ednx_related_args = array(
			'posts_per_page'      => 6,
			'post__not_in'        => array( get_the_ID() ),
			'ignore_sticky_posts' => true,
			'no_found_rows'       => true,
		);
		if ( $ednx_categories && ! is_wp_error( $ednx_categories ) ) {
			$ednx_related_args['tax_query'] = array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
				array(
					'taxonomy' => 'course_category',
					'field'    => 'term_id',
					'terms'    => wp_list_pluck( $ednx_categories, 'term_id' ),
				),
			);
		}
		$ednx_related_query = new WP_Query( $ednx_related_args );
		if ( $ednx_related_query->have_posts() ) :
			?>
			<!-- start: Course Section -->
			<section class="tj-course-section section-gap section-separator fix">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sec-heading">
								<span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i><?php esc_html_e( 'Keep learning', 'ednx' ); ?></span>
								<div class="sec-heading-inner">
									<h2 class="sec-title tj-fade-anim" data-delay="0.3"><?php esc_html_e( 'Related Courses.', 'ednx' ); ?></h2>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="tj__slider-wrapper">
								<div class="tj-course-slider swiper swiper-container tj-fade-anim" data-delay=".3">
									<div class="swiper-wrapper">
										<?php
										while ( $ednx_related_query->have_posts() ) :
											$ednx_related_query->the_post();
											?>
											<div class="swiper-slide">
												<?php get_template_part( 'template-parts/content/content-course-card' ); ?>
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
			<!-- end: Course Section -->
			<?php
		endif;
		?>
	</main>

	<?php
endwhile;

get_footer();
