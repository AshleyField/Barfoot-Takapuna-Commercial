<?php get_header();
	
	?>

	<div class="page-banner" style="background-image: url('<?php the_field('banner_image'); ?>')">

		<div class="page-banner-head">
			<h1><?php the_title();?></h1>
		</div>
	</div>
	<div class="team-wrapper">
		<div class="team-inner">
			<?php

				$args = array('post_type'=>'staff');
				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						get_template_part('content', 'meet-the-team');
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				}
			?>
		</div>
	</div>

<?php get_footer();?>