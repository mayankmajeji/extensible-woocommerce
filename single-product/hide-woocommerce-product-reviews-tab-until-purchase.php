<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Hide WooCommerce Product Reviews Tab Until Purchase
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_hide_reviews_tab_for_zero_purchased_products($tabs)
{
    // Get the current product ID
    global $product;
    $product_id = $product->get_id();

    // Check if the current user has purchased the product
    if (! wc_customer_bought_product('', get_current_user_id(), $product_id)) {

        // If the user hasn't purchased the product, remove the reviews tab
        unset($tabs['reviews']);
    }

    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_hide_reviews_tab_for_zero_purchased_products', 99);

