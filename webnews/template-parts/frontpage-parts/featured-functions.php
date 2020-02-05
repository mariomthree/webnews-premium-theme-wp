<?php  

	function featured_01(){

		$category = get_theme_mod('select_featured_news_category',0);
		$posts_featured = webnews_get_posts(8, $category);
	    
	    if ($posts_featured->have_posts()):
		?>
			<div class="row">
	            <?php  
	                $i = 0;
	                while ($posts_featured->have_posts() && $i < 1) : 
	                    $posts_featured->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5">
	            	<div class="img-center img-col-5">
	            		<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>
	            		<?php
	                    if ($url) { ?>
	                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                	<?php } ?>
		            </div>
	            </div>
	            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 mb-5">
                      <h5 class="title">
                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
                      </h5>
                       <div class="entry-meta">
		                    <?php webnews_entry_meta(); ?>
		                </div> 
                      <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,600).' [...]'; ?></p>
	            </div>  
	            	<?php
	                    $i++;
	                    wp_reset_postdata();
	                    endwhile;
	                ?>               
		    </div>

		    <div class="row">
		        <div class="col-sm-12 col-md-12 col-lg-12">
		            <div class="row">
		                <?php
		                    $i = 0;
		                    while ($posts_featured->have_posts() && $i < 4):
		                        $posts_featured->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-lg-3 col-md-3 col-sm-12 mb-4">
		                	<div class="img-center img-col-3-12">
		                		<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>
			                	<?php
		                    	if ($url) { ?>
		                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
				                <?php } ?>
				                 
			            	</div>
		                </div>
		                <div class="col col-md-3 col-sm-12">
		                      <h5 class="title">
		                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
		                      </h5>
		                       <div class="entry-meta">
			                        <?php echo webnews_entry_meta(); ?>
			                      </div> 
		                     <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,110).' [...]'; ?></p>
		                </div>
		                <?php
		                    $i++;
		                    endwhile;
		                    wp_reset_postdata();
		                ?>
		            </div>
		        </div>
		    </div>

	    <?php
		endif;	
	}

	function featured_02(){

		$category = get_theme_mod('select_featured_news_category',0);
		$posts_featured = webnews_get_posts(8, $category);
	    
	    if ($posts_featured->have_posts()):
		?>
			<div class="row">
	            <?php  
	                $i = 0;
	                while ($posts_featured->have_posts() && $i < 3) : 
	                    $posts_featured->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-5">
	            	<div class="img-center img-col-4-12">
	            	
		                <?php
		                    if ($url) { ?>
		                    <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
		                <?php } ?>
		                         
		                <div class="carousel-caption d-md-block text-left">
		                		<div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
		                	<h5 class="title">
	                        	<a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
	                      	</h5>
		                    <div class="entry-meta frontpage">
		                      <?php webnews_entry_meta(); ?>
		                    </div>    
		                </div>
	            	</div>
	            </div>  
	            	<?php
	                    $i++;
	                    wp_reset_postdata();
	                    endwhile;
	                ?>               
		    </div>

		    <div class="row">
		        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		            <div class="row">
		                <?php
		                    $i = 0;
		                    while ($posts_featured->have_posts() && $i < 4):
		                        $posts_featured->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
		                	<div class="img-center img-col-3-12">
		                		<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>
			                	<?php
		                    	if ($url) { ?>
		                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
				                <?php } ?>
				    
			            	</div>
		                </div>
		                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
			                      <h5 class="title">
			                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
			                      </h5>
			                       <div class="entry-meta">
				                        <?php echo webnews_entry_meta(); ?>
				                   </div> 
			                     <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,110).' [...]'; ?></p>
		                </div>
		                <?php
		                    $i++;
		                    endwhile;
		                    wp_reset_postdata();
		                ?>
		            </div>
		        </div>
		    </div>

	    <?php
		endif;	
	}
	
	function featured_03(){

		$category = get_theme_mod('select_featured_news_category',0);
		$posts_featured = webnews_get_posts(8, $category);
	    
	    if ($posts_featured->have_posts()):
		?>
			<div class="row">
	            <?php  
	                $i = 0;
	                while ($posts_featured->have_posts() && $i < 1) : 
	                    $posts_featured->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5">
	            	<div class="img-center img-col-6">
		                <?php
		                    if ($url) { ?>
		                    <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
		                <?php } ?>
		                         
		                <div class="carousel-caption d-md-block text-left"> 
	                          <div class="categorys frontpage pb-3"><?php webnews_get_category(); ?></div>
		                      <h5 class="title">
	                        	<a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
	                      	  </h5>
	                      	  <div class="entry-meta">
		                        <?php webnews_entry_meta(); ?>
		                      </div> 
		                </div>
	            	</div>
	            </div>
	            <?php
	                    $i++;
	                    wp_reset_postdata();
	                    endwhile;
	            ?> 
	            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5">
             		<div class="row">
             			<?php  
			                $i = 0;
			                while ($posts_featured->have_posts() && $i < 2) : 
			                    $posts_featured->the_post();
			                    if (has_post_thumbnail()) {
			                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
			                    } else {
			                        $url = '';
			                    } 
			            ?>

             			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 featured_03">
             				<div class="img-center img-col-6-6">
             					<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>
			             		<?php
				                    if ($url) { ?>
				                    <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
				                <?php } ?>
		                  
	             				</div>
             				</div>
             			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 featured_03">
             				   <h5 class="title">
		                        	<a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
		                      	</h5>
		                      	<div class="entry-meta">
				                        <?php webnews_entry_meta(); ?>
				                </div> 
		                        
             				 <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,130).' [...]'; ?></p>
             			</div>
	         
		            	<?php
		                    $i++;
		                    wp_reset_postdata();
		                    endwhile;
		                ?>               
		   		 	</div>
		   		</div>
		   	</div>
		    <div class="row">
		        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
		            <div class="row">
		                <?php
		                    $i = 0;
		                    while ($posts_featured->have_posts() && $i < 4):
		                        $posts_featured->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
		                	<div class="img-center img-col-3-12">
		                		<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>
			                	<?php
		                    	if ($url) { ?>
		                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
				                <?php } ?> 
		                	</div>
		                </div>
		                <div class="col col-md-3 col-sm-12">
		                      <h5 class="title">
		                        <a href="<?php the_permalink(); ?>" class="text-dark"> 
		                        	<?php the_title(); ?> 
		                    	</a>
		                      </h5>
		                      <div class="entry-meta frontpage">
		                        <?php echo webnews_entry_meta(); ?>
		                      </div> 
		                     <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,110).' [...]'; ?></p>
			            </div>
		                <?php
		                    $i++;
		                    endwhile;
		                    wp_reset_postdata();
		                ?>
		            </div>
		        </div>
		    </div>

	    <?php
		endif;	
	}

	function featured_sidebar($sidebar){

		$category = get_theme_mod('select_featured_news_category',0);
		$posts_featured = webnews_get_posts(8, $category);
	    
	    if ($posts_featured->have_posts()):
		?>
			<div class="row">
               	<?php if($sidebar == 'sidebar-left'): ?>
               	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
		    		<?php dynamic_sidebar('sidebar-1'); ?>
		    	</div>
		    	<?php endif ?>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
		            <div class="row">
		                <?php
		                    $i = 0;
		                    while ($posts_featured->have_posts() && $i < 1):
		                        $posts_featured->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
		                	<?php
	                    	if ($url) { ?>
	                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
			                <?php } ?>
			                         
			                <div class="carousel-caption d-md-block text-left">
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
		                    wp_reset_postdata();
		                ?>
   
		                <?php
		                    $i = 0;
		                    while ($posts_featured->have_posts() && $i < 5):
		                        $posts_featured->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
		                	<div class="categorys frontpage simple"><?php webnews_get_category(); ?></div>

		                	<?php
	                    	if ($url) { ?>
	                    	<img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
			                <?php } ?>
		                </div>
		                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
			                	
	                      <h5 class="title">
	                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
	                      </h5>
	                      <div class="entry-meta">
			                    <?php echo webnews_entry_meta(); ?>
			              </div>
			               <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,140).' [...]'; ?></p>
		                </div>
		                <?php
		                    $i++;
		                    endwhile;
		                    wp_reset_postdata();
		                ?>
		            </div>
		        </div>
		    
				<?php if($sidebar == 'sidebar-right'): ?>				
		    	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
		    		<?php dynamic_sidebar('sidebar-1'); ?>
		    	</div>
		    	<?php endif ?>
		    
		    </div>
	    <?php
		endif;	
	}



