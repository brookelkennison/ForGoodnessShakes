<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Title</title>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <?php if (has_custom_logo()) {
                    echo the_custom_logo();
                } else { ?>
                    <h1 class="site-title">
                        <a href="<?php echo site_url(); ?>">
                            <strong><?php echo get_bloginfo('name'); ?>
                            </strong>
                        </a>
                    </h1>
                <?php } ?>
                <nav class="desktop-navigation">
                    <div class="menu-items">
                        <?php if (has_nav_menu('main')) {
                            wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu'));
                        } ?>
                    </div>
                    <div class="menu-social">
                        <img src="<?php echo get_theme_file_uri('./assets/facebook.png') ?>" alt="facebook">
                        <img src="<?php echo get_theme_file_uri('./assets/instagram.png') ?>" alt="instagram">
                    </div>
                </nav>
                <img class="mobile-menu-icon" src="<?php echo get_theme_file_uri('./assets/menu-rounded.png') ?>" alt="Show" />
                <div class="mobile-menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
                </div>
            </div>
    </header>