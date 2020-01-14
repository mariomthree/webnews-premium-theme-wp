<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebNews
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="">
		
	</div>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?phpweb news_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php webnews_post_thumbnail(); ?>
	<div class="entry-category pt-2">
		<?php the_category(); ?>
	</div>
	<div class="entry-content">
		<?php
		if (is_singular())
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading <span class="screen-reader-text"> "%s"</span>', 'webnews' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	else
		 echo substr(strip_tags(get_the_content()),0,120).' [...]'; 

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webnews' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php webnews_edit_post_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->