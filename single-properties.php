<?php 
get_header();

if ( have_posts() ) while ( have_posts() ) : the_post();
            
 	get_template_part('property', 'single');
        
	endwhile;

get_footer();

 ?>