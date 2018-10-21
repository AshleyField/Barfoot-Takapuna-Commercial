<?php get_header();
	$bannerimage_id = get_field('banner_image');

	get_template_part('content', 'page-banner');

	?>
	<div class="contact-wrap">

		<div class="page-contact">
			<div class="contact-info">
				<?php
					while(have_posts()) {
						the_post(); ?>
						<p class="page-content-info">
							<?php the_content(); ?>
						</p>

				<?php }?>
			</div>

			<div class="contact-contactform">
				<?php echo do_shortcode('[contact-form-7 id="82" title="Barfoot Contact"]')?>
			</div>

			<div class="contact-map">
				<div class="map-responsive">
					<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJYbTiqmI3DW0R7GOkwZ_-9wA&key=AIzaSyAQ3Y6VzLCoL6PcEpPRjAf1D8C_c7k9pnc" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	

<? get_footer();?>