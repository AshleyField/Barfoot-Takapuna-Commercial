<div class="track-record-property">
	<div class="track-record-image">
		<!-- <p class="sale-type <?php echo (get_field('sale_type')=='Sold') ? 'label-red' : 'label-blue' ?>"><?php the_field('sale_type'); ?></p> -->
		<img src="<?php the_field('main_image');?>" alt="">
		<div class="record-sticker-container">
			<img class="record-sticker" src="<?php echo (get_field('sale_type')=='Sold') ? get_bloginfo('template_directory').'/assets/images/sold-Sticker.png' : get_bloginfo('template_directory').'/assets/images/lease-Sticker.png' ?>" alt="">
		</div>
		
	</div>
	<div class="track-record-content">
		<div class="track-record-title">
			<p><?php the_title(); ?></p>
		</div>
		<div class="track-record-address">
			<p><?php the_field('address'); ?></p>
		</div>
		<div class="track-record-description">
			<?php the_content(); ?>
		</div>
	</div>
	
</div>