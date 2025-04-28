<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Limit Product Quantity to 1 for All WooCommerce Products
 */
function maverick_limit_product_quantity($return, $product)
{
	return true;
}
add_filter('woocommerce_is_sold_individually', 'maverick_limit_product_quantity', 10, 2);

