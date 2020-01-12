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
    function webnews_get_number_views( $postID ) {
    
        $metaKey = 'webnews_number_post_views';
        $views = get_post_meta( $postID, $metaKey, true );
        $views = $views == '' ? '0' : $views;
        return $views;
    }

    function webnews_update_number_views($postID)
    {
        
        $metaKey = 'webnews_number_post_views';
        $views = get_post_meta( $postID, $metaKey, true );
        
        $count = ( empty( $views ) ? 0 : $views );
        $count++;
        
        update_post_meta( $postID, $metaKey, $count );
        
    }

    function webnews_entry_meta($show = ''){
       
        $author     = get_theme_mod('post_meta_author');
        $date       = get_theme_mod('post_meta_date');
        $views      = get_theme_mod('post_meta_views');
        $comments   = get_theme_mod('post_meta_comments');

        $output = '<h5>';
        if ($author && $show == 'author' || $show == '') {
            $output.='<i class="fa fa-user"></i>&nbsp;'. get_the_author();
        }
        if ($date && $show == 'date' || $show == '') {
            $output.=' <i class="fa fa-calendar"></i>&nbsp;'.get_the_date();
        }
        if ($views && $show == 'views' || $show == '') {
            $output.=' <i class="fa fa-eye"></i>&nbsp;'. esc_attr(webnews_get_number_views(get_the_ID()));
        }
        if ($comments && $show == 'comments' || $show == '') {
            $output.=' <i class="fa fa-comment"></i>&nbsp;'.get_comments_number();
        }
        $output.='</h5>';

        return $output;

    }


