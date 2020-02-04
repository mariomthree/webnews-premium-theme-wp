<?php
/**
 * Widget Totbar
 *
 *
 * @package webnews
 */

?>
	<div class="col-md-6 col-lg-6  headerSectionTwo headerHidden">
        <div class="headerRight">
            <?php 
                if(is_active_sidebar( 'header-right' )){
                    dynamic_sidebar('header-right');
                }
            ?>
        </div>
	</div>