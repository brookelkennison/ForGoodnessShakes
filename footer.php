<footer class="site-footer">
    <div class="footer-logo">
        <img src="<?php echo get_theme_file_uri('./assets/footer-logo.png') ?>" alt="" />
    </div>
    <div class="footer-container">
        <div class="column">
            <div class="footer-social">
                <img src="<?php echo get_theme_file_uri('./assets/facebook.png') ?>" alt="facebook">
                <img src="<?php echo get_theme_file_uri('./assets/instagram.png') ?>" alt="instagram">
                <button>contact</button>
            </div>
            <?php $args = array(
                'sort_order' => 'asc',
                'sort_column' => 'post_title',
                'hierarchical' => 1,
                'number' => '',
                'offset' => 0,
                'post_type' => 'page',
                'post_status' => 'publish'
            );
            $pages = get_pages($args); // get all pages based on supplied args
            foreach ($pages as $page) { // $pages is array of object
                // $page_template = get_post_meta($page->ID, '_wp_page_template', true); // Page template stored in "_wp_page_template"
            ?> <p>
                    <a href="<?php echo $page->guid ?>">
                        <?php echo $page->post_title; ?>
                    </a>
                </p>
            <?php } ?>
        </div>
        <div class="column footer-heading">
            <h2>The best milkshakes for a good cause in Indiana</h2>
        </div>
        <div class="column footer-image">
            <img src="<?php echo get_theme_mod('about_us_image') ?>" alt="" />
        </div>
    </div>
</footer>
<p class="website-copyright">Designed and Developed by Kennison Creative | © Copyright 2023 For Goodness Shakes - All Rights Reserved </p>
<?php wp_footer(); ?>
</body>

</html>