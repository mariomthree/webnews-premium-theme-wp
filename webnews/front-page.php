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
<div class="container-fluid scroll">
	<div class="scrollUp-container">
			<div id="scrollUp" class="scrollUp">
				<i class="fa fa-angle-up"></i>
			</div>
	</div>
</div>

<?php
	get_footer();

