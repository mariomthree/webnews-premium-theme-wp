<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */
$header_img = has_header_image() ? get_header_image() : get_template_directory_uri().'/assets/img/bg-header.jpg';
$page_title = str_replace('Category:', '', get_the_title());
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div style="background-image: url(<?php echo $header_img;?>);">
				<header class="entry-header p-5">
					<?php echo '<h1 class="entry-title">'.$page_title.'</h1>' ?>
				</header><!-- .entry-header -->
			</div>
			<div class="container-fluid p-5">
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
								
								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
							<?php if (get_theme_mod('blog_sidebar_position','right') == 'right') : ?>
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
