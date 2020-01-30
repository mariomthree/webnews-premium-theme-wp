<?php  
/**
 * webnews Header with topbar left and right
 *
 * @package webnews
 */
 ?>	

	<header id="masthead" class="site-header">
		<div class="container-fluid">		
			<div class="row">
           		
           		<?php get_template_part('template-parts/topbar'); ?>

				<div class=" col-sm-12 col-md-7 col-lg-7  headerSectionTwo">
					<div class="site-branding">

					<?php
						$logo = get_custom_logo();
						if ( $logo ) {
							
							echo $logo;
						
						}else{
						
							?>
							  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						
							$web_news_description = get_bloginfo( 'description', 'display' );
				 			
				 			if ( $web_news_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $web_news_description; /* WPCS: xss ok. */ ?></p>

						<?php 
							endif; 
						}
					?>
					</div><!-- .site-branding -->
				</div>

           		<?php get_template_part('template-parts/content-header-right'); ?>
			
			</div>
		</div>
			
		<div class="container-fluid">
			<nav id="site-navigation" class="main-navigation px-4">
				<button class="menu-toggle webnews-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars "></i></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->