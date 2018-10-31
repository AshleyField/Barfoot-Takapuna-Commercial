<?php 

$coordinates = get_field('coordinates');
 ?>


<h1 class="archived-heading">This Property is no longer available</h1>

<div class="property-wrapper">
		<div class="property-title">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</div>

		<div class="property-subheading property-address">
			<h3 class="secondary-heading"><?php echo get_field('secondary_heading'); ?></h3>

			<?php $address_show = get_field('display_address');

			if($address_show == 'Yes'){ ?>
			<h3 class="address-heading"><?php get_template_part('property', 'show-address'); ?></h3>
			<?php } ?>
		</div>


		<div class="property-featured-image">
			<a href="<?php the_field('main_image') ?>" data-lightbox="property-<?php echo $post->ID; ?>">
        		<img src="<?php the_field('main_image') ?>" alt="">
    		</a>
		</div>

		<div class="property-price-content">
			<div class="property-main-content">
				<?php the_content();?>
			</div>

		</div>

		<?php 
			$images = acf_photo_gallery('property_gallery', $post->ID);
   			

    		if(count($images)) { ?>

				<div class="property-gallery">
				
	    			<?php get_template_part('property','gallery'); ?>
				
				</div>

			<?php } ?>

		<div class="property-buttons">
			<?php 
				$floorplan = get_field('floorplan');
				if($floorplan){ ?>
				<div class="floor-plan-link property-button">
					<a href="<?php the_field('floorplan'); ?>" target="_blank">Download Floor Plan</a>
				</div>
				<?php }; ?>

				<div class="barfoot-main-link property-button">
					<a href="https://www.barfoot.co.nz/<?php the_field('property_id'); ?>" target="_blank">View on barfoot.co.nz</a>
				</div>
		</div>
		
		
		<div class="property-details">
			<h1>Property Details</h1>
			<div class="location property-details-row">
				<h4>Location: </h4>
				<?php 
				if($address_show == 'Yes'){ ?>
					<p><?php get_template_part('property', 'show-address'); ?></p>
					<?php }
				 ?>
			</div>
			<div class="car-parks property-details-row">
				<h4>Car Parks: </h4><p><?php the_field('car_parks');?> Parks</p>
			</div>
			<div class="property-id property-details-row">
				<h4>Property ID: </h4><p><?php the_field('property_id');?></p>
			</div>
			<?php if(get_field('feature_1')){ ?>
				<div class="property-id property-details-row">
					<h4>Other Features: </h4><p><?php the_field('feature_1');?></p>
				</div>
			<?php } ?>
			<?php if(get_field('feature_12')){ ?>
				<div class="property-id property-details-row">
					<h4>Other Features: </h4><p><?php the_field('feature_2');?></p>
				</div>
			<?php } ?>
			<?php if(get_field('feature_3')){ ?>
				<div class="property-id property-details-row">
					<h4>Other Features: </h4><p><?php the_field('feature_3');?></p>
				</div>
			<?php } ?>
		</div>

		<div class="property-agent-wrapper">
			<h1>Agent Details</h1>
			<?php 

			$posts = get_field('agent');

			if( $posts ): ?>
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <div class="property-agent">
			        	<div class="property-agent-image">
			        		<img src="<?php the_field('staff_image'); ?>" alt="">
			        	</div>
			        	<div class="property-agent-details">
			        		<p class="agent-name"><?php the_title(); ?></p>
			        		<p class="agent-phone"><?php the_field('staff_phone'); ?></p>
							<a href="<?php the_field('staff_email'); ?>" class="agent-email"><?php the_field('staff_email'); ?></a>
			        	</div>
			        </div>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		</div>

		<?php if($address_show == 'Yes'){ ?>

		<div class="property-map" data-lat="<?php echo $coordinates['lat'] ?>" data-lng="<?php echo $coordinates['lng']?>" data-address="<?php get_template_part('property', 'show-address'); ?>">
			<div class="property-map-inner" id="property-map"></div>
		</div>

		<?php } ?>

	</div>

	<div class="entry-footer epl-clearfix">
		<div class="entry-meta">
			<?php wp_link_pages( array( 'before' => '<div class="entry-utility entry-pages">' . __( 'Pages:', 'easy-property-listings'  ) . '', 'after' => '</div>', 'next_or_number' => 'number' ) ); ?>
		</div>
	</div>