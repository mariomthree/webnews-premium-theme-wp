<?php


function flash_active($title)
{
	?>
 <div class="banner-exclusive-posts-wrapper clearfix">

                <?php
                $category = get_theme_mod('select_flash_news_category');
                $number_of_posts =5;
                $em_ticker_news_title = get_theme_mod('flash_news_title');
                $all_posts = webnews_get_posts($number_of_posts, $category);
                ?>

                    <div class="exclusive-posts">
                        <div class="exclusive-now primary-color">
                            <div class="alert-spinner">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                            <strong><?php echo esc_html($em_ticker_news_title); ?></strong>
                        </div>
                        <div class="exclusive-slides">
                        <?php
                        if ($all_posts->have_posts()) : ?>
                        <div class='marquee' data-speed='80000' data-gap='0' data-duplicated='true'>
                            <?php
                            while ($all_posts->have_posts()) : $all_posts->the_post();
                                if (has_post_thumbnail()) {
                                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                                    $url = $thumb['0'];
                                } else {
                                    $url = '';
                                }
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if ($url) { ?>
                                        <img src="<?php echo esc_url($url); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php } ?>
                                    <?php the_title(); ?>
                                </a>
                            <?php

                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Excluive line END -->
	<?php
}