<?php get_header(); ?>

<section class="">
    <div class="side-spacing cta">
        <h1>Traveling to serve you gourmet milkshakes</h1>
        <a class="center-text" href="<?php echo  site_url() . '/events' ?>">WE WILL SEE YOU THERE -></a>
    </div>
    <img class="truckstripe" src="<?php echo get_theme_file_uri('./assets/retro-stripe-and-truck.png') ?>" alt="" />
</section>
<hb></hb>
<section class="side-spacing">
    <div class="flex">
        <div class="slogan">
            <h2>We're all about...</h2>
            <h4>Doing something good by serving something great.</h4>
        </div>
        <div class="call-to-action">
            <img src="<?php echo get_theme_mod('about_us_image') ?>" alt="" />
            <a href="<?php echo  site_url() . '/about' ?>">COME SAY HI -></a>
        </div>
    </div>
    <p>The mission of For Goodness Shakes is to create and serve a delicious product. We want to give each and every one of our customers an opportunity to enjoy a sweet treat and help someone in need at the same time. By doing this we will bring the goodness of both ice cream and encouragement to every single person we serve. We believe it is our purpose to spread positivity in hopes that others will do the same.</p>
</section>
<hb></hb>
<section class=" side-spacing events">
    <img class="retro-corner" src="<?php echo get_theme_file_uri('./assets/retro-corner.png') ?>" alt="" />
    <div class="where-we-will-be move-up">
        <h2>Where we will be...</h2>
        <p>We are based out of Wabash, Indiana. We serve the entire state of Indiana and are available for private events. See below for our list of upcoming events.</p>
        <div class="front-page-events">
            <?php
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                    ),
                )
            ));
            if ($homepageEvents->have_posts()) {
                while ($homepageEvents->have_posts()) {
                    $homepageEvents->the_post(); ?>
                    <div class="event-summary">
                        <div class="event-date">
                            <span class="event-summary__day"><?php
                                                                $eventDate = new DateTime(get_field('event_date'));
                                                                echo $eventDate->format('d');
                                                                ?></span>
                            <span class="event-summary__month"><?php
                                                                $eventDate = new DateTime(get_field('event_date'));
                                                                echo $eventDate->format('M');
                                                                ?></span>
                        </div>
                        <div class="event-summary__content">
                            <h5 class="event-summary__title headline headline--tiny"><?php the_title() ?></h5>
                            <p><?php echo get_field('location') ?></p>
                        </div>
                    </div>
                <?php
                }
            } else { ?>
                <div>
                    <h5>No Upcoming Events</h5>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="move-up flex-column view-all-events">
        <a style="color: #ff914e" href="<?php echo  site_url() . '/events' ?>">SEE ALL EVENTS -></a>
        <a style="color: #e661c9" href="<?php echo  site_url() . '/contact' ?>">BOOK US FOR AN EVENT -></a>
    </div>
</section>
<section class="move-down">
    <div class="banner">
        <p>TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - </p>
        <p>TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - TRAVELING MILKSHAKES IN INDIANA - </p>
    </div>
    <hb></hb>
    <div class="milkshake-grid">
        <img src="<?php echo get_theme_file_uri('./assets/shake1.png') ?>" alt="" />
        <img src="<?php echo get_theme_file_uri('./assets/shake2.png') ?>" alt="" />
        <img src="<?php echo get_theme_file_uri('./assets/shake3.png') ?>" alt="" />
    </div>
    <hb></hb>
    <div class="side-spacing milkshakes">
        <div class="flex">
            <img class="smiley" src="<?php echo get_theme_file_uri('./assets/smiley.png') ?>" alt="" />
            <div class="flex-column">
                <h2>Our milkshakes...</h2>
                <p>Handcrafted milkshakes topped with syrup, sprinkles, cookies, whipped cream and more!</p>
            </div>
        </div>
        <a href="<?php echo  site_url() . '/milkshake-menu' ?>">SEE THE MENU -></a>
    </div>
</section>
<hb class="move-down"></hb>
<section class="giving-back move-down">
    <img src="<?php echo get_theme_file_uri('./assets/giving-back.png') ?>" alt="" />
    <div class="side-spacing">
        <p>By providing a quality product to our customers, we promise to donate 30% of our proceeds to areas of need in our community ...</p>
        <a href="<?php echo  site_url() . '/events' ?>">HELP US MAKE A DIFFERENCE -></a>
    </div>
</section>

<?php get_footer(); ?>