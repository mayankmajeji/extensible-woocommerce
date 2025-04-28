<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Remove WooCommerce Additional Information Tab
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_remove_woocommerce_additional_information_tab($tabs)
{
    unset($tabs['additional_information']);
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_additional_information_tab', 98);

