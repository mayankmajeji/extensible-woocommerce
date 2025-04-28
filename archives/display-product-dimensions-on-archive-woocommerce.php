<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Show product dimensions on archive pages
 * WooCommerce version 3.0+
 */
function maverick_show_product_dimensions_on_archive_woocommerce_3_0_plus()
{
    // Get the product
    global $product;

    // Get the dimensions
    $dimensions = wc_format_dimensions($product->get_dimensions(false));

    // If the product has dimensions, display them
    if ($product->has_dimensions()) {
        // Display the dimensions
?>
        <div class="product-meta">
            <span class="product-meta-label">Dimensions: </span>
            <?php echo $dimensions; ?>
        </div>
    <?php
    }
}

add_action('woocommerce_after_shop_loop_item', 'maverick_show_product_dimensions_on_archive_woocommerce_3_0_plus', 9);

/**
 * Show product dimensions on archive pages WC 3 and below
 */
function maverick_show_product_dimensions_on_archive_woocommerce_3_and_below()
{
    // Get the product
    global $product;

    // Get the dimensions
    $dimensions = $product->get_dimensions();

    // If the product has dimensions, display them
    if (!empty($dimensions)) {
        // Display the dimensions
    ?>
        <span class="dimensions">
            <?php echo $dimensions; ?>
        </span>
<?php
    }
}

add_action('woocommerce_after_shop_loop_item_title', 'maverick_show_product_dimensions_on_archive_woocommerce_3_and_below', 9);
