<?php 
$terms = get_the_terms(get_the_ID(),'property_status');

foreach($terms as $term){
 ?>

<div class="track-record-property">
	<div class="track-record-image">
		<img src="<?php the_field('main_image');?>" alt="">
		<div class="record-sticker-container">
			<img class="record-sticker" src="<?php echo ($term->name == 'Sold') ? get_bloginfo('template_directory').'/assets/images/sold-Sticker.png' : get_bloginfo('template_directory').'/assets/images/lease-Sticker.png' ?>" alt="">
		</div>
		
	</div>
	<div class="track-record-content">
		<div class="track-record-title">
			<p><?php the_title(); ?></p>
		</div>
		<?php $address_show = get_field('display_address');

			if($address_show == 'Yes'){ ?>
				<div class="track-record-address">
					<p><?php get_template_part('property', 'show-address'); ?></p>
				</div>

				
			<?php } ?>
		
		<div class="track-record-description">
			<?php the_content(); ?>
		</div>
	</div>
	
</div>
<?php } ?>