 <?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header pb-3">
		<h5 class="category pt-2"><?php the_category(); ?></h5>
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

	<div class="entry-summary">
		<a class="text-dark" href="<?php the_permalink(); ?>">
			<?php the_excerpt(); ?>
		</a>		
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
