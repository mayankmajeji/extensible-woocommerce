<?php

/** 
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Remove WooCommerce Order Notes Field
 *
 * @return bool
 */
add_filter('woocommerce_enable_order_notes_field', '__return_false', 9999);
