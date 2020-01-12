<?php
/**
 * WebNews Widget of Contact info
 *
 *
 * @package WebNews
 */

class contact_info extends WP_Widget{


      public function __construct() {
          parent::__construct(
            'contact_info',esc_html__('M3: Contact info','webnews'),
             array('description'=>esc_html__('Display Contact info', 'webnews'))
          );
      }


      public function widget($args, $instance) {
          extract($args);
          $title = apply_filters('widget_title', $instance['title']);

          echo ent2ncr($args['before_widget']);

          if($title) {
              echo ent2ncr($args['before_title']) . esc_html($title) . ent2ncr($args['after_title']);
          }

      ?>
      <div class="clearfix">
          <?php if($instance['description']): ?>
              <p class="description">
                  <span><?php echo esc_attr($instance['description']); ?></span>
              </p>
          <?php endif; ?>
                <?php  if($instance['address']): ?>
                <li>
                    <i class="fa fa-location-arrow"></i>
                    <span><?php  echo esc_attr($instance['address']);  ?></span>
                </li>
                <?php  endif; ?>

                <?php if($instance['phone']): ?>
                  <li>
                      <i class="fa fa-phone"></i>
                      <span><?php   echo esc_attr($instance['phone']);  ?></span>
                  </li>

                <?php endif; ?>

                <?php if($instance['email']): ?>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:<?php echo esc_attr($instance['email']);?>" ><span><?php echo esc_attr($instance['email']);  ?></span></a>
                    </li>
                <?php endif; ?>
      </div>
      <?php
      echo ent2ncr($args['after_widget']);
      }

      public function update( $new_instance, $old_instance ) {
          $instance = $old_instance;
          $instance['title']        = $new_instance['title'];
          $instance['address']      = $new_instance['address'];
          $instance['phone']        =   $new_instance['phone'];
          $instance['email']        =   $new_instance['email'];
          $instance['description']  =   $new_instance['description'];
          return $instance;
      }

      public function form($instance){
          $instance =   wp_parse_args($instance,array(
              'title'       =>  'Contact info',
              'address'     =>  '',
              'phone'       =>  '',
              'email'       =>  '',
              'description' =>'',
          ));
          ?>
          <p>
              <label for=<?php echo esc_attr($this->get_field_id('title')); ?>><?php echo esc_html_e('Title:','webnews') ; ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
          </p>
          
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php echo esc_html_e('Address:','webnews'); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('address')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo esc_attr($instance['address']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php echo esc_html_e( 'Phone:', 'webnews' ); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo esc_attr($instance['phone']); ?>" />
          </p>

          <p>
              <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php echo esc_html_e('Email:', 'webnews'); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" class="widefat" value="<?php echo esc_attr($instance['email']); ?>" />
          </p>

          <p>
              <label for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php echo esc_html_e('A brief description of author:', 'webnews'); ?></label>
              <textarea id="<?php echo esc_attr($this->get_field_id( 'description')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>" rows="6"><?php echo esc_attr($instance['description']); ?></textarea>
          </p>

      <?php
      }


  }
  function contact_info(){
      register_widget('contact_info');
  }
  add_action('widgets_init','contact_info');
?>