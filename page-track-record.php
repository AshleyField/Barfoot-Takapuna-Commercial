<?php get_header();

	get_template_part('content', 'page-banner'); ?>

	<div class="track-record-wrapper">
		<div class="track-record-inner">
		<?php 

				$args = array(
					'post_type'=>'properties',
				);
				// The Query
				$the_query = new WP_Query( $args );


				$terms = get_terms('property_status',array('hide_empty'=>true));

				?>

				<?php

				$counter = 0;


				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$terms = get_the_terms(get_the_ID(),'property_status');

						foreach($terms as $term){

							if($term->name == 'Sold' || $term->name == 'Leased'){
								get_template_part('content','track-record');
							}
						  
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				}
			?>
		</div>

	</div>

<?php get_footer();?>