<?php
/**
 * Template part for displaying a course card
 *
 * Outputs just the `.tj-course-item` card — the caller supplies the
 * surrounding wrapper, since the card is reused inside a Bootstrap grid
 * column (courses archive) and a Swiper slide (related courses). See
 * inc/custom-post-types.php for the full list of recognized `course` meta
 * keys.
 *
 * @package tutorial
 */

$ednx_level         = ednx_meta( 'ednx_level' );
$ednx_lessons       = ednx_meta( 'ednx_lessons' );
$ednx_duration      = ednx_meta( 'ednx_duration' );
$ednx_students      = ednx_meta( 'ednx_students' );
$ednx_rating        = ednx_meta( 'ednx_rating' );
$ednx_rating_count  = ednx_meta( 'ednx_rating_count' );
$ednx_price         = ednx_meta( 'ednx_price' );
$ednx_sale_price    = ednx_meta( 'ednx_sale_price' );
$ednx_badge         = ednx_meta( 'ednx_badge' );
$ednx_instructor_id = ednx_meta( 'ednx_instructor_id' );
$ednx_categories    = get_the_terms( get_the_ID(), 'course_category' );
?>

<div <?php post_class( 'tj-course-item' ); ?>>
	<div class="tj-course-img">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium_large' ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/course/course-img-1.webp" alt="<?php the_title_attribute(); ?>">
			<?php endif; ?>
		</a>
		<?php if ( $ednx_badge ) : ?>
			<div class="tj-product-badge">
				<span><?php echo esc_html( $ednx_badge ); ?></span>
			</div>
		<?php endif; ?>
		<div class="tj-wishlist-btn">
			<button type="button"><i class="tji-heart"></i></button>
		</div>
	</div>
	<div class="tj-course-content">
		<div class="tj-cat-level-wrap">
			<?php if ( $ednx_categories && ! is_wp_error( $ednx_categories ) ) : ?>
				<div class="tj-categories">
					<a class="tj-cat" href="<?php echo esc_url( get_term_link( $ednx_categories[0] ) ); ?>"><?php echo esc_html( $ednx_categories[0]->name ); ?></a>
				</div>
			<?php endif; ?>
			<?php if ( $ednx_level ) : ?>
				<div class="tj-level">
					<span><?php echo esc_html( $ednx_level ); ?></span>
				</div>
			<?php endif; ?>
		</div>
		<h3 class="title tj-fs-h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php if ( $ednx_instructor_id ) : ?>
			<span class="author">
				<a href="<?php echo esc_url( get_permalink( $ednx_instructor_id ) ); ?>">
					<?php echo get_avatar( $ednx_instructor_id, 32 ); ?>
					<?php echo esc_html( get_the_title( $ednx_instructor_id ) ); ?>
				</a>
			</span>
		<?php endif; ?>
		<div class="course-meta">
			<?php if ( $ednx_lessons ) : ?>
				<span><i class="tji-book"></i><?php echo esc_html( $ednx_lessons ); ?> <?php esc_html_e( 'Lesson', 'ednx' ); ?></span>
			<?php endif; ?>
			<?php if ( $ednx_duration ) : ?>
				<span><i class="tji-clock"></i><?php echo esc_html( $ednx_duration ); ?></span>
			<?php endif; ?>
			<?php if ( $ednx_students ) : ?>
				<span><i class="tji-user-duo"></i><?php echo esc_html( $ednx_students ); ?></span>
			<?php endif; ?>
		</div>
		<div class="tj-course-price-wrap">
			<?php if ( $ednx_rating ) : ?>
				<div class="single-rating">
					<i class="tji-star"></i>
					<span class="label"><?php echo esc_html( $ednx_rating ); ?><?php if ( $ednx_rating_count ) : ?><span>(<?php echo esc_html( $ednx_rating_count ); ?>)</span><?php endif; ?></span>
				</div>
			<?php endif; ?>
			<div class="course-price tj-fs-h6">
				<?php if ( $ednx_sale_price ) : ?>
					<del><?php echo esc_html( '$' . number_format_i18n( (float) $ednx_sale_price, 2 ) ); ?></del>
				<?php endif; ?>
				<?php echo $ednx_price ? esc_html( '$' . number_format_i18n( (float) $ednx_price, 2 ) ) : esc_html__( 'Free', 'ednx' ); ?>
			</div>
		</div>
		<a class="tj-btn-primary tj-btn-primary-md flip-text-wrap" href="<?php the_permalink(); ?>">
			<span class="btn-text"><?php esc_html_e( 'Start learning', 'ednx' ); ?></span>
			<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
		</a>
	</div>
</div>
