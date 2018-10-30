<div class="listing-loop-item">
	<div class="listing-loop-item-image">
		<?php 
			$terms = get_the_terms(get_the_ID(),'sale_type');

			foreach($terms as $term){
				if($term->name == 'For Sale' || $term->name == 'Auction' || $term->name == 'Lease'){
					$class = '';
					if($term->name == 'For Sale'){
						$class = 'sale-type-for-sale';
					}

					if($term->name == 'Auction'){
						$class = 'sale-type-auction';
					}

					if($term->name == 'Lease'){
						$class = 'sale-type-lease';
					}
					echo '<div class="property-image-sale '. $class .'"><p>'. $term->name .'</p></div>';
				}
			}

			?>
		<img src="<?php the_field('main_image'); ?>" alt="">
	</div>
	<div class="listing-loop-item-content">
		<div class="loop-title">
			<span><?php the_title(); ?></span>
		</div>
		<div class="loop-sale-type">
			<?php 
				get_template_part('property', 'pricing');
			?>
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
			<?php if(get_field('feature_1')){ ?>

				<div class="loop-extras-item">
					<i class="fas fa-info-circle"></i>
				<?php echo '<p>'.get_field('feature_1').'</p>';
			}?>
			</div>
		</div>

		<div class="loop-button">
			<a href="<?php the_permalink(); ?>">View Property</a>
		</div>
	</div>
</div>