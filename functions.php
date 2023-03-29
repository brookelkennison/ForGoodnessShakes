<?php
if (!is_admin()) {
    wp_enqueue_style('lilac_pig_main_styles', get_theme_file_uri('/css/styles.css'));
}

wp_enqueue_script('auburn-javascript', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menus(
        array(
            'main' => __('Main Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

function wordpress_customizer($wp_customize)
{
    $wp_customize->remove_section('settings');
    // About Us
    $wp_customize->add_section(
        'main_section_options',
        array(
            'title' => __('Main Section', 'main_section')
        )
    );

    $wp_customize->add_setting(
        'main_call_to_action_text',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'  => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'main_text_body',
            array(
                'label'    => __('Call to Action Text', 'main_section'),
                'section'  => 'main_section_options',
                'settings' => 'main_call_to_action_text',
                'type'     => 'text'
            )
        )
    );

    // About Us
    $wp_customize->add_section(
        'about_us_options',
        array(
            'title' => __('About Us', 'about_us')
        )
    );

    $wp_customize->add_setting(
        'about_us_image',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'  => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'about_us_image',
            array(
                'label' => __('About Us Image', 'about_us'),
                'settings' => 'about_us_image',
                'section' => 'about_us_options'
            )
        )
    );

    // Giving Back
    $wp_customize->add_section(
        'giving_back_options',
        array(
            'title' => __('Giving Back', 'giving_back_section')
        )
    );

    $wp_customize->add_setting(
        'giving_back_image',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'  => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'giving_back_image',
            array(
                'label' => __('Giving Back Image', 'giving_back'),
                'settings' => 'giving_back_image',
                'section' => 'giving_back_options'
            )
        )
    );

    // Milkshakes
    $wp_customize->add_section(
        'milkshakes_options',
        array(
            'title' => __('Milkshakes', 'milkshakes_section')
        )
    );

    $wp_customize->add_setting(
        'milkshakes_image',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'  => 'postMessage',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'milkshakes_image',
            array(
                'label' => __('Milkshakes Image', 'milshakes'),
                'settings' => 'milkshakes_image',
                'section' => 'milkshakes_options',
            )
        )
    );
}

add_action('customize_register', 'wordpress_customizer');
