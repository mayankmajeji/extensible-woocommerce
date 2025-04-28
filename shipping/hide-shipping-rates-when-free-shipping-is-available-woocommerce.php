<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Hide shipping rates when free shipping is available.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function maverick_hide_shipping_rates_when_free_shipping_is_available($rates)
{
    // Get the free shipping rate
    $free = array();

    // Loop through the rates and get the free shipping rate
    foreach ($rates as $rate_id => $rate) {
        if ('free_shipping' === $rate->method_id) {
            $free[$rate_id] = $rate;
        }
    }

    // Return the free shipping rate if it exists, otherwise return all rates
    return ! empty($free) ? $free : $rates;
}

add_filter('woocommerce_package_rates', 'maverick_hide_shipping_rates_when_free_shipping_is_available', 100);
