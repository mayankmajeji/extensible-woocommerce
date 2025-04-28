<?php

/** 
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function maverick_hide_other_shipping_when_free_shipping_is_available($rates, $package)
{
    // Initialize an empty array to store the new rates
    $free_shipping = array();

    // Loop through available rates
    foreach ($rates as $rate_id => $rate) {
        // Check if free shipping is available
        if ('free_shipping' === $rate->method_id) {
            $free_shipping[$rate_id] = $rate;
            break; // Exit loop when free shipping is found
        }
    }

    // Return only free shipping if available
    return !empty($free_shipping) ? $free_shipping : $rates;
}
add_filter('woocommerce_package_rates', 'maverick_hide_other_shipping_when_free_shipping_is_available', 100, 2);
