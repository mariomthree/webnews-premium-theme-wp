<?php
    $featured_title = get_theme_mod('featured_news_title','Featured Story');
?>
    <!-- featured -->
    <section class="p-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
                    <!-- bar-notification -->
                    <div class="container-fluid pb-4">
                        <div class="row">
                            <div class="col-md-5 bg-danger text-white text-uppercase p-2">
                                <?php echo esc_attr($featured_title); ?>
                            </div>
                            <div class="col-md-7 bg-collgray">
                            </div>
                        </div>
                    </div>
                    <!-- end of bar-notification -->
                </div>

                <!-- featured-post -->
                <div class="container-fluid">
                    <?php  
                    
                        if (get_theme_mod('frontpage_position_sidebar','sidebar-none') == 'sidebar-none') {
                            if (get_theme_mod('frontpage_featured_style') == 'featured-01') {
                                featured_01();
                            } elseif (get_theme_mod('frontpage_featured_style') == 'featured-02') {
                                featured_02();
                            } elseif (get_theme_mod('frontpage_featured_style','featured-03') == 'featured-03') {
                                featured_03();
                            }
                        }elseif (get_theme_mod('frontpage_position_sidebar')) {
                           featured_sidebar(get_theme_mod('frontpage_position_sidebar'));
                        }

                    ?>
                </div>
                <!--end of featured-post -->
            </div>
        </div>
    </section>
    <!-- end of featured -->
