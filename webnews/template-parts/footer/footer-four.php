<div style="background-color: #113555;">
<div class="container-fluid site-footer-widgets">
	<div class="row p-5">
		<div class="col-xl-3 col-md-3 col-sm-12">
			<?php 
				if (is_active_sidebar('footer-1-column-1')) {
					dynamic_sidebar('footer-1-column-1');
				}
			?>
		</div>
		<div class="col-xl-3 col-md-3 col-sm-12">
			<?php 
				if (is_active_sidebar('footer-1-column-2')) {
					dynamic_sidebar('footer-1-column-2');
				}
			?>
		</div>
		<div class="col-xl-3 col-md-3 col-sm-12">
			<?php 
				if (is_active_sidebar('footer-1-column-3')) {
					dynamic_sidebar('footer-1-column-3');
				}
			?>
		</div>
		<div class="col-xl-3 col-md-3 col-sm-12">
			<?php  
				if (is_active_sidebar('footer-1-column-4')) {
					dynamic_sidebar('footer-1-column-4');
				}
			?>
		</div>
	</div>
</div>
</div>


