<?php
/**
 * All info and support of webnews Theme
 *
 * @package webnews
 */


add_action('admin_menu', 'webnews_add_theme_info');
function webnews_add_theme_info(){

    $theme_info = add_theme_page( __('webnews Info','webnews'), __('webnews Info','webnews'), 'manage_options', 'webnews-info', 'webnews_info_page' );

    add_action( 'load-' . $theme_info, 'webnews_info_scripts' );
}
function webnews_info_page() {
   
?>
    <div class="webnews-container">

          <h2 class="webnews-title">webnews - 1.0.0</h2>
          <p class="webnews-description">Thank you for installing and activating webnews Theme in site. Now look all steps that your have to follow to customize, and organize your site.
          <b>webnews</b> made with <i class="fa fa-heart"></i> by Mario Manuel Mabande.</p>
        
          <div class="webnews-container-tabs">
                
                <div class="webnews-nav-tab nav-tab-wrapper">
                    <a href="#started" data-target="started" class="nav-button started nav-tab active">
                        <?php esc_html_e( 'Getting started', 'webnews' ); ?>
                    </a>
                    <a href="#support" data-target="support" class="nav-button support nav-tab">
                        <?php esc_html_e( 'Support', 'webnews' ); ?>
                    </a>
                    <a href="#demo" data-target="demo" class="nav-button demo nav-tab">
                        <?php esc_html_e( 'Demo Content', 'webnews' ); ?>
                    </a> 
                </div>
                
                <div class="webnews-tab-wrapper">
                    <div   id="#started" class="webnews-tab started show">
                        <h3><?php esc_html_e( 'Step 1 - Implement recommended actions', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Install the M3 Toolbox so that you have access to the web news tools.', 'webnews' ); ?></p>
                         <p><a class="button button-primary button-large" href="<?php echo admin_url('themes.php?page=tgmpa-install-plugins'); ?>"><?php esc_html_e( 'Install and active', 'webnews' ); ?></a></p>
                        <hr>
                        <h3><?php esc_html_e( 'Step 2 - Read documentation', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Please see documentation so that it can help you better understand the structure and organization of webnews.', 'webnews' ); ?></p>
                        <p><a target="_blank" class="button button-primary button-large" href="https://github.com/mariomthree/webnews-WP-Docs"><?php esc_html_e( 'View documentation', 'webnews' ); ?></a></p>
                        <hr>
                        <h3><?php esc_html_e( 'Step 3 - Customize', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Use the customizer to structure your website and make it even more elegant.', 'webnews' ); ?></p>
                        <p><a class="button button-primary button-large" href="<?php echo admin_url( 'customize.php' ); ?>"><?php esc_html_e( 'Customizer', 'webnews' ); ?></a></p>
                        <hr>
                        <h3><?php esc_html_e( 'Step 4 - Demo Content', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'First install All-in-One WP Migration then import the files. See all the details in the Demo Content tab.', 'webnews' ); ?></p>
                        <p><a class="go-demo button button-primary button-large" href="#demo" data-target="demo"><?php esc_html_e( 'Go to Demo Content', 'webnews' ); ?></a></p>
                    </div>
                    <div id="#support" class="webnews-tab support">

                        <h3> <span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'You have any question?', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Get in touch with us so we can help you..', 'webnews' ); ?></p>
                            <a href="" target="_blank"><?php esc_html_e( 'Contact us', 'webnews' ); ?></a>              
                   
                        <h3> <span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentation', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Our documentation will help you to understand all aspects of webnews, we also have a section for answers to frequently asked questions.', 'webnews' ); ?></p>
                        <a href="" target="_blank"><?php esc_html_e( 'View documentation', 'webnews' ); ?></a>
                      
          
                    </div>
                    <div id="#demo" class="webnews-tab demo">
                        <h3><?php esc_html_e( 'Step 1 - Install All-in-One WP Migration', 'webnews' ); ?></h3>
                        <p><a class="button button-primary button-large" href="<?php echo admin_url('themes.php?page=tgmpa-install-plugins&plugin_status=all'); ?>"><?php esc_html_e( 'Install and active', 'webnews' ); ?></a></p>
                        <h3><?php esc_html_e("Step 2 - Demo files",'webnews') ?></h3>
                        <p><?php esc_html_e('Demo content is also available on github, download and import.','webnews') ?> </p>
                        <p><a target="_blank" class="button button-primary button-large" href="https://github.com/mariomthree/webnews-WP-Docs"><?php esc_html_e( 'Go to github', 'webnews' ); ?></a></p>
                    </div>
                </div>

          </div>

    </div>
<?php
}

function webnews_info_scripts(){
    add_action( 'admin_enqueue_scripts', 'webnews_info_enqueue' );
}

function webnews_info_enqueue(){

    wp_enqueue_style( 'theme-info ', get_template_directory_uri() . '/assets/css/theme-info.css', array(), '1.0.0', 'all' );

    wp_register_script('theme-info', get_template_directory_uri(). '/js/theme-info.js',false,'1.0.0',true);
    wp_enqueue_script('theme-info');

    wp_enqueue_style( 'fontawesome ', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all' );
}
