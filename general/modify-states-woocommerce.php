<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Modify States in WooCommerce
 *
 * @param array $states WooCommerce states
 * @return array $states WooCommerce states
 */
function maverick_modify_states_woocommerce($states)
{
    // Modify states
    $states['A1'] = array(
        'A11' => 'State 1',
        'A12' => 'State 2'
    );

    // Return states
    return $states;
}

add_filter('woocommerce_states', 'maverick_modify_states_woocommerce');
