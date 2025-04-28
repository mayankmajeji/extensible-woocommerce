<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Hide shipping rates except "free shipping" and "Local pickup"
 * Updated to support WooCommerce 2.6 Shipping Zones
 */
function maverick_other_hide_shipping_methods($rates, $package)
{
    $new_rates = array();
    foreach ($rates as $rate_id => $rate) {
        // Only modify rates if free_shipping is present.
        if ('free_shipping' === $rate->method_id) {
            $new_rates[$rate_id] = $rate;
            break;
        }
    }
    if (!empty($new_rates)) {
        //Save local pickup if it's present.
        foreach ($rates as $rate_id => $rate) {
            if ('local_pickup' === $rate->method_id) {
                $new_rates[$rate_id] = $rate;
                break;
            }
        }
        return $new_rates;
    }
    return $rates;
}

add_filter('woocommerce_package_rates', 'maverick_other_hide_shipping_methods', 10, 2);

