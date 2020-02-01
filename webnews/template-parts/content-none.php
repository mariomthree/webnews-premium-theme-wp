<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnews
 */
$header_img = has_header_image() ? get_header_image() : get_template_directory_uri().'/assets/img/bg-header.jpg';
?>

<section class="no-results not-found">

	<div style="background-image: url(<?php echo esc_attr($header_img);?>);">
		<header class="page-header p-5">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'webnews' ); ?></h1>
		</header><!-- .page-header -->
	</div>

	<div class="page-content py-5">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'webnews' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12">
						<p class="text-center p-5"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'webnews' );?></p>
						<div class="justify-content-center d-flex">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php

		else :
			?>
			
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12">
						<p class="text-center p-5"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'webnews' ); ?></p>
							<div class="justify-content-center d-flex">
								<?php get_search_form(); ?>
							</div>
					</div>
				</div>
			</div>
			
			<?php
		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
