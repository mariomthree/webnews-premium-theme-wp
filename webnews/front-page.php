<?php
/**
 * Frontpage
 *
 * @package webnews
 *
 */

	get_header(); 
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php 
			get_template_part( 'template-parts/content', 'front-page' );
		?>
	</main><!-- #main -->
</div><!-- #primary -->


<?php
	get_footer();

