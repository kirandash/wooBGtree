<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Remove woocommerce_cross_sell_display
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10  );

// Remove sorting
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


add_filter( 'loop_shop_columns', function(){ return 2; } );


remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION
