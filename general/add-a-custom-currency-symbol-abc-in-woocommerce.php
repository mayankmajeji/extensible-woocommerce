<?php

/** 
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Add Custom Currency
 *
 * @param array $currencies WooCommerce currencies
 * @return array $currencies WooCommerce currencies
 */
function maverick_add_custom_currency_woocommerce($currencies)
{
    // currency name
    $currencies['ABC'] = __('Currency name', 'woocommerce');

    // return currencies
    return $currencies;
}

add_filter('woocommerce_currencies', 'maverick_add_custom_currency_woocommerce');

/**
 * Add Custom Currency Symbol
 *
 * @param string $currency_symbol Currency symbol
 * @param string $currency Currency
 * @return string $currency_symbol Currency symbol
 */
function maverick_add_custom_currency_symbol_woocommerce($currency_symbol, $currency)
{
    // switch currency
    switch ($currency) {
        case 'ABC':
            // currency symbol
            $currency_symbol = '$';
            break;
    }

    // return currency symbol
    return $currency_symbol;
}

add_filter('woocommerce_currency_symbol', 'maverick_add_custom_currency_woocommerce', 10, 2);
