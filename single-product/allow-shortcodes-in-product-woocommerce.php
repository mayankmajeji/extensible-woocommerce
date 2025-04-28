<?php

/**
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

if (!function_exists('maverick_allow_shortcodes_in_product_excerpts')) {
    /**
     * Allow shortcodes in product excerpts
     *
     * @param object $post WooCommerce product object
     */
    function maverick_allow_shortcodes_in_product_excerpts($post)
    {
        global $post;
        if ($post->post_excerpt) {
?>
            <div itemprop="description">
                <?php echo do_shortcode(wpautop(wptexturize($post->post_excerpt))); ?>
            </div>
<?php
        }
    }
}

add_action('woocommerce_single_product_summary', 'maverick_allow_shortcodes_in_product_excerpts', 10);
