if($flag == 'homepage'){
	if ( $query_open->have_posts() ) { ?>

	<div class="loop epl-shortcode">
		<div class="loop-content bla epl-shortcode-listing <?php echo epl_template_class( $attributes['template'], 'archive' ); ?>">
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<?php
					if ( $attributes['tools_top'] == 'on' ) {
						do_action( 'epl_property_loop_start' );
					}
					while ( $query_open->have_posts() ) {
						$query_open->the_post();
						$attributes['template'] = str_replace( '_', '-', $attributes['template'] );
						epl_property_blog( $attributes['template'] );
					}
					if ( $attributes['tools_bottom'] == 'on' ) {
						do_action( 'epl_property_loop_end' );
					}
					?>
				</div>

			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>

   				<div class="swiper-pagination"></div>
			</div>
		</div>
		<div class="loop-footer">
				<?php
					if ( $attributes['pagination'] == 'on' ) {
						do_action( 'epl_pagination',array( 'query'	=> $query_open ) );
					}
				?>
		</div>
	</div>

	<?php
	wp_reset_postdata();
} else {
	echo '<h3>' . __( 'Nothing found, please check back later.', 'easy-property-listings'  ) . '</h3>';
}