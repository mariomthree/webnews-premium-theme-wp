<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WebNews
 */

if ( ! function_exists( 'webnews_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function webnews_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;

    function webnews_entry_author(){

    	$author = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'webnews' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<i class="fa fa-user"></i>&nbsp; <span class="byline"> ' . $author . '</span>'; // WPCS: XSS OK.


    }

    function webnews_entry_date(){

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'webnews' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<i class="fa fa-calendar"></i>&nbsp; <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

    }

    function webnews_entry_number_views(){
    	echo ' <i class="fa fa-eye"></i>&nbsp;'.esc_attr(webnews_get_number_views(get_the_ID()));
    }

    function webnews_entry_number_comments(){
    	echo '<i class="fa fa-comment"></i>&nbsp;'.get_comments_number();
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

        echo $output;

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

    function webnews_edit_post_link(){
    	edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'webnews' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
    }

	function webnews_entry_tags() {
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'webnews' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links"><strong class="text-uppercase">Tags</strong>' . esc_html__( ': %1$s', 'webnews' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}

	function webnews_entry_share(){

        $content .= '<div class="share">';

        $title = get_the_title();
        $permalink = get_permalink();
        $img = get_the_post_thumbnail_url();

        $twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink.'&amp;via=?';
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
        $google = 'https://plus.google.com/share?url='.$permalink;
        $linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url='.$permalink.'&title=pinterest&summary='.$title.'&source='.$title;
        $pinterest = 'https://pinterest.com/pin/create/button/?url='.$permalink.'&media='.$img.'&description='.$title;

        $content .= '<ul class="list-unstyled list-inline">';
        if (get_theme_mod('share_twitter',true)) 
        $content .= '<li class="list-inline-item"><a class="btn btn-sm bg-twitter text-white" href="'.$twitter.'" target="_blank" rel="nofollow" title="twitter"><i class="fa fa-twitter"></i></a></li>';
        if (get_theme_mod('share_facebook',true)) 
        $content .= '<li class="list-inline-item"><a class="btn btn-sm bg-facebook text-white" href="'.$facebook.'" target="_blank" rel="nofollow" title="facebook"><i class="fa fa-facebook"></i></a></li>';
        if (get_theme_mod('share_google',true)) 
        $content .= '<li class="list-inline-item"><a class="btn btn-sm bg-googleplus text-white" href="'.$google.'" target="_blank" rel="nofollow" title="google plus"><i class="fa fa-google-plus"></i></a></li>';
        if (get_theme_mod('share_linkedin',true)) 
        $content .= '<li class="list-inline-item"><a class="btn btn-sm bg-linkedin text-white" href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
        if (get_theme_mod('share_pinterest',true)) 
        $content .= '<li class="list-inline-item"><a class="btn btn-sm bg-pinterest text-white" href="'.$pinterest.'" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>';
        
        $content .= '</ul></div><!--share -->';

        return $content;
}
?>

