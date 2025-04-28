<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Show shipping rates when free shipping is available, but keep "Local pickup" supporting methods.
 * 
 * @param array $rates Array of rates found for the package.
 * @param array $package The package details.
 * @return array
 */
function hide_shipping_when_free_is_available($rates, $package)
{
    // Initialize an empty array to store the new rates
    $new_rates = array();

    // Loop through the rates and get the free shipping rate
    foreach ($rates as $rate_id => $rate) {
        // Only modify rates if free_shipping is present.
        if ('free_shipping' === $rate->method_id) {
            $new_rates[$rate_id] = $rate;
        }
    }

    // If there are new rates, save local pickup and methods supporting 'local-pickup' if present.
    if (! empty($new_rates)) {
        // Loop through the rates and get the local pickup rate
        foreach ($rates as $rate_id => $rate) {
            $method = WC()->shipping()->shipping_methods[$rate->method_id];
            if ($method instanceof WC_Shipping_Method && $method->supports('local-pickup')) {
                $new_rates[$rate_id] = $rate;
            }
        }

        // Return the new rates
        return $new_rates;
    }

    // Return the original rates
    return $rates;
}

add_filter('woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2);
