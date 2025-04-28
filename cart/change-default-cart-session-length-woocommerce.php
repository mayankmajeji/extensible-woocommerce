<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Change the default cart session length
 */
function maverick_cart_session_about_to_expire()
{

    // Default value is 47
    return 60 * 60 * 47;
}

add_filter('wc_session_expiring', 'woocommerce_cart_session_about_to_expire');

/**
 * Change the default cart session length
 */
function maverick_cart_session_expires()
{

    // Default value is 48
    return 60 * 60 * 48;
}

add_filter('wc_session_expiration', 'woocommerce_cart_session_expires');
