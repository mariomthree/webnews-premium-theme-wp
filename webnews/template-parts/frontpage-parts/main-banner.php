<?php
/**
 * Main Banner
 *
 * @package webnews
 *
 */
	
	$banner_style = get_theme_mod('frontpage_banner_style','banner-01');
?>

		<!-- main banner -->
		<section class="banner px-3 py-4">
		<div class="container-fluid">
			<div class="row">
				<?php 
					if ($banner_style == 'banner-01'){
						banner_01();
					}

					if ($banner_style == 'banner-02'){
						banner_02();
					}

					if ($banner_style == 'banner-03'){
						banner_03();
					}
				?>
			</div>
		</div>
		</section>
		<!-- end of main banner -->