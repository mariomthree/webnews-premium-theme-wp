<?php
/**
 * Main Banner
 *
 * @package WebNews
 *
 */

    $category 		= get_theme_mod('select_flash_news_category');
    $all_posts 	    = webnews_get_posts(8, $category);
    $title_slider 	= get_theme_mod('main_news_slider_title') ;
    $title_trending = get_theme_mod('trending_title') ;

?>

		<!-- main banner -->
		<section class="banner px-3 py-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 pb-5">
					<!-- bar-notification -->
					<div class="container-fluid pb-4">
						<div class="row">
							<div class="col-md-2 bg-danger text-white text-uppercase p-2"><?php echo $title_slider; ?></div>
							<div class="col-md-10 bg-collgray"></div>
						</div>
					</div>
					<!-- end of bar-notification -->
					<!-- slider -->
					 <?php if ($all_posts->have_posts()) : ?>
					  <div id="carouselCaptions" class="carousel slide carousel-fade" data-ride="carousel">
					    	<div class="carousel-inner">
					    	<?php
					    		$i = 0;
	                            while ($all_posts->have_posts()) : $all_posts->the_post();
	                                if (has_post_thumbnail()) {
	                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                                    $active = $i == 0 ? 'active' : '';
	                                } else {
	                                    $url = '';
	                                }
	                        ?>
					      	<div class="carousel-item <?php echo $active; ?>">

					        <?php
	                            if ($url) { ?>
	                            <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                        <?php } ?>
	                                 
					        <div class="carousel-caption text-left">
					          <h5 class="category treding text-white"><?php the_category(); ?></h5>
	                          <h5>
	                            <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
					          </h5>
							  <div class="entry-meta frontpage">
	           					<?php echo webnews_entry_meta(); ?>
	       					  </div>	
					        </div>

					        </div>
					    	
					    	 <?php
					    	 	$i++;
	                            endwhile;
	                            endif;
	                            wp_reset_postdata();
	                         ?>
					  		</div>
					    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
					      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
					      <span class="carousel-control-next-icon" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					  </div>

					<!-- end of slider -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 pb-5">
					<!-- bar-notification -->
					<div class="container-fluid mb-4">
						<div class="row">
							<div class="col-md-6 bg-danger text-white text-uppercase p-2"><?php echo $title_trending; ?></div>
							<div class="col-md-6 bg-collgray"></div>
						</div>
					</div>
					<!-- end of bar-notification -->

					<!-- treding post -->
						 <?php if ($all_posts->have_posts()) : 

					 	?>
						<div class="row">
					    	<?php
					    		$i = 0;
	                            while ($all_posts->have_posts() && $i < 2) : $all_posts->the_post();
	                                if (has_post_thumbnail()) {
	                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                                    $active = $i == 0 ? 'active' : '';
	                                } else {
	                                    $url = '';
	                                }
                           	?>
							<div class="col-sm-12 col-md-12 col-xl-12 mb-4">

								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<h5 class="category treding text-white">
										<?php the_category(); ?>								
									</h5>
									<h5>
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta frontpage">
           								<?php echo webnews_entry_meta(); ?>
       								</div>	

								</div>

							</div>
						 <?php
				    	 	$i++;
                            endwhile;
                            endif;
                            wp_reset_postdata();
                         ?>
						</div>
					<!-- end of treding post -->
				</div>
			</div>
		</div>
		</section>
		<!-- end of main banner -->