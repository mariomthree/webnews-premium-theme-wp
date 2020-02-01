<?php  
	$latest_title  = get_theme_mod('frontpage_latest_posts_title','You may have missed');
	$all_posts 	   = webnews_get_posts(5);
?>
    <!-- latest -->
    <section class="px-2 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <!-- bar-notification -->
                    <div class="container-fluid pb-4">
                        <div class="row">
                            <div class="col-md-2 bg-danger text-white text-uppercase p-2">
                                <?php echo esc_attr($latest_title); ?>
                            </div>
                            <div class="col-md-10 bg-collgray">
                            </div>
                        </div>
                    </div>
                    <!-- end of bar-notification -->
                </div>

                <!-- featured-post -->
                <div class="container-fluid">
                	<?php if ($all_posts->have_posts()) : ?>
                	<div class="row">
                		<?php  

			                $i = 0;
			                while ($all_posts->have_posts() && $i <4) : 
			                    $all_posts->the_post();
			                    if (has_post_thumbnail()) {
			                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
			                    } else {
			                        $url = '';
			                    } 
	            		?>
                		<div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                            <div class="img-center img-col-3-12">
               	                <?php
    	                    	if ($url) { ?>
    	                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
    			                <?php } ?>
    			                         
    			                <div class="carousel-caption d-md-block text-left">
                                    <div class="categorys py-3"><?php webnews_get_category(); ?></div>
    			                      <h5>
    			                        <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
    			                      </h5>
    			                      <div class="entry-meta frontpage">
    			                        <?php echo webnews_entry_meta(); ?>
    			                      </div>    
    			                </div>
                            </div>
                		</div>
                		<?php 
                			$i++;
	                		wp_reset_postdata();
                			endwhile;
                			endif;
                		 ?>
                	</div>
                </div>
                <!--end of featured-post -->
            </div>
        </div>
    </section>
    <!-- end of lastet -->
