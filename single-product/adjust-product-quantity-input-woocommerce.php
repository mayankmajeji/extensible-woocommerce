<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Adjust the quantity input values
 *
 * @param array $args WooCommerce quantity input arguments
 * @param object $product WooCommerce product object
 * @return array $args WooCommerce quantity input arguments
 */
function maverick_adjust_product_quantity_input_woocommerce($args, $product)
{
    // Adjust quantity input values for single product pages
    if (is_singular('product')) {
        $args['input_value']     = 2;    // Starting value (we only want to affect product pages, not cart)
    }

    // Adjust quantity input values for variations
    $args['max_value']     = 80;     // Maximum value
    $args['min_value']     = 2;       // Minimum value
    $args['step']         = 2;    // Quantity steps

    // Return adjusted quantity input arguments
    return $args;
}

add_filter('woocommerce_quantity_input_args', 'maverick_adjust_product_quantity_input_woocommerce', 10, 2); // Simple products

/**
 * Adjust the quantity input values for variations
 *
 * @param array $args WooCommerce quantity input arguments
 * @return array $args WooCommerce quantity input arguments
 */
function maverick_adjust_product_quantity_input_variation_woocommerce($args)
{
    // Adjust quantity input values for variations
    $args['max_qty'] = 80;         // Maximum value (variations)
    $args['min_qty'] = 2;       // Minimum value (variations)

    // Return adjusted quantity input arguments
    return $args;
}

add_filter('woocommerce_available_variation', 'maverick_adjust_product_quantity_input_variation_woocommerce'); // Variations