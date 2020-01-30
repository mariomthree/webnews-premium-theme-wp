<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */
if(is_singular()){
	get_template_part('template-parts/content-single');
}else{
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">

		<div class="webnews-col-40">
			<div class="img-center col-40">
				<?php webnews_post_thumbnail(); ?>	
			</div>
			
		</div>
		
		<div class="webnews-col-60 col-md">
			
			<header class="entry-header">
				<div class="categorys"><?php webnews_get_category(); ?></div>
				<?php
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php webnews_entry_meta(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>

			</header><!-- .entry-header -->
			
			<div class="entry-content">
				<a href="<?php the_permalink() ?>" rel="bookmark" class="text-dark">
					<?php echo substr(strip_tags(get_the_content()),0,233).' [...]'; ?>
				</a>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php webnews_edit_post_link(); ?>
			</footer><!-- .entry-footer -->
		
		</div>

</div>
		<div class="container border-bottom py-3"></div>



</article>
<?php } ?>