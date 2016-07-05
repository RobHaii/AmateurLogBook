<?php

/**
 * Provide a public-facing view for the How to Apply plugin option
 *
 * @link 		http://slushman.com
 * @since 		1.0.0
 *
 * @package 	Now_Hiring
 * @subpackage 	Now_Hiring/public/partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?><div class="how-to-apply">
	<h2><?php esc_html_e( 'How to Apply', 'now-AmateurLogBook' ); ?></h2><?php

	echo $this->options['howtoapply'];

?></div>