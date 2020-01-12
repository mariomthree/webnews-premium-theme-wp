<div style="background-color: #113555;">
<div class="container-fluid">
	<div class="row p-5">
		<div class="col-xl-4 col-md-4 col-sm-12">
				<?php 
					if (is_active_sidebar('footer-2-column-1')) {
						dynamic_sidebar('footer-2-column-1');
					}
				?>
		</div>
		<div class="col-xl-4 col-md-4 col-sm-12">
			<?php 
				if (is_active_sidebar('footer-2-column-2')) {
					dynamic_sidebar('footer-2-column-2');
				}
			?>
		</div>
		<div class="col-xl-4 col-md-4 col-sm-12">
			<?php 
				if (is_active_sidebar('footer-2-column-3')) {
					dynamic_sidebar('footer-2-column-3');
				}
			?>
		</div>
	</div>
</div>
</div>
