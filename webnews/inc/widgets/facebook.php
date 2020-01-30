<?php
/**
 * @package webnews
 *
 */

class facebook extends WP_Widget{

    /*function construct*/
    public function __construct() {
        parent::__construct(
            'fb_page',esc_html__('M3: Facebook Page','webnews'),
            array('description'=>esc_html__('Facebook Page', 'webnews'))
        );
    }

    /**
     * front-end widgets
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo ent2ncr($args['before_widget']);

        if($title) {
            echo ent2ncr($args['before_title']) . esc_html($title) . ent2ncr($args['after_title']);
        }

        ?>
        <div class="fb-page"
             data-href="<?php  echo esc_url($instance['address']); ?>"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="true"
             data-show-posts="false">
        </div>
        <?php
        echo ent2ncr($args['after_widget']);
    }

    /**
     * Back-end widgets form
     */
    public function form($instance){
        $instance =   wp_parse_args($instance,array(
            'title'       =>  'Find us on facebook',
            'address'     =>  '',
        ));
        ?>
        <p>
            <label for=<?php echo esc_attr($this->get_field_id('title')); ?>><?php echo esc_html_e('Title:','webnews') ; ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php echo esc_html_e('Link address your facebook:','webnews'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('address')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo esc_attr($instance['address']); ?>" />
        </p>
        <?php
    }

    /**
     * function update widget
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['address'] = $new_instance['address'];
        return $instance;
    }
}
function facebook(){
    register_widget('facebook');
}
add_action('widgets_init','facebook');
?>