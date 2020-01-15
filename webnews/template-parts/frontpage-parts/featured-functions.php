<?php  

	function featured_full(){
	    $all_categorys = get_categories();
		$category = get_theme_mod('select_featured_news_category');
		$all_posts = webnews_get_posts(8, $category);
	    if ($all_posts->have_posts()):
		?>
			<div class="row">
	            <?php  
	                $i = 0;
	                while ($all_posts->have_posts() && $i < 1) : 
	                    $all_posts->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class=" col-sm-12 col-lg-5 col-md-5 mb-5">
	                <?php
	                    if ($url) { ?>
	                    <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                <?php } ?>
	                         
	                <div class="carousel-caption d-md-block text-left">
	                      <h5 class="category text-white"><?php the_category(); ?></h5>
	                      <h5>
	                        <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title(); ?> </a>
	                      </h5>
	                      <div class="entry-meta frontpage">
	                        <?php webnews_entry_meta(); ?>
	                      </div>    
	                </div>
	            </div>
	            <?php
	                $i++;
	                wp_reset_postdata();
	                endwhile;
	            ?>

	            <div class="col-md-7 mb-5">
	                <?php  
	                    $i = 0;
	                    while ($all_posts->have_posts() && $i < 2) : 
	                        $all_posts->the_post();
	                        if (has_post_thumbnail()) {
	                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                        } else {
	                            $url = '';
	                        } 
	                ?>
	                <div class="row row-adjust">
	                    <div class="col-md-4 filter">
	                        <div class="meta-slim slim frontpage">
	                           <?php echo webnews_entry_meta('date'); ?>
	                        </div>
	                        <?php if ($url) ?>
	                            <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">  
	                    </div>
	                    <div class="col-md-8">
	                      <h5 class="pt-3">
	                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
	                      </h5>
	                        <h5 class="category treding text-white pt-2"><?php the_category(); ?></h5>
	                        <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,120).' [...]'; ?></p>
	                    </div>
	                </div>
	                <?php
	                    $i++;
	                    wp_reset_postdata();
	                    endwhile;
	                ?>
	            </div>                 

		    </div>

		    <div class="row">
		        <div class="col-sm-12 col-md-12 col-lg-12">
		            <div class="row">
		                <?php
		                    $i = 0;
		                    while ($all_posts->have_posts() && $i < 4):
		                        $all_posts->the_post();
		                        if (has_post_thumbnail()) {
		                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		                        } else {
		                            $url = '';
		                        }
		                ?>
		                <div class="col-lg-3 col-md-3 col-sm-12">
		                    <div class="card" style="width: 100%; border-color: transparent;">
		                        <div class="meta-slim frontpage">
		                            <?php echo webnews_entry_meta('date'); ?>
		                        </div>
		                        <?php if ($url) ?>
		                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
		                        <div class="card-body">
		                            <h5 class="category treding text-white">
		                                <?php the_category(); ?>
		                            </h5>
		                            <h5 class="card-title">
		                                <a href="<?php the_permalink(); ?>" class="text-dark">
		                                    <?php the_title(); ?> </a>
		                            </h5>
		                        </div>
		                    </div>
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

	function featured_sidebar_left(){
		$all_categorys = get_categories();
		$category = get_theme_mod('select_featured_news_category');
		$all_posts = webnews_get_posts(8, $category);
		if ($all_posts->have_posts()) :
      ?>

      	<div class="row">
      	 	<div class="col-sm-12 col-md-3 col-lg-3">
	            <aside id="secondary" class="widget-area">
	                <?php dynamic_sidebar( 'sidebar-1' ); ?>
	            </aside><!-- #secondary -->
	        </div>
                    
	        <div class="col-sm-12 col-md-9 col-lg-9">
	            <?php  
	                $i = 0;
	                while ($all_posts->have_posts() && $i < 2) : 
	                    $all_posts->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class="row row-adjust mb-5">
	                <div class="col-md-5">
	                    <?php if ($url) ?>
	                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
                	   	<div class="carousel-caption d-md-block text-left">
                      	 <div class="entry-meta frontpage">
           					<?php webnews_entry_meta(); ?>
       					  </div>	
				        </div>
	                </div>
	                <div class="col-md-7">
	                  <h5 class="pt-3">
	                    <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
	                  </h5>
	                    <h5 class="category treding text-white pt-2"><?php the_category(); ?></h5>
	                    <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,335).' [...]'; ?></p>
	                </div>
	            </div>
	            <?php
	                $i++;
	                    endwhile;
	                ?>

	            <div class="row">
	                <?php
	                    $i = 0;
	                    while ($all_posts->have_posts() && $i < 3):
	                        $all_posts->the_post();

	                        if (has_post_thumbnail()) {
	                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                        } else {
	                            $url = '';
	                        }
	                ?>
	                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
	                    <div class="card" style="width: 100%; border-color: transparent;">
	                        <div class="meta-slim frontpage">
	                                <?php echo webnews_entry_meta('date'); ?>
	                        </div>
	                        <?php if ($url) ?>
	                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                            <div class="card-body">
	                                <h5 class="category treding text-white">
	                                    <?php the_category(); ?>    
	                                </h5>
	                                <h5 class="card-title">
	                                    <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?> </a>
	                                </h5>
	                            </div>
	                        </div>
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


	function featured_sidebar_right(){
		$all_categorys = get_categories();
		$category = get_theme_mod('select_featured_news_category');
		$all_posts = webnews_get_posts(8, $category);
      if ($all_posts->have_posts()) :
      ?>

      	<div class="row">
                    
	        <div class="col-sm-12 col-md-9 col-lg-9">
	            <?php  
	                $i = 0;
	                while ($all_posts->have_posts() && $i < 2) : 
	                    $all_posts->the_post();
	                    if (has_post_thumbnail()) {
	                        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                    } else {
	                        $url = '';
	                    } 
	            ?>
	            <div class="row row-adjust mb-5">
	                <div class="col-md-5">
	                    <?php if ($url) ?>
	                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                      	<div class="carousel-caption d-md-block text-left">
	                      	 <div class="entry-meta frontpage">
	           					<?php webnews_entry_meta(); ?>
	       					  </div>	
					        </div>

	                </div>
	                <div class="col-md-7">
	                  <h5 class="pt-3">
	                    <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title(); ?> </a>
	                  </h5>
	                    <h5 class="category treding text-white pt-2"><?php the_category(); ?></h5>
	                    <p class="pt-2"> <?php echo substr(strip_tags(get_the_content()),0,335).' [...]'; ?></p>
	                </div>
	            </div>
	            <?php
	                $i++;
	                    endwhile;
	                ?>

	            <div class="row">
	                <?php
	                    $i = 0;
	                    while ($all_posts->have_posts() && $i < 3):
	                        $all_posts->the_post();

	                        if (has_post_thumbnail()) {
	                            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
	                        } else {
	                            $url = '';
	                        }
	                ?>
	                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
	                    <div class="card" style="width: 100%; border-color: transparent;">
	                        <div class="meta-slim frontpage">
	                                <?php echo webnews_entry_meta('date'); ?>
	                        </div>
	                        <?php if ($url) ?>
	                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?> ">
	                            <div class="card-body">
	                                <h5 class="category treding text-white">
	                                    <?php the_category(); ?>
	                                        
	                                </h5>
	                                <h5 class="card-title">
	                                    <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?> </a>
	                                </h5>
	                            </div>
	                        </div>
	                </div>
	                <?php
	                    $i++;
	                    endwhile;
	                    wp_reset_postdata();
	                ?>
	            </div>

	        </div>

	        <div class="col-sm-12 col-md-3 col-lg-3">
	            <aside id="secondary" class="widget-area">
	                <?php dynamic_sidebar( 'sidebar-1' ); ?>
	            </aside><!-- #secondary -->
	        </div>

    	</div>

        <?php
      endif;

	}


