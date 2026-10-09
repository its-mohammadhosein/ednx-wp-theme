<?php
/**
 * The template for displaying the instructors archive
 *
 * Ported from the Edunex HTML template's `instructor.html`. The filter
 * sidebar (expertise checkboxes, rate slider, rating) is left decorative,
 * matching the source template — the search box is wired to a real search
 * against the `instructor` post type.
 *
 * @package tutorial
 */

global $wp_query;

get_header();
?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-page-header-content">
							<h1 class="tj-page-title"><?php post_type_archive_title(); ?></h1>
							<div class="tj-page-link">
								<span><i class="tji-home"></i></span>
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Instructor', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Course Section -->
		<section class="tj-course-section section-gap-bottom fix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-course-filter-wrap">
							<div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
								<div class="tj-show-results">
									<span class="course-show">
										<?php
										printf(
											/* translators: %s: number of instructors found */
											esc_html( _n( 'Showing %s instructor', 'Showing %s instructors', $wp_query->found_posts, 'ednx' ) ),
											'<strong>' . esc_html( number_format_i18n( $wp_query->found_posts ) ) . '</strong>'
										);
										?>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-lg-row flex-column-reverse">
					<div class="col-xl-3 col-lg-4">
						<div class="tj-filter-sidebar">
							<div class="filter-sidebar-top">
								<div class="filter-title">
									<span><i class="tji-filter"></i></span><?php esc_html_e( 'Filter', 'ednx' ); ?>
								</div>
							</div>
							<div class="tj-filter-widget tj-filter-widget-search">
								<div class="search-box">
									<form action="<?php echo esc_url( get_post_type_archive_link( 'instructor' ) ); ?>" method="get">
										<input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search filter...', 'ednx' ); ?>">
										<input type="hidden" name="post_type" value="instructor">
										<button type="submit" value="search"><i class="tji-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<?php if ( have_posts() ) : ?>
							<div class="row rg-30">
								<?php
								while ( have_posts() ) :
									the_post();
									?>
									<div class="col-xl-4 col-sm-6">
										<?php get_template_part( 'template-parts/content/content-instructor-card' ); ?>
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
								<div class="row">
									<div class="col-12">
										<div class="course-pagination-area d-flex flex-wrap align-items-center justify-content-between tj-fade-anim gap-3">
											<div class="tj-pagination">
												<?php echo wp_kses_post( implode( '', $ednx_pagination_links ) ); ?>
											</div>
										</div>
									</div>
								</div>
								<?php
							endif;
							?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Course Section -->
	</main>

<?php
get_footer();
