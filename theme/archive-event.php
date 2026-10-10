<?php
/**
 * The template for displaying the events archive
 *
 * Ported from the Edunex HTML template's `event.html`. The sidebar is
 * trimmed to search + an "Upcoming events" widget — the demo's
 * Categories/Tags widgets there are reused boilerplate from the blog
 * sidebar and don't map to anything event-specific.
 *
 * @package tutorial
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="tj-page-header-content">
							<h1 class="tj-page-title"><?php post_type_archive_title(); ?></h1>
							<div class="tj-page-link">
								<span><i class="tji-home"></i></span>
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Events', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Event Section -->
		<section class="tj-event-section-2 section-gap-bottom fix">
			<div class="container">
				<div class="row rg-50">
					<div class="col-lg-8">
						<?php if ( have_posts() ) : ?>
							<div class="row rg-30">
								<?php
								while ( have_posts() ) :
									the_post();
									?>
									<div class="col-md-6">
										<?php get_template_part( 'template-parts/content/content-event-card' ); ?>
									</div>
									<?php
								endwhile;
								?>
							</div>

							<?php
							$ednx_pagination_links = paginate_links(
								array(
									'mid_size'  => 1,
									'prev_text' => '<i class="tji-arrow-left-3"></i>',
									'next_text' => '<i class="tji-arrow-right-3"></i>',
									'type'      => 'array',
								)
							);
							if ( $ednx_pagination_links ) :
								?>
								<div class="tj-pagination">
									<?php echo wp_kses_post( implode( '', $ednx_pagination_links ) ); ?>
								</div>
								<?php
							endif;
							?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
						<?php endif; ?>
					</div>
					<div class="col-lg-4">
						<div class="tj_wpost_sidebar">
							<div class="tj_wpost_widget tj_widget_search tj-fade-anim">
								<h4 class="widget_title"><?php esc_html_e( 'Search here', 'ednx' ); ?></h4>
								<form action="<?php echo esc_url( get_post_type_archive_link( 'event' ) ); ?>" method="get" class="search-box">
									<input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search...', 'ednx' ); ?>">
									<input type="hidden" name="post_type" value="event">
									<button type="submit" value="search"><i class="tji-search"></i></button>
								</form>
							</div>

							<?php
							$ednx_upcoming_events = new WP_Query(
								array(
									'post_type'           => 'event',
									'posts_per_page'       => 3,
									'ignore_sticky_posts'  => true,
									'no_found_rows'        => true,
									'meta_key'             => 'ednx_event_date', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
									'orderby'              => 'meta_value',
									'order'                => 'ASC',
								)
							);
							if ( $ednx_upcoming_events->have_posts() ) :
								?>
								<div class="tj_wpost_widget tj_related_events tj-fade-anim">
									<h4 class="widget_title"><?php esc_html_e( 'Upcoming events', 'ednx' ); ?></h4>
									<ul>
										<?php
										while ( $ednx_upcoming_events->have_posts() ) :
											$ednx_upcoming_events->the_post();
											$ednx_event_date      = ednx_meta( 'ednx_event_date' );
											$ednx_event_time      = ednx_meta( 'ednx_event_time' );
											$ednx_event_timestamp = $ednx_event_date ? strtotime( $ednx_event_date ) : false;
											?>
											<li>
												<?php if ( $ednx_event_timestamp ) : ?>
													<div class="event-date">
														<span class="date"><?php echo esc_html( date_i18n( 'd', $ednx_event_timestamp ) ); ?></span>
														<span class="month"><?php echo esc_html( date_i18n( 'M', $ednx_event_timestamp ) ); ?></span>
													</div>
												<?php endif; ?>
												<div class="event-content">
													<h6 class="event-title">
														<a href="<?php the_permalink(); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), 6 ) ); ?></a>
													</h6>
													<?php if ( $ednx_event_timestamp || $ednx_event_time ) : ?>
														<div class="event-meta">
															<span>
																<?php
																echo esc_html(
																	trim(
																		( $ednx_event_timestamp ? date_i18n( 'D', $ednx_event_timestamp ) . ' • ' : '' ) . $ednx_event_time
																	)
																);
																?>
															</span>
														</div>
													<?php endif; ?>
												</div>
											</li>
											<?php
										endwhile;
										wp_reset_postdata();
										?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Event Section -->
	</main>

<?php
get_footer();
