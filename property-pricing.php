<?php
	$terms = get_the_terms(get_the_ID(),'sale_type');

	foreach($terms as $term){

		if($term->name == 'For Sale'){
			echo '<span>For Sale $'.number_format(get_field('price'), 2, '.', ',').'</span>';
		}

		if($term->name == 'Lease'){
			echo '<span>For Lease $'.number_format(get_field('rent'), 2, '.', ',').' P.A</span>';
		}

		if($term->name == 'POA'){
			echo '<span>Price: POA</span>';
		}

		if($term->name == 'Auction'){
			echo '<span>Auction</span>';
		}

		if($term->name == 'Deadline Private Treaty'){
			echo '<span>Deadline Private Treaty</span>';
		}

		if($term->name == 'Tender'){
			echo '<span>Tender</span>';
		}
	  
	}

?>