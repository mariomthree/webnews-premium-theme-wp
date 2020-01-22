<?php
/**
 * Custom Customizer Controls.
 *
 * @package WebNews
 */

class Dropdown_Taxonomies_Control extends WP_Customize_Control {

    public $type = 'dropdown-taxonomies';

    public $taxonomy = '';


    public function __construct( $manager, $id, $args = array() ) {

        $our_taxonomy = 'category';
        if ( isset( $args['taxonomy'] ) ) {
            $taxonomy_exist = taxonomy_exists( $args['taxonomy']  );
            if ( true === $taxonomy_exist ) {
                $our_taxonomy =  $args['taxonomy'];
            }
        }
        $args['taxonomy'] = $our_taxonomy;
        $this->taxonomy =  $our_taxonomy;

        parent::__construct( $manager, $id, $args );
    }

    public function render_content() {

        $tax_args = array(
            'hierarchical' => 0,
            'taxonomy'     => $this->taxonomy,
        );
        $all_taxonomies = get_categories( $tax_args );

        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <select <?php $this->link(); ?>>
                <?php
                printf( '<option value="%s" %s>%s</option>', 0, selected( $this->value(), '', false ), __( 'All', 'webnews' )  );
                ?>
                <?php if ( ! empty( $all_taxonomies ) ) :  ?>
                    <?php foreach ( $all_taxonomies as $key => $tax ) :  ?>
                        <?php
                        printf( '<option value="%s" %s>%s</option>', esc_attr( $tax->term_id ), selected( $this->value(), $tax->term_id, false ), esc_html( $tax->name ) );
                        ?>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
        </label>
        <?php
    }
}
