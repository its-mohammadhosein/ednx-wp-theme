<?php
/**
 * Template part for displaying an instructor card
 *
 * Used on the instructors archive. See inc/custom-post-types.php for the
 * full list of recognized `instructor` meta keys.
 *
 * @package tutorial
 */

$ednx_designation   = ednx_meta( 'ednx_designation' );
$ednx_rating        = ednx_meta( 'ednx_rating' );
$ednx_sessions      = ednx_meta( 'ednx_sessions' );
$ednx_rate_per_hour = ednx_meta( 'ednx_rate_per_hour' );
?>

<div <?php post_class( 'tj-instructor-item tj-instructor-item-2' ); ?>>
	<div class="tj-instructor-img">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php else : ?>
				<?php echo get_avatar( get_the_ID(), 300 ); ?>
			<?php endif; ?>
		</a>
		<?php if ( $ednx_rating ) : ?>
			<div class="single-rating">
				<i class="tji-star"></i>
				<span class="label"><?php echo esc_html( $ednx_rating ); ?></span>
			</div>
		<?php endif; ?>
	</div>
	<div class="tj-instructor-content">
		<div class="name-area">
			<h3 class="name tj-fs-h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( $ednx_designation ) : ?>
				<span class="designation"><?php echo esc_html( $ednx_designation ); ?></span>
			<?php endif; ?>
		</div>
		<div class="tj-instructor-info">
			<?php if ( $ednx_sessions ) : ?>
				<div class="course-meta">
					<span><i class="tji-book"></i><?php echo esc_html( $ednx_sessions ); ?> <?php esc_html_e( 'sessions', 'ednx' ); ?></span>
				</div>
			<?php endif; ?>
			<?php if ( $ednx_rate_per_hour ) : ?>
				<div class="course-price tj-fs-h5"><?php echo esc_html( '$' . number_format_i18n( (float) $ednx_rate_per_hour ) . '/h' ); ?></div>
			<?php endif; ?>
		</div>
		<div class="btn-area">
			<a class="tj-btn-primary-2 tj-btn-primary-3 tj-btn-full" href="<?php the_permalink(); ?>">
				<span class="btn-inner">
					<span class="btn-text"><span><?php esc_html_e( 'Book session', 'ednx' ); ?></span></span>
				</span>
			</a>
		</div>
	</div>
</div>
