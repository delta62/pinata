<?php

// Custom includes

require_once(dirname(__FILE__) . '/inc/pinata-nav-menu.php');


// WooCommerce support

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');
add_theme_support('woocommerce');

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
add_action('wp_enqueue_scripts', 'pinata_remove_scripts');


// Piñata menus

function pinata_register_menus() {
    register_nav_menus(array(
        'primary-nav' => __('Primary Navigation'),
        'footer-nav'  => __('Footer Navigation')
    ));
}
add_action('init', 'pinata_register_menus');


// Custom header image
add_theme_support('custom-header');


// Custom sidebars
register_sidebar(array(
    'name'  => __('Floating Header'),
    'id'    => 'pinata_sidebar_header',
    'class' => 'sidebar-header'
));

register_sidebar(array(
    'name'  => __('Footer'),
    'id'    => 'pinata_sidebar_footer',
    'class' => 'sidebar-footer'
));

register_sidebar(array(
    'name'  => __('Left Column'),
    'id'    => 'pinata_sidebar_left',
    'class' => 'sidebar-left'
));
