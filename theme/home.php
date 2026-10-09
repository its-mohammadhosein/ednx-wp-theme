<?php
/**
 * The template for displaying the blog index
 *
 * Ported from the Edunex HTML template's `blog.html`. Used when Settings >
 * Reading has "Your homepage displays" set to "Your latest posts", or when
 * a static front page is set and this becomes the dedicated posts page.
 *
 * @package tutorial
 */

get_header();

$ednx_featured_query = new WP_Query(
	array(
		'posts_per_page'      => 3,
		'no_found_rows'       => true,
		'ignore_sticky_posts' => true,
	)
);
?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-page-header-content">
							<h1 class="tj-page-title"><?php esc_html_e( 'Latest Blogs', 'ednx' ); ?></h1>
							<div class="tj-page-link">
								<span><i class="tji-home"></i></span>
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Blog', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
					<?php if ( $ednx_featured_query->have_posts() ) : ?>
						<div class="col-12 inner-gap-top">
							<div class="tj-blog-wrap tj-fade-anim">
								<?php
								while ( $ednx_featured_query->have_posts() ) :
									$ednx_featured_query->the_post();
									get_template_part( 'template-parts/content/content-blog-card' );
								endwhile;
								wp_reset_postdata();
								?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Blog Section -->
		<section class="tj-blog-section section-gap-bottom fix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="sec-heading sec-heading-center">
							<span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i><?php esc_html_e( 'Latest blogs', 'ednx' ); ?></span>
							<h2 class="sec-title tj-fade-anim"><?php esc_html_e( 'Explore Latest Blog and Insights.', 'ednx' ); ?></h2>
						</div>
						<?php
						$ednx_blog_categories = get_categories( array( 'hide_empty' => true ) );
						if ( $ednx_blog_categories ) :
							?>
							<div class="tj-filter-btn-wrap">
								<div class="tj_filter_btn_group">
									<button data-filter="*" class="tj_filter_btn active">
										<span><?php esc_html_e( 'All', 'ednx' ); ?></span>
									</button>
									<?php foreach ( $ednx_blog_categories as $ednx_category ) : ?>
										<button data-filter=".<?php echo esc_attr( $ednx_category->slug ); ?>" class="tj_filter_btn">
											<span><?php echo esc_html( $ednx_category->name ); ?></span>
										</button>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<?php if ( have_posts() ) : ?>
					<div class="row tj-course-filter tj_filter_item_wrapper tj-fade-anim">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part(
								'template-parts/content/content-blog-card',
								null,
								array(
									'show_excerpt' => true,
									'grid_item'    => true,
								)
							);
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
						<div class="tj-pagination justify-content-center tj-fade-anim">
							<?php echo wp_kses_post( implode( '', $ednx_pagination_links ) ); ?>
						</div>
						<?php
					endif;
					?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</section>
		<!-- end: Blog Section -->
	</main>

<?php
get_footer();
