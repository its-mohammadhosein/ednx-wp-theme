<?php
/**
 * Custom post types for the Edunex theme
 *
 * The HTML template's courses, instructor and event pages are dynamic
 * content types (archives + detail pages), not one-off static pages, so
 * they're registered here as custom post types rather than converted into
 * plain WordPress pages.
 *
 * Summary data not covered by core fields (price, lesson count, rating,
 * etc.) uses plain custom fields rather than a page builder plugin like
 * ACF, to avoid adding a dependency. Recognized meta keys:
 *
 * `course` post type:
 * - ednx_level            (string)  e.g. "Beginner", "Intermediate", "Expert"
 * - ednx_lessons          (int)     lesson count
 * - ednx_duration         (string)  e.g. "6h 30m"
 * - ednx_students         (string)  e.g. "2.1k"
 * - ednx_rating           (float)   e.g. 4.9
 * - ednx_rating_count     (string)  e.g. "3K+"
 * - ednx_price            (float)   current price; 0 or empty = Free
 * - ednx_sale_price       (float)   optional original price shown struck through
 * - ednx_badge            (string)  e.g. "Popular", "New"
 * - ednx_instructor_id    (int)     post ID of an `instructor` post
 * - ednx_video_url        (string)  preview video URL for the sidebar play button
 * - ednx_includes         (string)  newline-separated "this course includes" bullets
 *
 * `instructor` post type:
 * - ednx_designation      (string)  e.g. "Senior Web Developer"
 * - ednx_rating           (float)   e.g. 4.9
 * - ednx_sessions         (int)     number of sessions taught
 * - ednx_rate_per_hour    (float)   hourly rate; 0 or empty = not shown
 * - ednx_response_rate    (string)  e.g. "98%"
 * - ednx_response_time    (string)  e.g. "&lt; 2h"
 * - ednx_social_facebook, ednx_social_instagram, ednx_social_x,
 *   ednx_social_linkedin  (string URLs)
 *
 * `event` post type:
 * - ednx_event_date       (string)  e.g. "2026-12-30"
 * - ednx_event_time       (string)  e.g. "10:00 AM - 2:00 PM"
 * - ednx_event_location   (string)
 * - ednx_event_type       (string)  e.g. "Design workshop"
 * - ednx_seats_left       (int)
 * - ednx_seats_total      (int)
 * - ednx_event_price      (float)   current price; 0 or empty = Free
 * - ednx_host_id          (int)     post ID of an `instructor` post
 * - ednx_includes         (string)  newline-separated "this event includes" bullets (shared key with `course`)
 *
 * @package tutorial
 */

/**
 * Register the `course`, `instructor` and `event` custom post types.
 */
function ednx_register_post_types() {
	register_post_type(
		'course',
		array(
			'labels'       => array(
				'name'               => __( 'Courses', 'ednx' ),
				'singular_name'      => __( 'Course', 'ednx' ),
				'add_new_item'       => __( 'Add New Course', 'ednx' ),
				'edit_item'          => __( 'Edit Course', 'ednx' ),
				'all_items'          => __( 'All Courses', 'ednx' ),
				'search_items'       => __( 'Search Courses', 'ednx' ),
				'not_found'          => __( 'No courses found.', 'ednx' ),
				'not_found_in_trash' => __( 'No courses found in Trash.', 'ednx' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-welcome-learn-more',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'rewrite'      => array( 'slug' => 'courses' ),
		)
	);

	register_taxonomy(
		'course_category',
		'course',
		array(
			'labels'       => array(
				'name'          => __( 'Course Categories', 'ednx' ),
				'singular_name' => __( 'Course Category', 'ednx' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'show_in_rest' => true,
			'rewrite'      => array( 'slug' => 'course-category' ),
		)
	);

	register_post_type(
		'instructor',
		array(
			'labels'       => array(
				'name'               => __( 'Instructors', 'ednx' ),
				'singular_name'      => __( 'Instructor', 'ednx' ),
				'add_new_item'       => __( 'Add New Instructor', 'ednx' ),
				'edit_item'          => __( 'Edit Instructor', 'ednx' ),
				'all_items'          => __( 'All Instructors', 'ednx' ),
				'search_items'       => __( 'Search Instructors', 'ednx' ),
				'not_found'          => __( 'No instructors found.', 'ednx' ),
				'not_found_in_trash' => __( 'No instructors found in Trash.', 'ednx' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-businessperson',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'rewrite'      => array( 'slug' => 'instructors' ),
		)
	);

	register_post_type(
		'event',
		array(
			'labels'       => array(
				'name'               => __( 'Events', 'ednx' ),
				'singular_name'      => __( 'Event', 'ednx' ),
				'add_new_item'       => __( 'Add New Event', 'ednx' ),
				'edit_item'          => __( 'Edit Event', 'ednx' ),
				'all_items'          => __( 'All Events', 'ednx' ),
				'search_items'       => __( 'Search Events', 'ednx' ),
				'not_found'          => __( 'No events found.', 'ednx' ),
				'not_found_in_trash' => __( 'No events found in Trash.', 'ednx' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-calendar-alt',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'rewrite'      => array( 'slug' => 'events' ),
		)
	);
}
add_action( 'init', 'ednx_register_post_types' );

/**
 * Order the events archive by event date (soonest first) instead of
 * publish date, falling back to publish date for events with no
 * ednx_event_date meta set.
 *
 * @param WP_Query $query The main query.
 */
function ednx_order_events_by_date( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'event' ) ) {
		$query->set( 'meta_key', 'ednx_event_date' ); // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
		$query->set( 'orderby', array( 'meta_value' => 'ASC', 'date' => 'DESC' ) );
	}
}
add_action( 'pre_get_posts', 'ednx_order_events_by_date' );
