<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Add content under the proceed to checkout button on the cart page.
 * Icon Credits: https://fontawesome.com/
 * 
 * @return void
 */
function maverick_add_content_under_proceed_to_checkout_button_cart_page()
{
    echo '<div id="post_checkout_button_content"><i class="fas fa-lock"></i> Secure Checkout</div>';
};

add_action('woocommerce_after_cart_totals', 'maverick_add_content_under_proceed_to_checkout_button_cart_page', 10, 0);

/**
 * Add CSS to the cart page.
 * 
 * @return void
 */
function maverick_add_content_under_proceed_to_checkout_button_cart_page_css()
{
    // Check if the cart page is being viewed.
    if (is_cart()) { ?>
        <style>
            /* Add CSS to the cart page. */
            #post_checkout_button_content {
                color: green;
                text-align: center;
            }
        </style>
<?php }
}

add_action('wp_head', 'maverick_add_content_under_proceed_to_checkout_button_cart_page_css');
