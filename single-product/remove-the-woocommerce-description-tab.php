<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Remove WooCommerce Description Tab
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_remove_woocommerce_description_tab($tabs)
{
    unset($tabs['description']);
    return $tabs;
}
add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_description_tab', 98);

