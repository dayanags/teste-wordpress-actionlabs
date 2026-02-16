<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-flex">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-box">LOGO CLIENTE</a>
        <nav class="site-navigation">
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false)); ?>
        </nav>
    </div>
</header>