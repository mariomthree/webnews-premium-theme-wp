<?php
/**
  * Banner styles 
  */
	


	function banner_01(){
		
		$category_slider 	= get_theme_mod('select_slider_news_category');
		$category_treding	= get_theme_mod('select_trending_news_category');
    	$posts_slider 		= webnews_get_posts(8, $category_slider);
    	$posts_treding		= webnews_get_posts(4, $category_treding);
    	$title_slider 		= get_theme_mod('main_news_slider_title','Main Story');
    	$title_trending 	= get_theme_mod('trending_title','Trending Story');
		
		?>
			<div class="col-lg-8 col-md-8 col-sm-12 pb-5">
				<!-- bar-notification -->
				<div class="container-fluid pb-4">
					<div class="row">
						<div class="col-md-5 bg-danger text-white text-uppercase p-2"><?php echo esc_attr($title_slider); ?></div>
						<div class="col-md-7 bg-collgray"></div>
					</div>
				</div>
				<!-- end of bar-notification -->
				<!-- slider -->
				 <?php if ($posts_slider->have_posts()) : ?>
				  <div id="carouselCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  						<div class="img-center img-col-8">
					    	<div class="carousel-inner">
						    	<?php
							    		$i = 0;
			                            while ($posts_slider->have_posts()) : 
			                            	$posts_slider->the_post();
			                                if (has_post_thumbnail()) {
			                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));

			                                    $active = $i == 0 ? 'active' : '';
			                                } else {
			                                    $url = '';
			                                }
			                        ?>
							      	<div class="carousel-item <?php echo esc_attr($active); ?>">

								        <?php
				                            if ($url) { ?>
				                            <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
				                        <?php } ?>
				                                 
								        <div class="carousel-caption text-left">
								          <div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
				                          <h5 class="title">
				                            <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
								          </h5>
										  <div class="entry-meta">
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
				  </div>

				<!-- end of slider -->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 pb-2">
				<!-- bar-notification -->
				<div class="container-fluid mb-4">
					<div class="row">
						<div class="col-md-7 bg-danger text-white text-uppercase p-2"><?php echo esc_attr($title_trending); ?></div>
						<div class="col-md-5 bg-collgray"></div>
					</div>
				</div>
				<!-- end of bar-notification -->

				<!-- treding post -->
					 <?php if ($posts_treding->have_posts()) : 

				 	?>
					<div class="row">
				    	<?php
				    		$i = 0;
                            while ($posts_treding->have_posts() && $i < 2) : 
                            	$posts_treding->the_post();
                                if (has_post_thumbnail()) {
                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $active = $i == 0 ? 'active' : '';
                                } else {
                                    $url = '';
                                }
                       	?>
						<div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mb-4">
							<div class="img-center img-col-4-12">
								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
									<h5 class="title">
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta">
	       								<?php echo webnews_entry_meta(); ?>
	   								</div>	
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
		<?php
	}

	function banner_02(){

		$category_slider 	= get_theme_mod('select_slider_news_category');
		$category_treding	= get_theme_mod('select_trending_news_category');
    	$posts_slider 		= webnews_get_posts(8, $category_slider);
    	$posts_treding		= webnews_get_posts(4, $category_treding);
    	$title_slider 		= get_theme_mod('main_news_slider_title','Main Story');
    	//$title_trending 	= get_theme_mod('trending_title','Trending Story');
		?>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<!-- bar-notification -->
				<div class="container-fluid mb-4">
					<div class="row">
						<div class="col-md-5 bg-danger text-white text-uppercase p-2"><?php echo esc_attr($title_slider); ?></div>
						<div class="col-md-7 bg-collgray"></div>
					</div>
				</div>
				<!-- end of bar-notification -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 pb-2">
				<!-- treding post -->
					 <?php if ($posts_treding->have_posts()) : ?>
					<div class="row">
				    	<?php
				    		$i = 0;
                            while ($posts_treding->have_posts() && $i < 2) : $posts_treding->the_post();
                                if (has_post_thumbnail()) {
                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $active = $i == 0 ? 'active' : '';
                                } else {
                                    $url = '';
                                }
                       	?>
						<div class="banner-02 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							<div class="img-center img-col-3-12">
								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
									<h5 class="title">
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta">
	       								<?php echo webnews_entry_meta(); ?>
	   								</div>	

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
			<div class="col-lg-6 col-md-6 col-sm-12 pb-2">
				<!-- slider -->
				 <?php if ($posts_slider->have_posts()) : ?>
				  <div id="carouselCaptions" class="banner-02 carousel slide carousel-fade" data-ride="carousel">
				  	<div class="img-center img-col-6">
				    	<div class="carousel-inner">
					    	<?php
					    		$i = 0;
	                            while ($posts_slider->have_posts()) : 
	                            	$posts_slider->the_post();
	                                if (has_post_thumbnail()) {
	                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                                    $active = $i == 0 ? 'active' : '';
	                                } else {
	                                    $url = '';
	                                }
	                        ?>
					      	<div class="carousel-item <?php echo esc_attr($active); ?>">

						        <?php
		                            if ($url) { ?>
		                            <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
		                        <?php } ?>
		                                 
						        <div class="carousel-caption text-left">
						          <div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
		                          <h5 class="title">
		                            <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
						          </h5>
								  <div class="entry-meta">
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
				  </div>

				<!-- end of slider -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 pb-2">
				<!-- treding post -->
					<?php if ($posts_treding->have_posts()) : ?>
					<div class="row">
				    	<?php
				    		$i = 0;
                            while ($posts_treding->have_posts() && $i < 2) : $posts_treding->the_post();
                                if (has_post_thumbnail()) {
                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $active = $i == 0 ? 'active' : '';
                                } else {
                                    $url = '';
                                }
                       	?>
						<div class="banner-02 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
							<div class="img-center img-col-3-12">
								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
									<h5 class="title">
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta ">
	       								<?php echo webnews_entry_meta(); ?>
	   								</div>	

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
		<?php

	}

	function banner_03(){

		$category_slider 	= get_theme_mod('select_slider_news_category');
		$category_treding	= get_theme_mod('select_trending_news_category');
    	$posts_slider 		= webnews_get_posts(8, $category_slider);
    	$posts_treding		= webnews_get_posts(4, $category_treding);
    	$title_slider 		= get_theme_mod('main_news_slider_title','Main Story');
    	//$title_trending 	= get_theme_mod('trending_title','Trending Story');
		?>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<!-- bar-notification -->
				<div class="container-fluid mb-4">
					<div class="row">
						<div class="col-md-5 bg-danger text-white text-uppercase p-2"><?php echo esc_attr($title_slider); ?></div>
						<div class="col-md-7 bg-collgray"></div>
					</div>
				</div>
				<!-- end of bar-notification -->
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 pb-2">
				<!-- slider -->
				 <?php if ($posts_slider->have_posts()) : ?>
				  <div id="carouselCaptions" class="banner-03 carousel slide carousel-fade" data-ride="carousel">
				  	<div class="img-center img-col-6">
				    	<div class="carousel-inner">
					    	<?php
					    		$i = 0;
	                            while ($posts_slider->have_posts()) : 
	                            	$posts_slider->the_post();
	                                if (has_post_thumbnail()) {
	                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                                    $active = $i == 0 ? 'active' : '';
	                                } else {
	                                    $url = '';
	                                }
	                        ?>
					      	<div class="carousel-item <?php echo esc_attr($active); ?>">

						        <?php
		                            if ($url) { ?>
		                            <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
		                        <?php } ?>
		                                 
						        <div class="carousel-caption text-left">
						          <div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
		                          <h5 class="title">
		                            <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
						          </h5>
								  <div class="entry-meta">
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
				  </div>

				<!-- end of slider -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 pb-2">
				<!-- treding post -->
					 <?php if ($posts_treding->have_posts()) : ?>
					<div class="row">
				    	<?php
				    		$i = 0;
                            while ($posts_treding->have_posts() && $i < 2) : $posts_treding->the_post();
                                if (has_post_thumbnail()) {
                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $active = $i == 0 ? 'active' : '';
                                } else {
                                    $url = '';
                                }
                       	?>
						<div class="banner-03 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							<div class="img-center img-col-3-12">
								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
									<h5 class="title">
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta">
	       								<?php echo webnews_entry_meta(); ?>
	   								</div>	

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
			<div class="col-lg-3 col-md-3 col-sm-12 pb-2">
				<!-- treding post -->
					<?php if ($posts_treding->have_posts()) : ?>
					<div class="row">
				    	<?php
				    		$i = 0;
                            while ($posts_treding->have_posts() && $i < 2) : $posts_treding->the_post();
                                if (has_post_thumbnail()) {
                                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $active = $i == 0 ? 'active' : '';
                                } else {
                                    $url = '';
                                }
                       	?>
						<div class="banner-03 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
							<div class="img-center img-col-3-12">
								<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">	

								<div class="carousel-caption d-md-block text-left">
									
									<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
									<h5 class="title">
		                                <a href="<?php the_permalink(); ?>" class="text-white">
						            	 <?php the_title(); ?>
						             	</a>
					          		</h5>
					          		
					          		<div class="entry-meta ">
	       								<?php echo webnews_entry_meta(); ?>
	   								</div>	

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
		<?php

	}
