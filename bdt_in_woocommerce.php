<?php
/*
Plugin Name: Bangladeshi Taka in WooCommerce
Plugin URI: http://www.pricedhost.com/
Version: 1.0.1
Author: Asad Iqbal
Description: Simple plugin to show Bangladeshi currency into WooCommerce store.
*/

add_filter( 'woocommerce_currencies', 'add_bangladeshi_currency' );
add_filter( 'woocommerce_currency_symbol', 'add_bangladeshi_currency_symbol' );

	function add_bangladeshi_currency( $currencies ) {
	$currencies['BDT'] = __( 'Bangladeshi Taka (BDT)', 'woothemes' );
	return $currencies;
	}

	function add_bangladeshi_currency_symbol( $symbol ) {
	$currency = get_option( 'woocommerce_currency' );
	switch( $currency ) {
	case 'BDT': $symbol = 'BDT: '; break;
	}
	return $symbol;
	}
?>