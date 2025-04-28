<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Prevent PO box shipping
 * 
 * @param array $posted The posted data
 * @return void
 */

function maverick_disable_po_box_shipping($posted)
{
    // Get the WooCommerce object
    global $woocommerce;

    // Get the address and postcode
    $address  = (isset($posted['shipping_address_1'])) ? $posted['shipping_address_1'] : $posted['billing_address_1'];
    $postcode = (isset($posted['shipping_postcode'])) ? $posted['shipping_postcode'] : $posted['billing_postcode'];

    // Replace spaces, dots, and commas with an empty string
    $replace  = array(" ", ".", ",");
    $address  = strtolower(str_replace($replace, '', $address));
    $postcode = strtolower(str_replace($replace, '', $postcode));

    // If the address or postcode contains "pobox", add an error message
    if (strstr($address, 'pobox') || strstr($postcode, 'pobox')) {
        wc_add_notice(sprintf(__("Sorry, we cannot ship to PO BOX addresses.")), 'error');
    }
}

add_action('woocommerce_after_checkout_validation', 'maverick_disable_po_box_shipping');
