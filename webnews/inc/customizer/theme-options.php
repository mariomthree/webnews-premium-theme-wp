<?php
/**
 * Option Panel
 *
 * @package webnews
 */

require get_template_directory().'/inc/customizer/frontpage-options.php';


// Options Panel.
$wp_customize->add_panel('theme_option_panel',
	array(
		'title'      => esc_html__('Theme Options', 'webnews'),
		'priority'   => 200,
		'capability' => 'edit_theme_options',
	)
);

// Breadcrumb #1
/*
$wp_customize->add_section('site_breadcrumb_settings',
    array(
        'title'      => esc_html__('Breadcrumb Options', 'webnews'),
        'priority'   => 49,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('enable_breadcrumb',
    array(
        'default'           => false,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control('enable_breadcrumb',
    array(
        'label'    => esc_html__('Show breadcrumbs', 'webnews'),
        'section'  => 'site_breadcrumb_settings',
        'type'     => 'checkbox',
        'priority' => 10,
    )
);
*/
//End of Breadcrumb

//Blog Sidebar #1

$wp_customize->add_section('blog_sidebar',
    array(
        'title'         => 'Blog Sidebar',
        'priority'      =>  1,
        'capability'    =>  'edit_theme_options',
        'panel'         => 'theme_option_panel',
    )
);

$wp_customize->add_setting(
    'blog_sidebar_position',
    array(
        'default'           => 'right',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control(
    'blog_sidebar_position',
    array(
        'label'         => esc_html__('Blog Sidebar','webnews'),
        'description'   => esc_html__('select sidebar position','webnews'),
        'section'       => 'blog_sidebar',
        'type'          => 'select',
        'choices'       =>  array(
            'left'  => esc_html__('Left','webnews'),
            'right' => esc_html__('Right','webnews'),
            'none'  => esc_html__('None','webnews')
        ),
        'priority'       => 1,
    )
);
//End of Blog Sidebar

# Archive Settings 

$wp_customize->add_section('archive_settings',
    array(
        'title'      => esc_html__('Archive Settings', 'webnews'),
        'priority'   => 2,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);
$wp_customize->add_setting('archive_style',
    array(
        'default'           => 'archive-02',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'archive_style',
    array(
        'label'       => esc_html__('Archive Style', 'webnews'),
        'section'     => 'archive_settings',
        'type'        => 'select',
        'choices'               => array(
            'archive-01' => esc_html__('Archive 01', 'webnews' ),
            'archive-02' => esc_html__('Archive 02', 'webnews' ),
        ),
        'priority'    => 1,
    )
);

$wp_customize->add_setting('archive_content',
    array(
        'default'           => 'archive-02',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_select',
    )
);

$wp_customize->add_control( 'archive_content',
    array(
        'label'       => esc_html__('Archive Style', 'webnews'),
        'section'     => 'archive_settings',
        'type'        => 'select',
        'choices'               => array(
            'archive-01' => esc_html__('Archive 01', 'webnews' ),
            'archive-02' => esc_html__('Archive 02', 'webnews' ),
        ),
        'priority'    => 1,
    )
);

//End of Archive Settings
//Post Meta #2
   
   $wp_customize->add_section('post_meta',
        array(
            'title'         => 'Post Meta',
            'priority'      => 2,
            'capability'    => 'edit_theme_options',
            'panel'         => 'theme_option_panel',
        ),
    );

   $wp_customize->add_setting(
        'post_meta_author',
        array(
            'default'           => true,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'webnews_sanitize_checkbox',
        ),
   );


   $wp_customize->add_control(
        'post_meta_author',
        array(
            'label'       => esc_html__('Show Author', 'webnews'),
            'description' => '',
            'section'     => 'post_meta',
            'type'        => 'checkbox',
            'priority'    => 1,
        )
   );   

   $wp_customize->add_setting(
        'post_meta_date',
        array(
            'default'           => true,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'webnews_sanitize_checkbox',
        ),
   );


   $wp_customize->add_control(
        'post_meta_date',
        array(
            'label'       => esc_html__('Show Date', 'webnews'),
            'description' => '',
            'section'     => 'post_meta',
            'type'        => 'checkbox',
            'priority'    => 2,
        )
   );   

   $wp_customize->add_setting(
        'post_meta_views',
        array(
            'default'           => true,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'webnews_sanitize_checkbox',
        ),
   );


   $wp_customize->add_control(
        'post_meta_views',
        array(
            'label'       => esc_html__('Show Views', 'webnews'),
            'description' => '',
            'section'     => 'post_meta',
            'type'        => 'checkbox',
            'priority'    => 3,
        )
   );   

   $wp_customize->add_setting(
        'post_meta_author',
        array(
            'default'           => true,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'webnews_sanitize_checkbox',
        ),
   );


   $wp_customize->add_control(
        'post_meta_views',
        array(
            'label'       => esc_html__('Show Views', 'webnews'),
            'description' => '',
            'section'     => 'post_meta',
            'type'        => 'checkbox',
            'priority'    => 4,
        )
   );

    $wp_customize->add_setting(
        'post_meta_comments',
        array(
            'default'           => true,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'webnews_sanitize_checkbox',
        ),
   );

   $wp_customize->add_control(
        'post_meta_comments',
        array(
            'label'       => esc_html__('Show Comments', 'webnews'),
            'description' => '',
            'section'     => 'post_meta',
            'type'        => 'checkbox',
            'priority'    => 5,
        )
   );

//End of Post Meta


//Share Settings #3
$wp_customize->add_section('share_setting',
    array(
        'title'         => 'Share Settings',
        'priority'      => 3,
        'capability'    =>  'edit_theme_options',
        'panel'         => 'theme_option_panel',
    )
);
 
$wp_customize->add_setting('share_facebook',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'share_facebook',
    array(
        'label'       => esc_html__('Share to Facebook', 'webnews'),
        'description' => '',
        'section'     => 'share_setting',
        'type'        => 'checkbox',
        'priority'    => 1,
    )
);

$wp_customize->add_setting('share_twitter',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'share_twitter',
    array(
        'label'       => esc_html__('Share to Twitter', 'webnews'),
        'description' => '',
        'section'     => 'share_setting',
        'type'        => 'checkbox',
        'priority'    => 2,
    )
);

$wp_customize->add_setting('share_google',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'share_google',
    array(
        'label'       => esc_html__('Share to Google', 'webnews'),
        'description' => '',
        'section'     => 'share_setting',
        'type'        => 'checkbox',
        'priority'    => 3,
    )
);

$wp_customize->add_setting('share_linkedin',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'share_linkedin',
    array(
        'label'       => esc_html__('Share to Linkedin', 'webnews'),
        'description' => '',
        'section'     => 'share_setting',
        'type'        => 'checkbox',
        'priority'    => 3,
    )
);

$wp_customize->add_setting('share_pinterest',
    array(
        'default'           => true,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'webnews_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'share_pinterest',
    array(
        'label'       => esc_html__('Share to Pinterest', 'webnews'),
        'description' => '',
        'section'     => 'share_setting',
        'type'        => 'checkbox',
        'priority'    => 4,
    )
);

//End of Share