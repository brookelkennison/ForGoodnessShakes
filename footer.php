<footer class="site-footer">
    <div class="footer-logo">
        <img src="<?php echo get_theme_file_uri('./assets/footer-logo.png') ?>" alt="For Goodness Shakes Logo Footer" />
    </div>
    <div class="footer-container">
        <div class="column">
            <div class="footer-social">
                <a href="https://www.facebook.com/shakes4wabash"><img src="<?php echo get_theme_file_uri('./assets/facebook.png') ?>" alt="facebook"></a>
                <a href="https://www.instagram.com/shakes4wabash/"><img src="<?php echo get_theme_file_uri('./assets/instagram.png') ?>" alt="instagram"></a>
                <a href="<?php echo  site_url() . '/contact' ?>"><button>contact</button></a>
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
                    <a href="<?php echo site_url() . '/' . $page->post_name ?>">
                        <?php echo $page->post_title; ?>
                    </a>
                </p>
            <?php } ?>
        </div>
        <div class="column footer-heading">
            <h2><?php echo get_theme_mod('main_call_to_action_text') ?></h2>
        </div>
        <?php
        $aboutUsImage = get_theme_mod('about_us_image');
        $aboutUsImage_id = attachment_url_to_postid($aboutUsImage);
        $aboutUsImage_alt = get_post_meta($aboutUsImage_id, '_wp_attachment_image_alt', true);
        ?>
        <div class="column footer-image">
            <img src="<?php echo $aboutUsImage ?>" alt="<?php echo $aboutUsImage_alt ?>" />
        </div>
    </div>
</footer>
<p class="website-copyright">Designed and Developed by Kennison Creative | © Copyright 2023 For Goodness Shakes - All Rights Reserved </p>
<?php wp_footer(); ?>
</body>

</html>