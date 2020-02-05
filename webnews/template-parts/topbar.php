<?php
/**
 * Widget Totbar
 *
 *
 * @package webnews
 */

?>
 
	<div class="col-md-7 col-lg-7 headerSection">
		<ul class="topbar topbarLeft" style="padding-top: .4rem !important;">	
			<?php
	            if(is_active_sidebar( 'topbar-left' )){
	                dynamic_sidebar('topbar-left');
	            }
        	 ?>
    	</ul>
	</div>
	<div class=" col-sm-12 col-md-5 col-lg-5 headerSection">
		<ul class="topbar topbarRight" style="padding-top: .4rem !important;">
			<?php
	            if(is_active_sidebar( 'topbar-right' )){
	                dynamic_sidebar('topbar-right');
	            }
        	 ?>
		</ul>
	</div>
