<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebNews
 */
if(is_singular())
	get_template_part('template-parts/content-single');
else
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header pb-3">
		<?php
			the_title( '<h2 class="entry-title pb-1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php webnews_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php webnews_post_thumbnail(); ?>
	
	<h5 class="category pt-2">
		<?php the_category(); ?>
	</h5>

	<div class="entry-content">
		<a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark" class="text-dark">
			<?php echo substr(strip_tags(get_the_content()),0,250).' [...]'; ?>
		</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php webnews_edit_post_link(); ?>
	</footer><!-- .entry-footer -->

</article>
