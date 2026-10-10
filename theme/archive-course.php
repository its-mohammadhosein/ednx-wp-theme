<?php
/**
 * The template for displaying the courses archive
 *
 * Ported from the Edunex HTML template's `courses.html`. The multi-select
 * filter bar (price/level/rating/instructor) is left decorative, matching
 * the source template (no backend logic there either) — the search box is
 * wired to a real search against the `course` post type.
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
									<span><?php esc_html_e( 'Courses', 'ednx' ); ?></span>
								</span>
							</div>
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
							<div class="tj-top-filter">
								<div class="tj-filter-widget">
									<div class="search-box">
										<form action="<?php echo esc_url( home_url( '/courses' ) ); ?>" method="get">
											<input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search course, topic, instructor...', 'ednx' ); ?>">
											<input type="hidden" name="post_type" value="course">
											<button type="submit" value="search"><i class="tji-search"></i></button>
										</form>
									</div>
								</div>
								<div class="tj-filter-widget">
									<div class="tj-select">
										<select>
											<option><?php esc_html_e( 'Categories', 'ednx' ); ?></option>
											<?php foreach ( get_terms( array( 'taxonomy' => 'course_category', 'hide_empty' => false ) ) as $ednx_cat ) : ?>
												<option><?php echo esc_html( $ednx_cat->name ); ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="tj-filter-widget">
									<div class="tj-select">
										<select>
											<option><?php esc_html_e( 'Prices', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'All', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'Free', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'Paid', 'ednx' ); ?></option>
										</select>
									</div>
								</div>
								<div class="tj-filter-widget">
									<div class="tj-select">
										<select>
											<option><?php esc_html_e( 'Levels', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'All Levels', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'Beginner', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'Intermediate', 'ednx' ); ?></option>
											<option><?php esc_html_e( 'Expert', 'ednx' ); ?></option>
										</select>
									</div>
								</div>
								<div class="tj-filter-widget">
									<div class="filter-reset">
										<button type="button" class="tj-reset"><i class="tji-reset"></i><?php esc_html_e( 'Reset filters', 'ednx' ); ?></button>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
								<div class="tj-show-results">
									<span class="course-show">
										<?php
										printf(
											/* translators: %s: number of courses found */
											esc_html( _n( 'Showing %s course', 'Showing %s courses', $wp_query->found_posts, 'ednx' ) ),
											'<strong>' . esc_html( number_format_i18n( $wp_query->found_posts ) ) . '</strong>'
										);
										?>
									</span>
								</div>
							</div>
						</div>
					</div>

					<?php if ( have_posts() ) : ?>
						<div class="col-12">
							<div class="row tj-course-wrapper rg-30">
								<?php
								while ( have_posts() ) :
									the_post();
									?>
									<div class="col-lg-4 col-md-6 course-col">
										<?php get_template_part( 'template-parts/content/content-course-card' ); ?>
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
										<div class="course-pagination-area d-flex align-items-center justify-content-between tj-fade-anim flex-wrap gap-3">
											<div class="tj-pagination">
												<?php echo wp_kses_post( implode( '', $ednx_pagination_links ) ); ?>
											</div>
										</div>
									</div>
								</div>
								<?php
							endif;
							?>
						</div>
					<?php else : ?>
						<div class="col-12">
							<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<!-- end: Course Section -->
	</main>

<?php
get_footer();
