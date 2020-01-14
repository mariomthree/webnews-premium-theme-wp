<?php  
/**
 * WebNews Theme Support
 *
 * @package WebNews
 */

function get_headerLayout()
{
	$layout = 'header-default';
	
	if( is_active_sidebar( 'topbar-left' ) || is_active_sidebar( 'topbar-right' ) || is_active_sidebar('header-right') ){
	   $layout = 'header-complete'; //header with sidebar topbar-left or topbar-right and header-right active
	}
	
	return $layout;

}

function webnews_get_posts($number_of_posts, $category = '0'){
    
        if(is_front_page()) {
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        }else {
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        }

    	$ins_args = array(
            'post_type'      => 'post',
            'posts_per_page' => absint($number_of_posts),
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        );


        if (absint($category) > 0) {
            $ins_args['cat'] = absint($category);
        }

        $all_posts = new WP_Query($ins_args);
        return $all_posts;

    }
   


