<?php
/**
 * Template part for displaying a blog post card
 *
 * Used on the blog index (home.php) for both the featured strip and the
 * filterable grid. Pass an args array as the third argument to
 * get_template_part():
 * - 'show_excerpt' (bool): include the excerpt paragraph. Default false.
 * - 'grid_item' (bool): wrap in the Bootstrap column + isotope filter
 *   classes used by the main grid. Default false (featured-strip style).
 *
 * The isotope filtering in main.js (`itemSelector: ".tj_filter_item_wrapper
 * .tj_filter_item"`, filtering by `.category-slug`) requires the category
 * slug classes to live on the SAME element as `tj_filter_item`, so the grid
 * wrapper carries them directly rather than on the inner <article>.
 *
 * @package tutorial
 *
 * @var array $args
 */

$ednx_show_excerpt = ! empty( $args['show_excerpt'] );
$ednx_grid_item     = ! empty( $args['grid_item'] );

$ednx_categories     = get_the_category();
$ednx_filter_classes = array();
foreach ( $ednx_categories as $ednx_category ) {
	$ednx_filter_classes[] = $ednx_category->slug;
}

if ( $ednx_grid_item ) {
	$ednx_wrapper_classes = array_merge( array( 'col-lg-4', 'col-md-6', 'tj_filter_item' ), $ednx_filter_classes );
	echo '<div class="' . esc_attr( implode( ' ', $ednx_wrapper_classes ) ) . '">';
}
?>

<article <?php post_class( 'blog-item' ); ?>>
	<div class="blog-thumb">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/post-1.png" alt="<?php the_title_attribute(); ?>" />
			<?php endif; ?>
		</a>
	</div>
	<div class="blog-content">
		<div class="blog-meta">
			<div class="tj-categories">
				<?php if ( $ednx_categories ) : ?>
					<a class="blog-category" href="<?php echo esc_url( get_category_link( $ednx_categories[0] ) ); ?>"><?php echo esc_html( $ednx_categories[0]->name ); ?></a>
				<?php endif; ?>
			</div>
			<div class="blog-meta-item date">
				<i class="tji-calendar"></i><span><?php echo esc_html( get_the_date( 'M - d - Y' ) ); ?></span>
			</div>
		</div>
		<h4 class="blog-title tj-fs-h5">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>
		<?php if ( $ednx_show_excerpt ) : ?>
			<p class="blog-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 16 ) ); ?></p>
		<?php endif; ?>
		<div class="blog-btn">
			<a class="tj-text-btn flip-text-wrap" href="<?php the_permalink(); ?>">
				<span class="btn-text"><?php esc_html_e( 'Read more', 'ednx' ); ?></span>
				<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
			</a>
		</div>
	</div>
</article>

<?php
if ( $ednx_grid_item ) {
	echo '</div>';
}
