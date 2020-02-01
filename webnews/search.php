<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package webnews
 */

$header_img = has_header_image() ? get_header_image() : get_template_directory_uri().'/assets/img/bg-header.jpg';
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			
			<div style="background-image: url(<?php echo esc_attr($header_img); ?>);">
				<header class="page-header p-5">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'webnews' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->
			</div>

			<div class="container-fluid py-5 px-4">
				<div class="row">
					<div class="col-xl-8 col-md-8 col-sm-12">
						<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
					</div>
					<div class="content-search col-xl-4 col-md-4 col-sm-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
