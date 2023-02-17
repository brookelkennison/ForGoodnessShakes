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
                <img src="<?php echo get_theme_file_uri('./assets/logo.png') ?>" alt="logo">
                <nav class="desktop-navigation">
                    <div class="menu-items">
                        <p>
                            events
                        </p>
                        <p>
                            about
                        </p>
                        <p>
                            contact
                        </p>
                        <p>
                            milkshake menu
                        </p>
                    </div>
                    <div class="menu-social">
                        <img src="<?php echo get_theme_file_uri('./assets/facebook.png') ?>" alt="facebook">
                        <img src="<?php echo get_theme_file_uri('./assets/instagram.png') ?>" alt="instagram">
                    </div>
                </nav>
                <nav class="mobile-navigation">
                    <img src="<?php echo get_theme_file_uri('./assets/menu-rounded.png') ?>" alt="mobile-menu">
                </nav>
            </div>
        </div>
    </header>