<?php 
get_header();

$args = array('post_type'=>'properties');
	// The Query
	$the_query = new WP_Query( $args );

	?>

	<div class="listing-loop-wrapper">

	<?php

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				get_template_part('property', 'single');
	
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		} ?>

	</div>
	<?php

get_footer();

 ?>