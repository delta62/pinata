<?php

// Plugin client-side cleanup
function pinata_remove_scripts() {
    // Social Widget
    wp_dequeue_style('social-widget');

    // WooCommerce
    wp_dequeue_style('woocommerce-layout');
    wp_dequeue_style('woocommerce-smallscreen');
    wp_dequeue_style('woocommerce_chosen_styles');
    wp_dequeue_style('woocommerce-general');

    wp_dequeue_script( 'wc_price_slider' );
    wp_dequeue_script( 'wc-single-product' );
    wp_dequeue_script( 'wc-add-to-cart' );
    wp_dequeue_script( 'wc-cart-fragments' );
    wp_dequeue_script( 'wc-checkout' );
    wp_dequeue_script( 'wc-add-to-cart-variation' );
    wp_dequeue_script( 'wc-single-product' );
    wp_dequeue_script( 'wc-cart' );
    wp_dequeue_script( 'wc-chosen' );
    wp_dequeue_script( 'woocommerce' );
    wp_dequeue_script( 'prettyPhoto' );
    wp_dequeue_script( 'prettyPhoto-init' );
    wp_dequeue_script( 'jquery-blockui' );
    wp_dequeue_script( 'jquery-placeholder' );
    wp_dequeue_script( 'fancybox' );
    wp_dequeue_script( 'jqueryui' );
}
add_action('wp_enqueue_scripts', 'pinata_remove_scripts', 10);

function pinata_enqueue_scripts() {
    $app_path = get_template_directory_uri() . '/js';
    wp_register_script('requirejs', "$app_path/lib/requirejs/require.js");
    wp_localize_script('requirejs', 'require', array(
        'baseUrl' => $app_path,
        'deps'    => array('main'),
        'paths'   => array(
            'angular' => 'lib/angular/angular'
        )
    ));
    wp_enqueue_script('requirejs');
}
add_action('wp_enqueue_scripts', 'pinata_enqueue_scripts', 20);

