<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebNews
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container-fluid py-5">
				<div class="row">
					<?php if (get_theme_mod('blog_sidebar_position') == 'left') : ?>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<?php get_sidebar(); ?>
						</div>
						<?php 
							endif; 
							if (get_theme_mod('blog_sidebar_position') == 'none') :
						?>
						<div class="col-xl-12 col-md-12 col-sm-12">
							<?php else: ?>
						<div class="col-xl-8 col-md-8 col-sm-12">
							<?php
							endif;
							while ( have_posts() ) :
								the_post();
								webnews_update_number_views( get_the_ID() );
								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
				
					<?php if (get_theme_mod('blog_sidebar_position') == 'right') : ?>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<?php get_sidebar(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
