<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */
$header_img = has_header_image() ? get_header_image() : get_template_directory_uri().'/assets/img/bg-header.jpg';
get_header();

$page_title = explode(':', get_the_archive_title())[1];
$sidebar = get_theme_mod('blog_sidebar_position','right');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div style="background-image: url(<?php echo sprintf($header_img); ?>);">
			<header class="page-header p-5">
				<?php
					echo '<h1 class="page-title">'.$page_title.'</h1>';
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		</div>

		<div class="container-fluid webnews-container py-5 px-3">
			<div class="row">
				<?php if ($sidebar == 'left') : ?>
				<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
					<?php get_sidebar(); ?>
				</div>
				<?php 
					endif; 
					if ($sidebar == 'none') :
				?>
				<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
					<?php else: ?>
				<div class="col-xl-8 col-md-8 col-lg-8 col-sm-12">
					<?php
					endif;
				 	if ( have_posts() ) : ?>

					<?php
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

				endif; ?>
				</div>

				<?php if ($sidebar == 'right') : ?>
					<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
						<?php get_sidebar(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
