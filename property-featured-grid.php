<div class="home-featured-item">
	<div class="home-featured-item-image">
		<img src="<?php the_field('main_image'); ?>" alt="">
	</div>
	<div class="home-featured-item-content">
		<div class="home-title">
			<span><?php the_title(); ?></span>
		</div>
		<div class="home-sale-type">
			<span><?php do_action('epl_property_price'); ?></span>
		</div>
		<div class="home-address">
			<span><?php do_action('epl_property_address'); ?></span>
		</div>
		<div class="home-extras">
			<?php do_action('epl_property_tab_section'); ?>
		</div>

		<div class="home-button">
			<a href="<?php the_permalink() ?>">View Property</a>
		</div>
	</div>
</div>
