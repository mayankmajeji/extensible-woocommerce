<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Change existing currency symbol
 *
 * @param string $currency_symbol The currency symbol
 * @param string $currency The currency code
 * @return string The currency symbol
 */
function maverick_change_existing_currency_symbol($currency_symbol, $currency)
{
    // Change currency symbol for AUD
    switch ($currency) {
        case 'AUD':
            $currency_symbol = 'AUD$';
            break;
    }

    // return the currency symbol
    return $currency_symbol;
}

add_filter('woocommerce_currency_symbol', 'maverick_change_existing_currency_symbol', 10, 2);
