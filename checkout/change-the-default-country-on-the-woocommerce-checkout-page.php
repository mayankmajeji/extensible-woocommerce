<?php

/** 
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Change the default country on the WooCommerce checkout page
 *
 * @return string $country_code Country code
 */
function maverick_change_default_checkout_country()
{
    // country code
    return 'XX';
}

add_filter('default_checkout_billing_country', 'maverick_change_default_checkout_country');
