<div class="property-wrapper">
		<div class="property-title">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</div>

		<div class="property-subheading">
			<h3 class="secondary-heading"><?php echo get_field('secondary_heading'); ?></h3>
		</div>

		<div class="property-featured-image">
			<img src="<?php the_field('main_image'); ?>">
		</div>

		<div class="property-price-content">
			<div class="property-details-pricing">
				<?php


				$terms = get_terms('sale_type',array('hide_empty'=>true));

				foreach($terms as $term){

					if($term->name == 'Sale'){
						echo '<span>$'.get_field('price').'</span>';
					}
				  
				}

				?>
			</div>

			<div class="property-main-content">
				<?php the_content();?>
			</div>

		</div>

		<div class="property-gallery">
			<?php get_template_part('property','gallery'); ?>
		</div>

		<?php 
		$floorplan = get_field('floorplan');
		if($floorplan){?>
		<div class="floor-plan-link">
			<a href="<?php the_field('floorplan'); ?>"></a>
		</div>
		<?php }; ?>
		
		<div class="epl-tab-wrapper tab-wrapper">
			<div class="epl-tab-section epl-section-property-details">
				<h5 class="epl-tab-title tab-title"><?php echo apply_filters('property_tab_title',__('Property Details', 'easy-property-listings' )); ?></h5>
				<div class="epl-tab-content tab-content">
					<div class="epl-property-address property-details">
						<h3 class="epl-tab-address tab-address">
							<?php do_action('epl_property_address'); ?>
						</h3>
						<?php do_action('epl_property_land_category'); ?>
						<?php do_action('epl_property_price_content'); ?>
						<?php do_action('epl_property_commercial_category'); ?>
					</div>
					<div class="epl-property-meta property-meta">
						<?php do_action('epl_property_available_dates');// meant for rent only ?>
						<?php do_action('epl_property_inspection_times'); ?>
					</div>
				</div>
			</div>



			<?php do_action('epl_property_tab_section_before'); ?>
			<div class="epl-tab-section epl-tab-section-features">
				<?php do_action('epl_property_tab_section'); ?>
			</div>
			<?php do_action('epl_property_tab_section_after'); ?>



			<div class="property-video-and-map">
				<!-- If there is a video output on page -->
				<?php 
				global $property;
				if($property->get_property_meta('property_video_url')): 

				?>
				<div class="property-video">
					<?php do_action('epl_property_content_after');

					?>
				</div>
				<?php endif ?>

				<div class="property-map">
					<?php do_action( 'epl_property_map' ); ?>
				</div>

			</div>

			
			
			

			<?php do_action( 'epl_single_extensions' ); ?>

			<?php do_action( 'epl_single_before_author_box' ); ?>
			<?php do_action( 'epl_single_author' ); ?>
			<?php do_action( 'epl_single_after_author_box' ); ?>
		</div>
	</div>

	<div class="entry-footer epl-clearfix">
		<div class="entry-meta">
			<?php wp_link_pages( array( 'before' => '<div class="entry-utility entry-pages">' . __( 'Pages:', 'easy-property-listings'  ) . '', 'after' => '</div>', 'next_or_number' => 'number' ) ); ?>
		</div>
	</div>