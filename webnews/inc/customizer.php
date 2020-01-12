<?php
/**
 * WebNews Theme Customizer
 *
 * @package WebNews
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
require get_template_directory().'/inc/customizer/callback.php';

function webnews_customize_register( $wp_customize ) {
	
	require get_template_directory().'/inc/customizer/control.php';
	require get_template_directory().'/inc/customizer/sanitize.php';


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'webnews_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'webnews_customize_partial_blogdescription',
		) );
	}

	require get_template_directory().'/inc/customizer/theme-options.php';

}
add_action( 'customize_register', 'webnews_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function webnews_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function webnews_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function webnews_customize_preview_js() {
	wp_enqueue_script( 'webnews-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'webnews_customize_preview_js' );

function webnews_get_option($key){
	echo esc_html(get_theme_mod($key));
}