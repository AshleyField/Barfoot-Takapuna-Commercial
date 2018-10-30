<?php

	get_header();


	get_template_part('content','standard-banner');

	$args = array('post_type'=>'properties');
	// The Query
	$the_query = new WP_Query( $args );

	echo $terms;
	?>

	<div class="listing-loop-wrapper">

	<?php

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				$terms = get_the_terms(get_the_ID(),'property_status');

				foreach($terms as $term){

					if($term->name == 'Current'){
						get_template_part('property','loop');
					}
				  
				}
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		} ?>

	</div>
	<?php

get_footer();

?>