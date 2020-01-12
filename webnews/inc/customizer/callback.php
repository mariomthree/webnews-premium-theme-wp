<?php
/**
 * Customizer callback functions for active_callback.
 *
 * @package WebNews
 */

/*
    function covernews_frontpage_content_status( $control ) {

        if ( 'page' == $control->manager->get_setting( 'show_on_front' )->value() ) {
            return true;
        } else {
            return false;
        }

    }*/


    function webnews_flash_posts_status( $control ) {

        if ( true == $control->manager->get_setting( 'show_flash_news' )->value() ) {
            return true;
        } else {
            return false;
        }

    }

    function webnews_main_banner_status( $control ) {

        if ( true == $control->manager->get_setting( 'show_main_news' )->value() ) {
            return true;
        } else {
            return false;
        }

    }


    function webnews_featured_news_status( $control ) {

        if ( true == $control->manager->get_setting( 'show_featured_news' )->value() ) {
            return true;
        } else {
            return false;
        }

    }


    function webnews_featured_product_status( $control ) {

        if ( true == $control->manager->get_setting( 'show_featured_products' )->value() ) {
            return true;
        } else {
            return false;
        }

    }


    function webnews_latest_news_status( $control ) {

        if ( true == $control->manager->get_setting( 'frontpage_show_latest_posts' )->value() ) {
            return true;
        } else {
            return false;
        }

    }

    function webnews_archive_image_status( $control ) {

        if ( 'archive-layout-list' == $control->manager->get_setting( 'archive_layout' )->value() ) {
            return true;
        } else {
            return false;
        }

    }


    function webnews_related_posts_status( $control ) {

        if ( true == $control->manager->get_setting( 'single_show_related_posts' )->value() ) {
            return true;
        } else {
            return false;
        }

    }
/*
    function covernews_mailchimp_subscriptions_status( $control ) {

        if ( true == $control->manager->get_setting( 'footer_show_mailchimp_subscriptions' )->value() ) {
            return true;
        } else {
            return false;
        }

    }


    function covernews_footer_instagram_posts_status( $control ) {

        if ( true == $control->manager->get_setting( 'footer_show_instagram_post_carousel' )->value() ) {
            return true;
        } else {
            return false;
        }

    }
*/


