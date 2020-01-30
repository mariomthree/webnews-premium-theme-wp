<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container-fluid py-5 px-4">
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
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
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
