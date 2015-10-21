<?php
/**
 * Register widget areas
 *
 * @package      Scratch
 * @author       Carrie Dils
 * @link         http://www.carriedils.com/
 * @copyright    Copyright (c) 2015, Carrie Dils
 * @license      GPL-2.0+
 */

// Register front page widget areas
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'scratch' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'scratch' ),
) );
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'scratch' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'scratch' ),
) );