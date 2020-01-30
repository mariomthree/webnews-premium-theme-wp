<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="">
		
	</div>

	<header class="entry-header">
		<div class="categorys py-3"><?php webnews_get_category(); ?></div>
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );

			if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta pb-4">
				<?php webnews_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php webnews_post_thumbnail(); ?>
	
	<div class="entry-content">
		<?php

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

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-md-4 col-sm-12">
					<div class="tags-list">
						<?php webnews_entry_tags(); ?>
					</div>
				</div>
				<div class="col-xl-8 col-md-8 col-sm-12">
						<?php echo webnews_entry_share(); ?>
				</div>
			</div>
		</div>
		<?php webnews_edit_post_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->