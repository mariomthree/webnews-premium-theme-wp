<?php
/**
 * webnews Widget of Contact info
 *
 *
 * @package webnews
 */

    class social_links extends WP_Widget {

        private $socials = array(
                'facebook'  => array(
                    'title' => 'facebook',
                    'name'  => 'facebook_username',
                    'link'  => '*',
                    'icon'  => 'fa-facebook',
                ),
                'googleplus'=> array(
                    'title' => 'googleplus',
                    'name'  => 'googleplus_username',
                    'link'  => '*',
                    'icon'  => 'fa-google-plus',
                ),
                'twitter'   => array(
                    'title' => 'twitter',
                    'name'  => 'twitter_username',
                    'link'  => '*',
                    'icon'  => 'fa-twitter',
                ),
                'instagram' => array(
                    'title' => 'instagram',
                    'name'  => 'instagram_username',
                    'link'  => '*',
                    'icon'  => 'fa-instagram',
                ),
                'pinterest' => array(
                    'title' => 'pinterest',
                    'name'  => 'pinterest_username',
                    'link'  => '*',
                    'icon'  => 'fa-pinterest',
                ),
                'skype'     => array(
                    'title' => 'skype',
                    'name'  => 'skype_username',
                    'link'  => '*',
                    'icon'  =>'fa-skype',
                ),
                'Vimeo'     => array(
                    'title' => 'vimeo',
                    'name'  => 'vimeo_username',
                    'link'  => '*',
                    'icon'  =>'fa-vimeo-square',
                ),
                'youtube'   => array(
                    'title' => 'youtube',
                    'name'  => 'youtube_username',
                    'link'  => '*',
                    'icon'  => 'fa-youtube-play',
                ),
                'dribbble'  => array(
                    'title' => 'dribbble',
                    'name'  => 'dribbble_username',
                    'link'  => '*',
                    'icon'  =>'fa-dribbble',
                ),
                'linkedin'  => array(
                    'title' => 'linkedin',
                    'name'  => 'linkedin_username',
                    'link'  => '*',
                    'icon'  => 'fa-linkedin',
                ),
                'rss' => array(
                    'title' => 'rss',
                    'name' => 'rss_username',
                    'link' => '*',
                    'icon'=>'fa-rss',
                )
            );

        public function __construct() {
            parent::__construct(
                'social_links',esc_html__('M3: Social Links','webnews'), 
                array('description'=>esc_html__('Displays your social profile', 'webnews'))
            );

        }



        function widget($args, $instance)
        {
            extract($args);
            $title = apply_filters('widget_title', $instance['title']);
            echo wp_specialchars_decode($before_widget);
            if ($title) {
                echo wp_specialchars_decode($before_title . $title . $after_title);
            }
            echo '<nav class="social-links-top">';
            echo '<ul>';
            foreach ($this->socials as $key => $social) {
                if (!empty($instance[$social['name']])) {
                    echo '
                    <li>
                        <a href="' . str_replace('*', esc_attr($instance[$social['name']]), $social['link']) . '" target="_blank" title="' . esc_attr($key) . '" class="' . esc_attr($key) . '">
                        <i class="fa ' . esc_attr( $social['icon']) . '"></i>
                        </a>
                    </li>';
                }
            }
            echo '</ul>';
            echo '</nav>';
            echo wp_specialchars_decode($after_widget);
        }

        function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance = $new_instance;
            $instance['title'] = strip_tags($new_instance['title']);
            return $instance;
        }

        function form($instance)
        {
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Title:</label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" type="text"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                       value="<?php echo isset($instance['title']) ? esc_attr($instance['title']) : ''; ?>"/>
            </p> 
            <?php
            foreach ($this->socials as $key => $social) {
            ?>
                <p>
                <label for="<?php echo esc_attr($this->get_field_id($social['name'])); ?>"><?php echo esc_html($key); ?>
                    :</label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id($social['name'])); ?>" type="text"
                       name="<?php echo esc_attr($this->get_field_name($social['name'])); ?>"
                       value="<?php echo isset($instance[$social['name']]) ? esc_attr($instance[$social['name']]) : ''; ?>"/>
                </p>
            <?php
            }
        }
    
    }

add_action('widgets_init', 'social_links');

function social_links()
{
    register_widget('social_links');
}
