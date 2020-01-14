<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WebNews
 */

if ( ! function_exists( 'webnews_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function webnews_posted_on() {
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
			esc_html_x( 'Posted on %s', 'post date', 'webnews' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'webnews_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function webnews_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'webnews' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'webnews_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function webnews_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'webnews' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'webnews' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'webnews' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'webnews' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'webnews' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

	}
endif;

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