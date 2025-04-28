<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Show product weight on archive pages
 * WooCommerce 3.0+
 */
function maverick_show_product_weight_on_archive_woocommerce()
{

    // Get the product
    global $product;

    // Get the weight
    $weight = $product->get_weight();

    // If the product has a weight, display it
    if ($product->has_weight()) {
        // Display the weight
?>
        <div class="product-meta">
            <span class="product-meta-label">Weight: </span>
            <?php echo $weight; ?>
            <?php echo get_option('woocommerce_weight_unit'); ?>
        </div>
<?php
    }
}

add_action('woocommerce_after_shop_loop_item', 'maverick_show_product_weight_on_archive_woocommerce', 9);
