<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title() . ' | ' . bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css"
          rel="stylesheet" />
</head>
<body <?php body_class(); ?>>
    <section class="sidebar-top">
    <?php dynamic_sidebar('pinata_sidebar_header'); ?>
    </section>
    <div class="page">
        <header class="site-header group">
            <?php if (get_header_image()): ?>
                <a href="<?php echo esc_url(home_url('/'));?>" class="site-logo">
                    <img src="<?php header_image(); ?>"
                         alt="<?php bloginfo('name'); ?>" />
                </a>
            <?php endif; ?>
            <h1 class="site-name"><a href="<?php echo esc_url(home_url('/'));?>"
                   title="<?php esc_attr(get_bloginfo('name', 'display'));?>"
                   rel="home">
                        <?php bloginfo('name'); ?>
            </a></h1>
            <h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
            <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary-nav',
                    'container'       => 'nav',
                    'container_class' => 'primary-nav centering group',
                    'walker'          => new Pinata_Nav_Menu(),
                    'link_before'     => '<span>',
                    'link_after'      => '</span>'
                ));
            ?>
        </header>

