<?php
    $featured_title = get_theme_mod('featured_news_title');
?>
    <!-- featured -->
    <section class="p-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <!-- bar-notification -->
                    <div class="container-fluid pb-4">
                        <div class="row">
                            <div class="col-md-2 bg-danger text-white text-uppercase p-2">
                                <?php echo $featured_title; ?>
                            </div>
                            <div class="col-md-10 bg-collgray">
                            </div>
                        </div>
                    </div>
                    <!-- end of bar-notification -->
                </div>

                <!-- featured-post -->
                <div class="container-fluid">
                    <?php  
                    
                        if (get_theme_mod('frontpage_position_sidebar') == 'sidebar-none') {
                           featured_full();
                        }elseif (get_theme_mod('frontpage_position_sidebar') == 'sidebar-left') {
                           featured_sidebar_left();
                        }elseif (get_theme_mod('frontpage_position_sidebar') == 'sidebar-right') {
                           featured_sidebar_right();
                        }
              
                    ?>
                </div>
                <!--end of featured-post -->
            </div>
        </div>
    </section>
    <!-- end of featured -->
