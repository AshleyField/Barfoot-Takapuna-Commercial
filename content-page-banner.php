<div class="page-banner" style="background-image: url(
<?php if(strpos(get_permalink(), '/commercial/') !== false){
	 echo get_template_directory_uri() . '/assets/images/property-3.jpg';
	}
	else {
		echo get_field('banner_image'); ;
	}?>)">
	
	<div class="page-banner-head">

		<?php if(strpos(get_permalink(), 'commercial') !== false){
			echo '<h1>Current Listings</h1>';
		}
		else {

			echo '<h1>'.get_the_title() . '</h1>';
		}
			?>

	</div>
</div>