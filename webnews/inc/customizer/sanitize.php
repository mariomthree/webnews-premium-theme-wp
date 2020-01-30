<?php
/**
 * Sanitization functions.
 *
 * @package webnews
 */

    function webnews_sanitize_checkbox( $checked ) {

        return  isset( $checked ) && true === $checked  ? true : false ;

    }

    function webnews_sanitize_select( $input, $setting ) {

        $input = sanitize_text_field( $input );

        $choices = $setting->manager->get_control( $setting->id )->choices;

        return array_key_exists( $input, $choices ) ? $input : $setting->default;

    }
