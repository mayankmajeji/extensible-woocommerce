<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Change 'Add to Cart' button text on single product page
 */
add_filter('woocommerce_product_single_add_to_cart_text', 'maverick_woocommerce_add_to_cart_button_text_single');
function maverick_woocommerce_add_to_cart_button_text_single()
{
    return __('Add to Cart Button Text', 'woocommerce');
}

