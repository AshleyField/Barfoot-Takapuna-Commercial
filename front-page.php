<?php get_header(); ?>

		<!-- Hero Banner -->
		
		<div class="hero">
			<div class="hero-overlay">
				<div class="hero-content">
					<h1>Sell with confidence</h1>
					<h2>Choose Barfoot & Thompson Takapuna</h2>
					<div class="horizontal-bar"></div>
				</div>
			</div>
		</div>

		<div class="home-heading">
			<h2>Featured Properties</h2>
		</div>
		

		<!-- Featured Properties -->

		<?php 

			global $flag;

			$flag = 'homepage';

			echo do_shortcode('[listing featured=1 template="featuredGrid" ]'); 

			$flag = '';

		?>

		<!-- Testimonial Area -->

		<div class="mid-banner">
			<div class="mid-banner-content">

				<div class="frontquote">
					<i class="fas fa-quote-left"></i>
				</div>

				<div class="mid-banner-content-text">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nisi et dui dignissim aliquam. Integer finibus efficitur pellentesque. Aenean rhoncus efficitur leo, eget egestas enim porta in. In hac habitasse platea dictumst. Praesent congue enim vulputate, hendrerit sapien in, posuere nunc.
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
			<h3 class="blog-subheading-home">The market is constantly changing, we post on our blog regularly so you can keep up to date with the current trends.</h3>
			<div class="blog-inner-home">
				<?php 

				$homepagePosts = new WP_Query(array(
				  'posts_per_page' => 2
				));

				while ($homepagePosts->have_posts()){
				  $homepagePosts->the_post(); ?>

				 	<div class="blog-post-individual-home">
				 		<div class="blog-post-image-home" style="background-image: url('<?php the_field('blog_main_image')?>');">
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
				<p class="view-all-posts"><a href="<?php echo site_url('/blog'); ?>">View All Blog Posts</a></p>
			</div>
		</div>

		<?php get_footer() ?>