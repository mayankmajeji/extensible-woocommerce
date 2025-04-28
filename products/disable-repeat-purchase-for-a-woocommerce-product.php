<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Disables repeat purchase for a specific WooCommerce product
 * 
 * @param bool $purchasable true if product can be purchased
 * @param \WC_Product $product the WooCommerce product
 * @return bool $purchasable the updated is_purchasable check
 */
function maverick_disable_woocommerce_product_repeat_purchase($purchasable, $product)
{

	// Enter the ID of the product that shouldn't be purchased again
	$exclude_product_id = 303;

	// Get the ID for the current product (passed in)
	$product_id = $product->get_id();

	// Bail unless the ID is equal to our desired non-purchasable product
	if ($exclude_product_id !== $product_id) {
		return $purchasable;
	}

	// return false if the customer has bought the product
	if (wc_customer_bought_product(get_current_user()->user_email, get_current_user_id(), $product_id)) {
		$purchasable = false;
	}

	return $purchasable;
}

add_filter('woocommerce_variation_is_purchasable', 'maverick_disable_woocommerce_product_repeat_purchase', 10, 2);
add_filter('woocommerce_is_purchasable', 'maverick_disable_woocommerce_product_repeat_purchase', 10, 2);

