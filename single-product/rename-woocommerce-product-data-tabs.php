<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'maverick_rename_woocommerce_single_product_tabs', 98 );
function maverick_rename_woocommerce_single_product_tabs( $tabs ) {

    // Rename the description tab
	$tabs['description']['title'] = __( 'More Information';		

    // Rename the reviews tab
	$tabs['reviews']['title'] = __( 'Ratings' );
    
    // Rename the additional information tab
	$tabs['additional_information']['title'] = __( 'Product Data' );	

	return $tabs;
}

