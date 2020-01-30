<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webnews
 */

?>

	</div><!-- #content -->
	<?php 
		
		if(get_theme_mod('footer_num_column_style')  == 'column-four')
			get_template_part('template-parts/footer/footer-four');
		elseif( get_theme_mod('footer_num_column_style','column-three')  == 'column-three')
			get_template_part('template-parts/footer/footer-three');
		elseif( get_theme_mod('footer_num_column_style')  == 'column-hidden')
			//Do not include nothing
	?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php if(get_theme_mod('footer_copyright') == ''){ ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'webnews' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'webnews' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'webnews' ), 'webnews','Mario Manuel Mabande' );
				}else{
				?>
				<p><?php echo get_theme_mod('footer_copyright'); ?></p>
				<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
