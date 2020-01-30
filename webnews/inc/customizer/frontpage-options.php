<?php
/**
 * Frontpage options section
 *
 * @package webnews
 */
require get_template_directory().'/inc/customizer/footer-options.php';

# Frontpage Options Panel.

$wp_customize->add_panel('frontpage_option_panel',
    array(
        'title'      => esc_html__('Frontpage Options', 'webnews'),
        'priority'   => 199,
        'capability' => 'edit_theme_options',
    )
);

// Frontpage Sidebar #1

$wp_customize->add_section('frontpage_sidebar',
    array(
        'title'      => esc_html__('Frontpage Sidebar', 'webnews'),
        'priority'   => 1,
        'capability' => 'edit_theme_options',
        'panel'      => 'frontpage_option_panel',
    )
);
$wp_customize->add_setting('frontpage_position_sidebar',
    array(
        'default'           => 'sidebar-none',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'frontpage_position_sidebar',
    array(
        'label'       => esc_html__('Sidebar Position', 'webnews'),
        'description' => esc_html__('select position of sidebar in frontpage', 'webnews'),
        'section'     => 'frontpage_sidebar',
        'type'        => 'select',
        'choices'               => array(
            'sidebar-right' => esc_html__( 'Right', 'webnews' ),
            'sidebar-left' => esc_html__( 'Left', 'webnews' ),
            'sidebar-none' => esc_html__( 'None', 'webnews' )
        ),
        'priority'    => 1,
    )
);

// End of Frontpage Sidebar.

// Main Bainner #2

$wp_customize->add_section('frontpage_main_banner_settings',
    array(
        'title'      => esc_html__('Main Banner', 'webnews'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'frontpage_option_panel',
    )
);

$wp_customize->add_setting('show_main_news',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_main_news',
    array(
        'label'    => esc_html__('Enable Main Banner', 'webnews'),
        'section'  => 'frontpage_main_banner_settings',
        'type'     => 'checkbox',
        'priority' => 1,
    )
);

$wp_customize->add_setting('frontpage_banner_style',
    array(
        'default'           => 'banner-01',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'frontpage_banner_style',
    array(
        'label'       => esc_html__('Banner Style', 'webnews'),
        'section'     => 'frontpage_main_banner_settings',
        'type'        => 'select',
        'choices'               => array(
            'banner-01' => esc_html__( 'Banner 01', 'webnews' ),
            'banner-02' => esc_html__( 'Banner 02', 'webnews' ),
            'banner-03' => esc_html__( 'Banner 03', 'webnews' )
        ),
        'priority'    => 2,
    )
);

$wp_customize->add_setting('main_news_slider_title',
    array(
        'default'           => __('Main Story', 'webnews'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('main_news_slider_title',
    array(
        'label'    => esc_html__('Main Story Slider Title', 'webnews'),
        'section'  => 'frontpage_main_banner_settings',
        'type'     => 'text',
        'priority' => 3,
        'active_callback' => 'webnews_main_banner_status'

    )
);

$wp_customize->add_setting('select_slider_news_category',
    array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(new Dropdown_Taxonomies_Control($wp_customize, 'select_slider_news_category',
    array(
        'label'       => esc_html__('Slider Posts Category', 'webnews'),
        'description' => esc_html__('select category to be shown on Main Story slider section', 'webnews'),
        'section'     => 'frontpage_main_banner_settings',
        'type'        => 'dropdown-taxonomies',
        'taxonomy'    => 'category',
        'priority'    => 3,
        'active_callback' => 'webnews_main_banner_status'
    )));


$wp_customize->add_setting('trending_title',
    array(
        'default'           => __("Trending Story", 'webnews'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('trending_title',
    array(
        'label'    => esc_html__("Trending Title", 'webnews'),
        'section'  => 'frontpage_main_banner_settings',
        'type'     => 'text',
        'priority' => 4,
        'active_callback' => 'webnews_main_banner_status'

    )
);

$wp_customize->add_setting('select_trending_news_category',
    array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(new Dropdown_Taxonomies_Control($wp_customize, 'select_trending_news_category',
    array(
        'label'       => esc_html__("Trending Category", 'webnews'),
        'description' => esc_html__("Select category to be shown on Trending", 'webnews'),
        'section'     => 'frontpage_main_banner_settings',
        'type'        => 'dropdown-taxonomies',
        'taxonomy'    => 'category',
        'priority'    => 4,
        'active_callback' => 'webnews_main_banner_status'
    )));

//End of Main Banner 



// Featured News #3

$wp_customize->add_section('frontpage_featured_news_settings',
    array(
        'title'      => esc_html__('Featured Posts', 'webnews'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'frontpage_option_panel',
    )
);

$wp_customize->add_setting('show_featured_news',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_featured_news',
    array(
        'label'    => esc_html__('Enable Featured New', 'webnews'),
        'section'  => 'frontpage_featured_news_settings',
        'type'     => 'checkbox',
        'priority' => 1,
    )
);
$wp_customize->add_setting('frontpage_featured_style',
    array(
        'default'           => 'featured-01',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'frontpage_featured_style',
    array(
        'label'       => esc_html__('Featured Style', 'webnews'),
        'section'     => 'frontpage_featured_news_settings',
        'type'        => 'select',
        'choices'               => array(
            'featured-01' => esc_html__( 'Featured 01', 'webnews' ),
            'featured-02' => esc_html__( 'Featured 02', 'webnews' ),
            'featured-03' => esc_html__( 'Featured 03', 'webnews' )
        ),
        'priority'    => 2,
    )
);
$wp_customize->add_setting('featured_news_title',
    array(
        'default'           => __('Featured Story', 'webnews'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('featured_news_title',
    array(
        'label'    => esc_html__('Featured Posts Title', 'webnews'),
        'section'  => 'frontpage_featured_news_settings',
        'type'     => 'text',
        'priority' => 3,
        'active_callback' => 'webnews_featured_news_status'
    )
);

$wp_customize->add_setting('select_featured_news_category',
    array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(new Dropdown_Taxonomies_Control($wp_customize, 'select_featured_news_category',
    array(
        'label'       => esc_html__('Featured Posts Category', 'webnews'),
        'description' => esc_html__('Select category to be shown on featured ', 'webnews'),
        'section'     => 'frontpage_featured_news_settings',
        'type'        => 'dropdown-taxonomies',
        'taxonomy'    => 'category',
        'priority'    => 3,
        'active_callback' => 'webnews_featured_news_status'
    )));

// End of Featured News 


// Latest Posts #5
$wp_customize->add_section('frontpage_latest_posts_settings',
    array(
        'title'      => esc_html__('Latest Posts', 'webnews'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'frontpage_option_panel',
    )
);

$wp_customize->add_setting('frontpage_show_latest_posts',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'frontpage_show_latest_posts',
    array(
        'label'    => __( 'Show Latest Posts above Footer', 'webnews' ),
        'section'  => 'frontpage_latest_posts_settings',
        'type'     => 'checkbox',
        'priority' => 100,
    )
);

$wp_customize->add_setting('frontpage_latest_posts_title',
    array(
        'default'           =>  __('You may have missed', 'webnews'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('frontpage_latest_posts_title',
    array(
        'label'    => esc_html__('Latest Posts Title', 'webnews'),
        'section'  => 'frontpage_latest_posts_settings',
        'type'     => 'text',
        'priority' => 100,
        'active_callback' => 'webnews_latest_news_status'

    )
);
//End of Latest Posts Options