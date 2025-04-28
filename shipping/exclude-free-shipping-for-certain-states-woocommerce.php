<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Show only free shipping when free shipping is available and customer is NOT in certain states, otherwise show all rates except free shipping.
 * Change $excluded_states = array( 'AK','HI','GU','PR' ); to include all the states that DO NOT have free shipping
 *
 * @param array $rates
 * @return array
 */
function maverick_exclude_free_shipping_for_certain_states($rates)
{

    // List of states that do not get free shipping.
    $excluded_states = array('AK', 'HI', 'GU', 'PR');

    // Initialize an empty array to store the new rates
    $free_shipping_rates = array();

    // Loop through the rates and get the free shipping rate
    foreach ($rates as $rate_id => $rate) {
        if ('free_shipping' === $rate->method_id) {
            $free_shipping_rates[$rate_id] = $rate;
            unset($rates[$rate_id]); // Remove free shipping from the list of rates.
        }
    }

    // If free shipping is available, and customer is not in excluded states, return only free shipping options.
    if (!empty($free_shipping_rates) && !in_array(WC()->customer->get_shipping_state(), $excluded_states)) {
        // Return only free shipping options.
        return $free_shipping_rates;
    }

    // Otherwise return rates without free shipping.
    return $rates;
}

add_filter('woocommerce_package_rates', 'maverick_exclude_free_shipping_for_certain_states', 10, 2);
