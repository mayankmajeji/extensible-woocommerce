<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Remove Product Tab on WooCommerce Single Product Page. 
 */
function maverick_remove_woocommerce_single_product_tabs($tabs)
{
    // Remove the description tab
    unset( $tabs['description'] );
    
    // Remove the reviews tab
    unset( $tabs['reviews'] );
    
    // Remove the additional information tab
    unset( $tabs['additional_information'] );  
	
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_single_product_tabs', 98);

