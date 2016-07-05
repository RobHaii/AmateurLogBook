<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Now Hiring
 * @subpackage Now Hiring/admin/partials
 */

?><h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
<h2><?php esc_html_e( 'Shortcode', 'now-AmateurLogBook' ); ?></h2>
<p><?php esc_html_e( 'The simplest version of the shortcode is:', 'now-AmateurLogBook' ); ?></p>
<pre><code>[nowhiring]</code></pre>
<p><?php esc_html_e( 'Enter that in the Editor on any page or post to display all the job opening posts.', 'now-AmateurLogBook' ); ?></p>
<p><?php esc_html_e( 'This is an example with all the default attributes used:', 'now-AmateurLogBook' ); ?></p>
<pre><code>[nowhiring order="rand" quantity="10" location="Decatur"]</code></pre>

<h3><?php esc_html_e( 'Shortcode Attributes', 'now-AmateurLogBook' ); ?></h3>
<p><?php esc_html_e( 'There are currently three attributes that can be added to the shortcode to filter job opening posts:', 'now-AmateurLogBook' ); ?></p>
<ol>
	<li><?php esc_html_e( 'order', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'quantity', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'location', 'now-AmateurLogBook' ); ?></li>
</ol>
<h4><?php esc_html_e( 'order', 'now-AmateurLogBook' ); ?></h4>
<p><?php printf( wp_kses( __( 'Changes the display order of the job opening posts. Default value is "date", but can use any of <a href="%1$s">the "orderby" parameters for WP_Query</a>.', 'now-AmateurLogBook' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( 'https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters' ) ); ?></p>
<p><?php esc_html_e( 'Examples of the order attribute:', 'now-AmateurLogBook' ); ?></p>
<ul>
	<li><?php esc_html_e( 'order="title" (order by post title)', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'order="name" (order by post slug)', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'order="rand" (random order)', 'now-AmateurLogBook' ); ?></li>
</ul>

<h4><?php esc_html_e( 'quantity', 'now-AmateurLogBook' ); ?></h4>
<p><?php esc_html_e( 'Determines how many job opening posts are displayed. The default value is 100. Must be a positive value. To display all, use a high number.', 'now-AmateurLogBook' ); ?></p>
<p><?php esc_html_e( 'Examples of the quantity attribute:', 'now-AmateurLogBook' ); ?></p>
<ul>
	<li><?php esc_html_e( 'quantity="3" (only show 3 openings)', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'quantity="125" (only show 125 openings)', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'quantity="999" (large number to display to all openings)', 'now-AmateurLogBook' ); ?></li>
</ul>

<h4><?php esc_html_e( 'location', 'now-AmateurLogBook' ); ?></h4>
<p><?php esc_html_e( 'Filters job openings based on the value of the job location metabox field. The value should be the ', 'now-AmateurLogBook' ); ?></p>
<p><?php esc_html_e( 'Examples of the location attribute:', 'now-AmateurLogBook' ); ?></p>
<ul>
	<li><?php esc_html_e( 'location="St Louis"', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'location="Decatur"', 'now-AmateurLogBook' ); ?></li>
	<li><?php esc_html_e( 'location="Chicago"', 'now-AmateurLogBook' ); ?></li>
</ul>

<h4><?php esc_html_e( 'WP_Query', 'now-AmateurLogBook' ); ?></h4>
<p><?php printf( wp_kses( __( 'The shortcode will also accept any of <a href="%1$s">the parameters for WP_Query</a>.', 'now-AmateurLogBook' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( 'https://codex.wordpress.org/Class_Reference/WP_Query' ) ); ?></p>