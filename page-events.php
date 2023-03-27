<?php

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="generic-content events-page side-spacing">
            <div class="front-page-events">
                <?php
                $today = date('Ymd');
                $homepageEvents = new WP_Query(array(
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
    </div>


<?php
};

get_footer();
?>