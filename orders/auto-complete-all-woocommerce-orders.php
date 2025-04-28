<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Auto Complete all WooCommerce orders.
 */
function maverick_woocommerce_auto_complete_order($order_id)
{
	if (!$order_id) {
		return;
	}

	$order = wc_get_order($order_id);
	$order->update_status('completed');
}

add_action('woocommerce_thankyou', 'maverick_woocommerce_auto_complete_order');

