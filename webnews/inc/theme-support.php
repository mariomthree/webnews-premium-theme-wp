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
//section add new category
function color_field_add_category( $taxonomy ) {
    ?>
    <div class="form-field">
        <label for="category-color">Category Color</label>
        <input name="category_color" value="" class="category-colorpicker" id="category-color" />
        <p>Select a category color for help users differentiate the category</p>
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'color_field_add_category' );

//section edit category
function color_field_edit_category( $term ) {
    $color = get_term_meta( $term->term_id, 'category_color', true );
    $color = ( ! empty( $color ) ) ? "#{$color}" : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category-color">Category Color</label></th>
        <td>
            <input name="category_color" value="<?php echo $color; ?>" class="category-colorpicker" id="category-color" />
            <p class="description">Select a category color for help users differentiate the category.</p>
        </td>
    </tr>
    <?php
}
add_action( 'category_edit_form_fields', 'color_field_edit_category' );

//functions for save categorys color
function save_term_meta( $term_id ) {
    if( isset( $_POST['category_color'] ) && ! empty( $_POST['category_color'] ) ) {
        update_term_meta( $term_id, 'category_color', sanitize_hex_color_no_hash( $_POST['category_color'] ) );
    } else {
        delete_term_meta( $term_id, 'category_color' );
    }
}

add_action( 'created_category', 'save_term_meta' ); 
add_action( 'edited_category',  'save_term_meta' );

function category_color_enqueue( $taxonomy ) {
    if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) {
        return;
    }
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_style( 'wp-color-picker' );

}
add_action( 'admin_enqueue_scripts', 'category_color_enqueue' );

function color_init_inline() {
    if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) {
        return;
    }
    ?>
    <script>
        jQuery( document ).ready( function( $ ) {

            $( '.category-colorpicker' ).wpColorPicker();

        } );
    </script>
    <?php
}
add_action( 'admin_print_scripts', 'color_init_inline', 20 );
   
//return a category and background color correspondent
function  webnews_get_category(){ 

    foreach ( get_the_category() as $category) { 

        $color = get_term_meta( $category->term_id, 'category_color', true );
        $style = $color == true ? "style = background-color:#$color" : "style = background-color:#000000";
            
        ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id));?>" <?php echo esc_attr($style) ?> >
                <?php echo esc_attr($category->name); ?>
            </a>
        <?php
    }

}