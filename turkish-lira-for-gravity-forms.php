<?php
/*
Plugin Name: Turkish Lira for Gravity Forms
Plugin URI: https://tolga.kaprol.net
Description: Adds support for Turkish Lira (TRY) to Gravity Forms.
Version: 1.0
Author: Tolga Kaprol
Author URI: http://tolga.kaprol.net
Text Domain: try-for-gf
*/

// Run the filter to add the currency.
add_filter( 'gform_currencies', 'gf_add_try_support' );

/**
 * Adds the currency if it isn't already registered.
 *
 * @since   1.0
 * @access  public
 * @used-by gform_currencies
 *
 * @param array $currencies The current currencies registered in Gravity Forms.
 *
 * @return array List of supported currencies.
 */
function gf_add_try_support( $currencies ) {

	// Check if the currency is already registered.
	if ( ! array_key_exists( 'TRY', $currencies ) ) {
		// Add TRY to the list of supported currencies.
		$currencies['TRY'] = array(
			'name'               => 'Turkish Lira',
			'symbol_left'        => '&#8378;',
			'symbol_right'       => '',
			'symbol_padding'     => ' ',
			'thousand_separator' => ',',
			'decimal_separator'  => '.',
			'decimals'           => 2
		);
	}

	return $currencies;

}
