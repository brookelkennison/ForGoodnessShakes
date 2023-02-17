<footer class="site-footer">
    <div class="container">
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="main-navigation">
                <?php
                if (has_nav_menu('nav-menu-left')) {
                    wp_nav_menu(array(
                        'theme_location' => 'nav-menu-left'
                    ));
                }
                if (has_nav_menu('nav-menu-right')) {
                    wp_nav_menu(array(
                        'theme_location' => 'nav-menu-right'
                    ));
                }
                ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>