<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 NM: Modified */

defined( 'ABSPATH' ) || exit;

global $product, $nm_globals, $nm_theme_options;

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

nm_add_page_include( 'products' );

// Wrapper link
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

// Title
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'nm_template_loop_product_title', 10 );

// Rating
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
if ( $nm_theme_options['product_rating'] ) {
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 15 );
}

// Action link
if ( ! $nm_theme_options['product_action_link'] ) {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
?>
<li <?php wc_product_class( '', $product ); ?> data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
	<?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * NM: Removed - @hooked woocommerce_template_loop_product_link_open - 10
         */
		do_action( 'woocommerce_before_shop_loop_item' );
	?>
    
    <div class="nm-shop-loop-thumbnail nm-loader">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
            <?php
                /**
                 * Hook: woocommerce_before_shop_loop_item_title.
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                 */
				do_action( 'woocommerce_before_shop_loop_item_title' );
			?>
        </a>
    </div>
	
    <div class="nm-shop-loop-details">
    	<?php if ( $nm_globals['wishlist_enabled'] ) : ?>
        <div class="nm-shop-loop-wishlist-button"><?php nm_wishlist_button(); ?></div>
        <?php endif; ?>
        
        <?php
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * NM: Removed - @hooked woocommerce_template_loop_product_title - 10
             * NM: Added - @hooked nm_template_loop_product_title - 10
             * NM: Added - @hooked woocommerce_template_loop_rating - 15
             */
            do_action( 'woocommerce_shop_loop_item_title' );
        ?>
        
        <div class="nm-shop-loop-after-title <?php echo esc_attr( $nm_theme_options['product_action_link_layout'] ); ?>">
			<div class="nm-shop-loop-price">
                <?php
                    /**
                     * Hook: woocommerce_after_shop_loop_item_title.
                     *
                     * NM: Removed - @hooked woocommerce_template_loop_rating - 5
                     * @hooked woocommerce_template_loop_price - 10
                     */
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
            </div>
            
            <div class="nm-shop-loop-actions">
				<?php
                    if ( $nm_theme_options['product_quickview'] && $nm_theme_options['product_quickview_link'] ) {
                        echo apply_filters( 'nm_product_quickview_link', '<a href="' . esc_url( get_permalink() ) . '" class="nm-quickview-btn">' . esc_html__( 'Show more', 'nm-framework' ) . '</a>' );
                    }
                    
                    /**
                     * Hook: woocommerce_after_shop_loop_item.
                     *
                     * NM: Removed - @hooked woocommerce_template_loop_product_link_close - 5
                     * @hooked woocommerce_template_loop_add_to_cart - 10
                     */
                    do_action( 'woocommerce_after_shop_loop_item' );
                ?>
            </div>
        </div>
    </div>
</li>
