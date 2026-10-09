<?php
/**
 * Template part for displaying an event card
 *
 * Used on the events archive. See inc/custom-post-types.php for the full
 * list of recognized `event` meta keys.
 *
 * @package tutorial
 */

$ednx_event_date     = ednx_meta( 'ednx_event_date' );
$ednx_event_time     = ednx_meta( 'ednx_event_time' );
$ednx_event_location = ednx_meta( 'ednx_event_location' );
$ednx_event_timestamp = $ednx_event_date ? strtotime( $ednx_event_date ) : false;
?>

<div <?php post_class( 'tj-event-item-2' ); ?>>
	<div class="tj-event-img">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium_large' ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/event-img-1.webp" alt="<?php the_title_attribute(); ?>">
			<?php endif; ?>
		</a>
		<?php if ( $ednx_event_timestamp ) : ?>
			<div class="tj-book-meta">
				<span class="date"><?php echo esc_html( date_i18n( 'd', $ednx_event_timestamp ) ); ?></span>
				<span class="month"><?php echo esc_html( date_i18n( 'M', $ednx_event_timestamp ) ); ?></span>
			</div>
		<?php endif; ?>
	</div>
	<div class="tj-event-content">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="course-meta">
			<?php if ( $ednx_event_location ) : ?>
				<span><i class="tji-location"></i><?php echo esc_html( $ednx_event_location ); ?></span>
			<?php endif; ?>
			<?php if ( $ednx_event_time ) : ?>
				<span><i class="tji-clock"></i><?php echo esc_html( $ednx_event_time ); ?></span>
			<?php endif; ?>
		</div>
		<a class="tj-text-btn flip-text-wrap" href="<?php the_permalink(); ?>">
			<span class="btn-text"><?php esc_html_e( 'Book a seat', 'ednx' ); ?></span>
			<span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
		</a>
	</div>
</div>
