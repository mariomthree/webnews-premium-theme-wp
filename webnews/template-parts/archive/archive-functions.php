<?php 
/**
 * Archive Functions - Content view full or summary
 *
 * @package webnews
 *
 *
 */ 
	

	function archive_01($content_view){

	?>
	 	<header class="entry-header">
			<div class="categorys"><?php webnews_get_category(); ?></div>
			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta pb-1">
					<?php webnews_entry_meta(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php webnews_post_thumbnail(); ?>	
			
		<div class="entry-content">
			<?php if ($content_view == 'summary'): ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" class="text-dark">
					<?php echo substr(strip_tags(get_the_content()),0,233).' [...]'; ?>
				</a>
			<?php
			elseif ($content_view == 'full'):
				echo get_the_content();
			endif;
			?>		
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php webnews_edit_post_link(); ?>
		</footer><!-- .entry-footer -->
		
	<?php	
	}

	function archive_02($content_view){
	?>
	<div class="row">

		<div class="webnews-col-40">
			<div class="img-center col-40">
				<?php webnews_post_thumbnail(); ?>	
			</div>
			
		</div>
		
		<div class="webnews-col-60 col-md">
			
			<header class="entry-header">
				<div class="categorys"><?php webnews_get_category(); ?></div>
				<?php
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php webnews_entry_meta(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>

			</header><!-- .entry-header -->
			
			<div class="entry-content">
				<?php if ($content_view == 'summary'): ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" class="text-dark">
						<?php echo substr(strip_tags(get_the_content()),0,233).' [...]'; ?>
					</a>
				<?php
				elseif ($content_view == 'full'):
					echo get_the_content();
				endif;
			?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php webnews_edit_post_link(); ?>
			</footer><!-- .entry-footer -->
		
		</div>

   </div>

   <?php
	}


