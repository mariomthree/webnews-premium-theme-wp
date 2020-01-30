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

		<?php 
			$archive_style = get_theme_mod('archive_style','archive-02');
			$content_view = get_theme_mod('archive_content','summary');
			
			if ($archive_style == 'archive-01') {	
				archive_01($content_view);
			}

			if ($archive_style == 'archive-02') {
				archive_02($content_view);
			}

		 ?>
		<div class="container border-bottom py-3"></div>

</article>
<?php } ?>