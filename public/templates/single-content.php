<?php
/**
 * The template for displaying all single job posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Now_Hiring
 */

$meta = get_post_custom( $post->ID );

/**
 * now-AmateurLogBook-before-single hook
 */
do_action( 'now-AmateurLogBook-before-single', $meta );

?><div class="wrap-job"><?php

	/**
	 * now-AmateurLogBook-before-single-content hook
	 */
	do_action( 'now-AmateurLogBook-before-single-content', $meta );

		/**
		 * now-AmateurLogBook-single-content hook
		 */
		do_action( 'now-AmateurLogBook-single-content', $meta );

	/**
	 * now-AmateurLogBook-after-single-content hook
	 */
	do_action( 'now-AmateurLogBook-after-single-content', $meta );

?></div><!-- .wrap-employee --><?php

/**
 * now-AmateurLogBook-after-single hook
 */
do_action( 'now-AmateurLogBook-after-single', $meta );