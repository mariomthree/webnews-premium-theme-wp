<?php
/**
 * Widget Totbar
 *
 *
 * @package WebNews
 */

?>
	<div class="col-md-5 col-lg-5  headerSectionTwo headerHidden">
        <div class="headerRight">
            <?php 
                if(is_active_sidebar( 'header-right' )){
                    dynamic_sidebar('header-right');
                }
            ?>
        </div>
	</div>