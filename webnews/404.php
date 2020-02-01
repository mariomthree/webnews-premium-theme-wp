<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package webnews
 */
$header_img = has_header_image() ? get_header_image() : get_template_directory_uri().'/assets/img/bg-header.jpg';
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div style="background-image: url(<?php echo sprintf($header_img); ?>);">
					<header class="page-header p-5">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'webnews' ); ?></h1>
					</header><!-- .page-header -->
				</div>
				<div class="page-content">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-md-12 col-sm-12">
								<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'webnews' ); ?></p>
							<div class="justify-content-center d-flex">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div> 
				<div class="d-flex justify-content-end">
					<ul class="list-unstyled">
						<li>
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</li>
						<li>				
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'webnews' ); ?></h2>
								<ul>
									<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
									?>
								</ul>
							</div><!-- .widget -->
						</li>
						<li>
							<?php
							/* translators: %1$s: smiley */
							$webnews_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'webnews' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=0', "after_title=</h2>$webnews_archive_content" );
							?>
							
						</li>
						<li>		
						<?php 
							the_widget( 'WP_Widget_Tag_Cloud' );
						?>
						</li>
					</ul>
				</div>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
