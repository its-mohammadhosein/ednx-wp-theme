<?php
/**
 * The template for displaying all single blog posts
 *
 * Ported from the Edunex HTML template's `blog-details.html`. The body
 * content, tags, author/date/comment-count meta, post navigation and
 * comments all come from real post data rather than the demo's hardcoded
 * text. Comment markup uses the theme's default `comments.php` (see
 * `ednx_html5_comment()` in inc/template-functions.php) rather than a
 * pixel match of the demo's custom comment markup.
 *
 * @package tutorial
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

	<main id="primary" class="site-main">

		<div class="space-for-header"></div>
		<!-- start: Page Header Section -->
		<section class="tj-page-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tj-page-header-content">
							<h1 class="tj-page-title"><?php esc_html_e( 'Blog Details', 'ednx' ); ?></h1>
							<div class="tj-page-link">
								<span><i class="tji-home"></i></span>
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Blog', 'ednx' ); ?></a>
								</span>
								<span><i class="tji-arrow-right-4"></i></span>
								<span>
									<span><?php esc_html_e( 'Blog Details', 'ednx' ); ?></span>
								</span>
							</div>
							<div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Page Header Section -->

		<!-- start: Blog Section -->
		<section class="tj-blog-section section-gap-bottom">
			<div class="container">
				<div class="row rg-60">
					<div class="col-lg-8">
						<div class="tj_wpost_wrapper">
							<article <?php post_class( 'tj_wpost_singular' ); ?>>
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="tj_wpost_thumb tj-fade-anim">
										<?php the_post_thumbnail( 'large' ); ?>
									</div>
								<?php endif; ?>

								<h2 class="tj_wpost_title"><?php the_title(); ?></h2>

								<div class="blog-category-two tj-fade-anim">
									<div class="category-item">
										<div class="cate-images">
											<?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
										</div>
										<div class="cate-text">
											<span class="designation"><?php esc_html_e( 'Authored by', 'ednx' ); ?></span>
											<h6 class="title"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></h6>
										</div>
									</div>
									<div class="category-item">
										<div class="cate-icons">
											<i class="tji-calendar-2"></i>
										</div>
										<div class="cate-text">
											<span class="designation"><?php esc_html_e( 'Date Released', 'ednx' ); ?></span>
											<h6 class="text"><?php echo esc_html( get_the_date() ); ?></h6>
										</div>
									</div>
									<div class="category-item">
										<div class="cate-icons">
											<i class="tji-comment"></i>
										</div>
										<div class="cate-text">
											<span class="designation"><?php esc_html_e( 'Comments', 'ednx' ); ?></span>
											<h6 class="text"><?php echo esc_html( get_comments_number() ); ?></h6>
										</div>
									</div>
								</div>

								<div class="tj_wpost_entry_content">
									<?php the_content(); ?>
								</div>

								<?php
								$ednx_tags = get_the_tags();
								if ( $ednx_tags ) :
									?>
									<div class="tj_wpost_tags_share tj-fade-anim">
										<div class="tagcloud">
											<span><?php esc_html_e( 'Tags:', 'ednx' ); ?></span>
											<?php foreach ( $ednx_tags as $ednx_tag ) : ?>
												<a href="<?php echo esc_url( get_tag_link( $ednx_tag ) ); ?>"><?php echo esc_html( $ednx_tag->name ); ?></a>
											<?php endforeach; ?>
										</div>
										<div class="tj_social_share">
											<span><?php esc_html_e( 'Share:', 'ednx' ); ?></span>
											<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener"><i class="tji-facebook"></i></a>
											<a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&amp;text=<?php echo rawurlencode( get_the_title() ); ?>" target="_blank" rel="noopener"><i class="tji-x-twitter"></i></a>
											<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener"><i class="tji-linkedin"></i></a>
										</div>
									</div>
								<?php endif; ?>

								<div class="tj_wpost_navigation tj-fade-anim">
									<div class="tj_prev">
										<?php
										previous_post_link(
											'%link',
											'<span class="navigation_icon"><i class="tji-arrow-left-4"></i></span><span class="navigation_text">' . esc_html__( 'Previous', 'ednx' ) . '</span>',
											true
										);
										?>
									</div>
									<div class="navigation_home">
										<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><i class="tji-grid"></i></a>
									</div>
									<div class="tj_next">
										<?php
										next_post_link(
											'%link',
											'<span class="navigation_text">' . esc_html__( 'Next', 'ednx' ) . '</span><span class="navigation_icon"><i class="tji-arrow-right-4"></i></span>',
											true
										);
										?>
									</div>
								</div>
							</article>

							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tj_wpost_sidebar">
							<div class="tj_wpost_widget tj_widget_search tj-fade-anim">
								<h4 class="widget_title"><?php esc_html_e( 'Search here', 'ednx' ); ?></h4>
								<?php get_search_form(); ?>
							</div>

							<?php
							$ednx_sidebar_categories = get_categories( array( 'hide_empty' => true ) );
							if ( $ednx_sidebar_categories ) :
								?>
								<div class="tj_wpost_widget tj_widget_categories tj-fade-anim">
									<h4 class="widget_title"><?php esc_html_e( 'Categories', 'ednx' ); ?></h4>
									<ul>
										<?php foreach ( $ednx_sidebar_categories as $ednx_sidebar_category ) : ?>
											<li>
												<a href="<?php echo esc_url( get_category_link( $ednx_sidebar_category ) ); ?>">
													<?php echo esc_html( $ednx_sidebar_category->name ); ?>
													<span class="number">(<?php echo esc_html( $ednx_sidebar_category->count ); ?>)</span>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>

							<?php
							$ednx_related_query = new WP_Query(
								array(
									'posts_per_page'      => 3,
									'post__not_in'        => array( get_the_ID() ),
									'ignore_sticky_posts'  => true,
									'no_found_rows'        => true,
									'category__in'         => wp_get_post_categories( get_the_ID() ),
								)
							);
							if ( ! $ednx_related_query->have_posts() ) {
								$ednx_related_query = new WP_Query(
									array(
										'posts_per_page'      => 3,
										'post__not_in'        => array( get_the_ID() ),
										'ignore_sticky_posts'  => true,
										'no_found_rows'        => true,
									)
								);
							}
							if ( $ednx_related_query->have_posts() ) :
								?>
								<div class="tj_wpost_widget tj_recent_posts tj-fade-anim">
									<h4 class="widget_title"><?php esc_html_e( 'Related post', 'ednx' ); ?></h4>
									<ul>
										<?php
										while ( $ednx_related_query->have_posts() ) :
											$ednx_related_query->the_post();
											?>
											<li>
												<div class="post-thumb">
													<a href="<?php the_permalink(); ?>">
														<?php if ( has_post_thumbnail() ) : ?>
															<?php the_post_thumbnail( 'thumbnail' ); ?>
														<?php else : ?>
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/post-1.png" alt="<?php the_title_attribute(); ?>">
														<?php endif; ?>
													</a>
												</div>
												<div class="post-content">
													<h6 class="post-title">
														<a href="<?php the_permalink(); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), 6 ) ); ?></a>
													</h6>
													<div class="post-meta">
														<i class="tji-calendar"></i>
														<span><?php echo esc_html( get_the_date( 'M - d - Y' ) ); ?></span>
													</div>
												</div>
											</li>
											<?php
										endwhile;
										wp_reset_postdata();
										?>
									</ul>
								</div>
							<?php endif; ?>

							<?php
							$ednx_sidebar_tags = get_tags( array( 'hide_empty' => true ) );
							if ( $ednx_sidebar_tags ) :
								?>
								<div class="tj_wpost_widget widget_tag_cloud tj-fade-anim">
									<h4 class="widget_title"><?php esc_html_e( 'Tags', 'ednx' ); ?></h4>
									<nav>
										<div class="tagcloud">
											<?php foreach ( $ednx_sidebar_tags as $ednx_sidebar_tag ) : ?>
												<a href="<?php echo esc_url( get_tag_link( $ednx_sidebar_tag ) ); ?>"><?php echo esc_html( $ednx_sidebar_tag->name ); ?></a>
											<?php endforeach; ?>
										</div>
									</nav>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: Blog Section -->
	</main>

	<?php
endwhile;

get_footer();
