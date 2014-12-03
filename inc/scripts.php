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
}
add_action('wp_enqueue_scripts', 'pinata_remove_scripts', 10);

function pinata_enqueue_scripts() {
    $app_path = get_template_directory_uri() . '/js';
    wp_register_script('requirejs', "$app_path/lib/requirejs/require.js");
    wp_localize_script('requirejs', 'require', array(
        'baseUrl' => $app_path,
        'deps'    => array('main')
    ));
    wp_enqueue_script('requirejs');
}
add_action('wp_enqueue_scripts', 'pinata_enqueue_scripts', 20);

