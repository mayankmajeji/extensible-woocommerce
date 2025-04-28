<?php
/** 
* Author: Mayank Majeji | UnmaskWP.com
* GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
*/ 

/**
 * Remove Zero Decimals from Product Price in WooCommerce
 */
add_filter( ‘woocommerce_price_trim_zeros’, ‘__return_true’ );

