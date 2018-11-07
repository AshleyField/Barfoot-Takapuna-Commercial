<?php get_header(); ?>

		<!-- Hero Banner -->

		<?php get_template_part('slider'); ?>

		<div class="home-heading">
			<h2>Featured Properties</h2>
		</div>
		

		<!-- Featured Properties -->
		<div class="listing-loop-wrapper homepage-loop">
			<?php 

				$args = array(
					'post_type'=>'properties',
					'tax_query'=> array(
						array(
							'taxonomy' => 'property_status',
							'field'    => 'slug',
							'terms'    => array( 'withdrawn'),
							'operator' => 'NOT IN',
						),
					)
				);
				// The Query
				$the_query = new WP_Query( $args );

				?>

				<?php

				$counter = 0;


				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$terms = get_the_terms(get_the_ID(),'featured_property');

						if(is_array($terms) || is_object($terms)){

							foreach($terms as $term){

								if($term->name == 'Featured' && $counter <= 5){
									get_template_part('property','loop');
									$counter++;
								}						  
							}

						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				}

			?>
		</div>

		<!-- Testimonial Area -->

		<div class="mid-banner">
			<div class="mid-banner-content">

				<div class="frontquote">
					<i class="fas fa-quote-left"></i>
				</div>

				<div class="mid-banner-content-text">
					<p>
						<?php the_field('homepage_quote'); ?>
					</p>
				</div>
				
				<div class="backquote">
					<i class="fas fa-quote-right"></i>
				</div>

			</div>
		</div>

		<!-- Blog Posts Loop -->
		<div class="blog-posts-home">
			<h2 class="blog-heading-home">Market Updates</h2>
			<h3 class="blog-subheading-home"><?php the_field('market_updates_subheading'); ?></h3>
			<div class="blog-inner-home">
				<?php 

				$homepagePosts = new WP_Query(array(
				  'posts_per_page' => 3
				));

				while ($homepagePosts->have_posts()){
				  $homepagePosts->the_post(); ?>

				 	<div class="blog-post-individual-home">
				 		<div class="blog-post-image-home">
				 			<img src="<?php the_field('blog_main_image')?>" alt="">
				 		</div>
				 		<div class="blog-post-individual-content-home">
							<div class="blog-post-content">
								<h5 class="blog-post-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
								<a class="blog-post-date-home" href="<?php the_permalink(); ?>">
							 		<span>Posted On: </span>
							 		<span class="blog-post-date-month-home"><?php the_time('M'); ?></span>
							 		<span class="blog-post-date-day-home"><?php the_time('d'); ?></span>  
							 	</a>
								<p>
									<?php echo wp_trim_words(get_the_content(), 18); ?>
								</p>
								<a href="<?php the_permalink(); ?>" class="blog-post-read-more">Read more</a>
							</div>
				 		</div>
					 	
					</div>

				  <?php } wp_reset_postdata();

				?>
				<p class="view-all-posts"><a href="<?php echo site_url('/market-updates'); ?>">View All Blog Posts</a></p>
			</div>
		</div>

		<?php get_footer() ?>