<?php 
get_header();

if ( have_posts() ) while ( have_posts() ) : the_post();

$terms = get_the_terms(get_the_ID(),'property_status');

	foreach($terms as $term){

		if($term->name == 'Current' || $term->name == 'Leased' || $term->name == 'Sold'){
 			get_template_part('property', 'single');
		}

		if($term->name == 'Withdrawn'){
			get_template_part('property', 'single-withdrawn');
		}
 	}
        
	endwhile;

get_footer();

 ?>