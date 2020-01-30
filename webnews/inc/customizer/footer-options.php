<?php
/**
 * Footer options section
 *
 * @package webnews
 */

# Footer Options Panel.

$wp_customize->add_panel('footer_option_panel',
    array(
        'title'      => esc_html__('Footer', 'webnews'),
        'priority'   => 80,
        'capability' => 'edit_theme_options',
    )
);

// Footer Style #1

$wp_customize->add_section('footer_style',
    array(
        'title'      => esc_html__('Footer Style', 'webnews'),
        'priority'   => 1,
        'capability' => 'edit_theme_options',
        'panel'      => 'footer_option_panel',
    )
);
$wp_customize->add_setting('footer_num_column_style',
    array(
        'default'           => 'column-three',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'footer_num_column_style',
    array(
        'label'       => esc_html__('Number of collumn', 'webnews'),
        'description' => esc_html__('select number of columnn in footer', 'webnews'),
        'section'     => 'footer_style',
        'type'        => 'select',
        'choices'               => array(
            'column-four' => esc_html__('4 Column', 'webnews' ),
            'column-three' => esc_html__('3 Column', 'webnews' ),
            'column-none' => esc_html__('Hidden Column', 'webnews' )
        ),
        'priority'    => 1,
    )
);

// End of Footer Style.

$wp_customize->add_section('footer_copyright',
    array(
        'title'      => esc_html__('Footer Copyright', 'webnews'),
        'priority'   => 2,
        'capability' => 'edit_theme_options',
        'panel'      => 'footer_option_panel',
    )
);

$wp_customize->add_setting('footer_copyright',
    array(
        'default'           => __('', 'webnews'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('footer_copyright',
    array(
        'label'    => esc_html__('Footer Copyright Text', 'webnews'),
        'description' => 'Write here your copyright',
        'section'  => 'footer_copyright',
        'type'     => 'textarea',
        'priority' => 2,
        'active_callback' => 'webnews_main_banner_status'

    )
);

