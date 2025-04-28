<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Rename the WooCommerce sale badge.
 *
 * @param string $badge_html The HTML of the sale badge.
 * @param object $post The post object.
 * @return string
 */
function maverick_rename_sale_badge_woocommerce_product($badge_html, $post)
{
    // Return the new sale badge.
    $badge_html = '<span class="onsale">Discount!</span>';

    // Return the new sale badge.
    return $badge_html;
}

add_filter('woocommerce_sale_flash', 'maverick_rename_sale_badge_woocommerce_product', 10, 2);
