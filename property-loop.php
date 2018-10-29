<div class="listing-loop-item">
	<div class="listing-loop-item-image">
		<img src="<?php the_field('main_image'); ?>" alt="">
	</div>
	<div class="listing-loop-item-content">
		<div class="loop-title">
			<span><?php the_title(); ?></span>
		</div>
		<div class="loop-sale-type">
			<span><?php echo '$'.get_field('price'); ?></span>
		</div>
		<div class="loop-address">
			<span>
				<?php $address_show = get_field('display_address');

					if($address_show == 'Yes'){
						get_template_part('property', 'show-address');
					}
				?>
			</span>
		</div>
		<div class="loop-extras">
			<div class="loop-extras-item">
				<i class="fas fa-car"></i><p><?php echo get_field('car_parks');?> Parks</p>
			</div>

			<div class="loop-extras-item">
				<i class="fas fa-expand-arrows-alt"></i><p><?php echo get_field('land_area');?> sqm</p>
			</div>

			<div class="loop-extras-item">
				<?php if(get_field('feature_1')){
					echo '<span>'.get_field('feature_1').'</span>';
				}?>
			</div>
		</div>

		<div class="loop-button">
			<a href="<?php the_permalink() ?>">View Property</a>
		</div>
	</div>
</div>