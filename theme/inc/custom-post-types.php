<?php
/**
 * Custom post types for the Edunex theme
 *
 * The HTML template's courses, instructor and event pages are dynamic
 * content types (archives + detail pages), not one-off static pages, so
 * they're registered here as custom post types rather than converted into
 * plain WordPress pages.
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
