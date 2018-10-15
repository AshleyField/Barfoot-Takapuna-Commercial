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
		

		<?php 

			global $flag;

			$flag = 'homepage';

			echo do_shortcode('[listing featured=1 template="featuredSlider" ]'); 

			$flag = '';

		?>

		<!-- Featured Properties -->

		<!-- <div class="swiper-container">
		    <div class="swiper-wrapper">
		    	<div class="swiper-slide">
		    		<div class="property-area-outer">

						<div class="property-area">
							<div class="property-area-heading">
								<span>Featured Listing</span>
							</div>
							<div class="property-area-image">
								<a href="">
									<img src="<?php echo get_theme_file_uri('/assets/images/property-1.jpg')?>" alt="">
								</a>
							</div>
							<div class="property-area-info">
								<div class="property-area-info-heading">
									<span>
										Exciting business space
									</span>
								</div>
								<div class="property-area-info-price">
									<span>
										$2,400,000
									</span>
								</div>
								<div class="property-area-info-address">
									<span>123 Anzac Street, Takapuna</span>
								</div>
								<div class="property-area-info-description">
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nisi et dui dignissim aliquam. Integer finibus efficitur pellentesque. Aenean rhoncus efficitur leo, eget egestas enim porta in. In hac habitasse platea dictumst. Praesent congue enim vulputate, hendrerit sapien in, posuere nunc.</span>
								</div>
							</div>
							<div class="property-area-info-second">
								<div class="property-area-info-area">
									<i class="fas fa-expand-arrows-alt"></i>
									<span>227m2</span>
								</div>
								<div class="property-area-info-spaces">
									<i class="fas fa-car"></i>
									<span>12 Spaces</span>
								</div>
								<div class="property-area-info-list">
									<ul>
										<li>Offices</li>
										<li>Air-Conditioning</li>
										<li>Alarm</li>
										<li>Data Cabling</li>
										<li>Easy Motorway Access</li>
										<li>Flexible Layout</li>
										<li>Generous Car Parking</li>
										<li>Local Businesses</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
		    	</div>
		    	<div class="swiper-slide">
		    		<div class="property-area-outer">

						<div class="property-area">
							<div class="property-area-heading">
								<span>Featured Listing</span>
							</div>
							<div class="property-area-image">
								<img src="<?php echo get_theme_file_uri('/assets/images/property-1.jpg')?>" alt="">
							</div>
							<div class="property-area-info">
								<div class="property-area-info-heading">
									<span>
										Exciting business space
									</span>
								</div>
								<div class="property-area-info-price">
									<span>
										$2,400,000
									</span>
								</div>
								<div class="property-area-info-address">
									<span>123 Anzac Street, Takapuna</span>
								</div>
								<div class="property-area-info-description">
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nisi et dui dignissim aliquam. Integer finibus efficitur pellentesque. Aenean rhoncus efficitur leo, eget egestas enim porta in. In hac habitasse platea dictumst. Praesent congue enim vulputate, hendrerit sapien in, posuere nunc.</span>
								</div>
							</div>
							<div class="property-area-info-second">
								<div class="property-area-info-area">
									<i class="fas fa-expand-arrows-alt"></i>
									<span>227m2</span>
								</div>
								<div class="property-area-info-spaces">
									<i class="fas fa-car"></i>
									<span>12 Spaces</span>
								</div>
								<div class="property-area-info-list">
									<ul>
										<li>Offices</li>
										<li>Air-Conditioning</li>
										<li>Alarm</li>
										<li>Data Cabling</li>
										<li>Easy Motorway Access</li>
										<li>Flexible Layout</li>
										<li>Generous Car Parking</li>
										<li>Local Businesses</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="swiper-pagination"></div>
		</div>	 -->

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
<!-- 
		<div class="property-slider">
			<div class="property-slider-property">
				<div class="property-slider-property-heading">
					<span>Wairau Valley Industrial</span>
				</div>
				<div class="property-slider-property-image">
					<img src="./assets/images/property-3.jpg" alt="">
				</div>
				<div class="property-slider-property-price">
					<span>$3,400,000</span>
				</div>
				<div class="property-slider-property-description">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.
					</span>
				</div>
			</div>

			<div class="property-slider-property">
				<div class="property-slider-property-heading">
					<span>6 Canaveral Drive</span>
				</div>
				<div class="property-slider-property-image">
					<img src="assets/images/property-1.jpg" alt="">
				</div>
				<div class="property-slider-property-price">
					<span>$3,400,000</span>
				</div>
				<div class="property-slider-property-description">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.
					</span>
				</div>
			</div>

			<div class="property-slider-property">
				<div class="property-slider-property-heading">
					<span>6 Ride Way</span>
				</div>
				<div class="property-slider-property-image">
					<img src="assets/images/property-4.jpg" alt="">
				</div>
				<div class="property-slider-property-price">
					<span>$3,400,000</span>
				</div>
				<div class="property-slider-property-description">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.
					</span>
				</div>
			</div>
		</div> -->

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