<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the archive loop.
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Now_Hiring
 * @subpackage Now_Hiring/public/partials
 */

/**
 * now-AmateurLogBook-before-loop hook
 *
 * @hooked 		list_wrap_start 		10
 */
do_action( 'now-AmateurLogBook-before-loop' );

foreach ( $items as $item ) {

	$meta = get_post_custom( $item->ID );

	/**
	 * now-AmateurLogBook-before-loop-content hook
	 *
	 * @param 		object  	$item 		The post object
	 *
	 * @hooked 		content_wrap_start 		10
	 */
	do_action( 'now-AmateurLogBook-before-loop-content', $item, $meta );

		/**
		 * now-AmateurLogBook-loop-content hook
		 *
		 * @param 		object  	$item 		The post object
		 *
		 * @hooked 		content_job_title 		10
		 * @hooked 		content_job_location 	15
		 */
		do_action( 'now-AmateurLogBook-loop-content', $item, $meta );

	/**
	 * now-AmateurLogBook-after-loop-content hook
	 *
	 * @param 		object  	$item 		The post object
	 *
	 * @hooked 		content_link_end 		10
	 * @hooked 		content_wrap_end 		90
	 */
	do_action( 'now-AmateurLogBook-after-loop-content', $item, $meta );

} // foreach

/**
 * now-AmateurLogBook-after-loop hook
 *
 * @hooked 		list_wrap_end 			10
 */
do_action( 'now-AmateurLogBook-after-loop' );
