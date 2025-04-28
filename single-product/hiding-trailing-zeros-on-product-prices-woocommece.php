<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Trim zeros in price decimals
 */
add_filter('woocommerce_price_trim_zeros', '__return_true');
