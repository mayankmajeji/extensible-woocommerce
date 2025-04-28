<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Remove Product Reviews in WooCommerce
 */
add_action( 'init', 'maverick_remove_product_reviews_woocommerce');

function maverick_remove_product_reviews_woocommerce() {
    remove_action('woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30);
    remove_action('woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30);
}

