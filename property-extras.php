<?php
	$terms = get_the_terms(get_the_ID(),'sale_type');

	foreach($terms as $term){

		if($term->name == 'Lease'){
			echo '<span>Lease Term: '. get_field('lease_term').' '.get_field('lease_term_period').'</span>';
		}

		if($term->name == 'Auction'){
			echo '<p>Auction Date: '. get_field('auction_date') .'</p>';
			echo '<p>Auction Time: '. get_field('auction_time') .'</p>';
		}
	  
	}

?>