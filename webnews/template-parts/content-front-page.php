<?php
/**
 * Main Banner
 *
 * @package WebNews
 *
 *
 */

//Main Banner
if (get_theme_mod('show_main_news',true)) {
	get_template_part('template-parts/frontpage-parts/main-banner');
}

//Featured Posts
if(get_theme_mod('show_featured_news',true)){
	get_template_part('template-parts/frontpage-parts/featured');
}

//Latest Posts
if(get_theme_mod('frontpage_show_latest_posts',true)){
	get_template_part('template-parts/frontpage-parts/lastet');
}