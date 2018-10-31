<?php

	$price_status = get_field('display_price');
	$terms = get_the_terms(get_the_ID(),'sale_type');

	foreach($terms as $term){

		if($term->name == 'For Sale'){
			if($price_status == 'Yes'){
				echo '<span>For Sale $'.number_format(get_field('price'), 2, '.', ',').'</span>';
			}

			else {
				echo '<span>For Sale</span>';
			}
			
		}

		if($term->name == 'Lease'){
			if($price_status == 'Yes'){
				echo '<span>For Lease $'.number_format(get_field('rent'), 2, '.', ',').' P.A</span>';
			}

			else {
				echo '<span>For Lease</span>';
			}
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