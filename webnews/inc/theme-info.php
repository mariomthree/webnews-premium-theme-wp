<?php
/**
 * All info and support of WebNews Theme
 *
 * @package WebNews
 */


add_action('admin_menu', 'webnews_add_theme_info');
function webnews_add_theme_info(){

    $theme_info = add_theme_page( __('WebNews Info','webnews'), __('WebNews Info','webnews'), 'manage_options', 'webnews-info', 'webnews_info_page' );

    add_action( 'load-' . $theme_info, 'webnews_info_scripts' );
}
function webnews_info_page() {
   
?>
    <div class="webnews-container">

          <h2 class="webnews-title">WebNews - 1.0.0</h2>
          <p class="webnews-description">Thank your for installing and activating WebNews Theme in site. Now look all steps that your have follow to customize, and organize your site. 
          <b>WebNews</b> made with <i class="fa fa-heart"></i> by <a href="https://github.com/mariomtree/" target="_blank">Mario Manuel Mabande</a>.</p>
        
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
                        <h3><?php esc_html_e( 'Step 1 - Read documentation', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Por favor veja documentacao para que possa ajudar-te a entender melhor a estrutura e a organizacao do WebNews.', 'webnews' ); ?></p>
                        <p><a class="button button-primary button-large" href=""><?php esc_html_e( 'View documentation', 'webnews' ); ?></a></p>
                        <hr>
                        <h3><?php esc_html_e( 'Step 2 - Customize', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Use to customizer para estruturar o teu site e torna-lo ainda mais elegante.', 'webnews' ); ?></p>
                        <p><a class="button button-primary button-large" href="<?php echo admin_url( 'customize.php' ); ?>"><?php esc_html_e( 'Customizer', 'webnews' ); ?></a></p>
                        <hr>
                        <h3><?php esc_html_e( 'Step 3 - Demo Content', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Primeiro instale o One Click Demo Import de seguida importe os arquivos. Veja todos os detalhes na aba Demo Content.', 'webnews' ); ?></p>
                        <p><a class="go-demo button button-primary button-large" href="#demo" data-target="demo"><?php esc_html_e( 'Go to Demo Content', 'webnews' ); ?></a></p>
                    </div>
                    <div id="#support" class="webnews-tab support">

                        <h3> <span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'You have any question?', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Entre em contacto connosco para que possamos ajudar-te.', 'webnews' ); ?></p>
                            <a href="" target="_blank"><?php esc_html_e( 'Contact us', 'webnews' ); ?></a>              
                   
                        <h3> <span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentation', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'A nossa documentacao ira ajudar-te a entender todos os aspectos da WebNews, temos tambem uma seccao de respostas das duvidas frequentes.', 'webnews' ); ?></p>
                        <a href="" target="_blank"><?php esc_html_e( 'View documentation', 'webnews' ); ?></a>
                      
          
                    </div>
                    <div id="#demo" class="webnews-tab demo">
                        <h3><?php esc_html_e( 'Step 1 - Install One Click Demo Import', 'webnews' ); ?></h3>
                        <p><a class="button button-primary button-large" href="<?php echo admin_url('plugin-install.php?s=One+Click+Demo+Import&tab=search&type=term'); ?>"><?php esc_html_e( 'Install and active', 'webnews' ); ?></a></p>
                             <h3><?php esc_html_e( 'Step 2 - Go to One  Click Demo Import', 'webnews' ); ?></h3>
                        <p><?php esc_html_e( 'Vai ao painel do One Click Demo Import, importe o demo content que temos e desfrute do WebNews da melhor forma.', 'webnews' ); ?></p>
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
