<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo get_bloginfo( 'name' );?> - <?php the_title(); ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
	<link rel="stylesheet" type="text/css" href="style.css"> -->

	<?php wp_head();

	$pagetitle = get_the_title();
	?>

</head>
<body>
</body>
</html>

	<div class="wrapper">

		<!-- Navigation -->

		<div class="nav-wrap">
			<nav>
				<div class="logo">
					<a href="index.html">
						<img src="<?php echo get_theme_file_uri('/assets/images/Barfoot-and-Thompson-Logo-Large.jpg') ?>" alt="">
					</a>

				</div>
				<div class="bars">
					<i class="fas fa-bars"></i>
				</div>
				<ul class="navigation mobile-nav" data-nav="close">
					<li><a href="/" class="<?php if($pagetitle == 'Home') echo 'active' ?>">Home</a></li>
					<li><a href="/market-updates" class="<?php if($pagename == 'market-updates') echo 'active'; ?>">Market Updates</a></li>
					<li><a href="/commercial" class="<?php if(strpos(get_permalink(), 'commercial') !== false){ echo 'active';} ?>">Current Listings</a></li>
					<li class="dropdown">
						<p class="dropbtn">About</a>
						<i class="fas fa-sort-down dropbtn"></i>

						<div class="dropdown-content desktop-sub-nav-closed">

							<a href="/meet-the-team" class="sub-menu-item <?php if($pagetitle == 'Meet The Team') echo 'active' ?>">Meet The Team</a>
							<a href="/testimonials" class="sub-menu-item <?php if($pagetitle == 'Testimonials') echo 'active' ?>">TESTIMONIALS</a>
							<a href="/track-record" class="sub-menu-item <?php if($pagetitle == 'Track Record') echo 'active' ?>">TRACK RECORD</a>

						</div>
					</li>
					<li>
						<a href="/contact" class="<?php if($pagetitle == 'Contact') echo 'active' ?>">Contact</a>
					</li>
				</ul>
					

				<ul class="navigation desktop-nav" data-nav="close">
					<li><a href="/" class="<?php if($pagetitle == 'Home') echo 'active' ?>">Home</a></li>
					<li><a href="/market-updates" class="<?php if($pagename == 'market-updates') echo 'active'; ?>">Market Updates</a></li>
					<li><a href="/commercial" class="<?php if(strpos(get_permalink(), 'commercial') !== false){ echo 'active';} ?>">Current Listings</a></li>
					<li class="dropdown">
						<p class="dropbtn">About</a>
						<i class="fas fa-sort-down dropbtn"></i>

						<div class="dropdown-content desktop-sub-nav-closed">

							<a href="/meet-the-team" class="sub-menu-item <?php if($pagetitle == 'Meet The Team') echo 'active' ?>">Meet The Team</a>
							<a href="/testimonials" class="sub-menu-item <?php if($pagetitle == 'Testimonials') echo 'active' ?>">TESTIMONIALS</a>
							<a href="/track-record" class="sub-menu-item <?php if($pagetitle == 'Track Record') echo 'active' ?>">TRACK RECORD</a>

						</div>
					</li>
					<li>
						<a href="/contact" class="<?php if($pagetitle == 'Contact') echo 'active' ?>">Contact</a>
					</li>
				</ul>
			</nav>
		</div>

		<?php 
		$url_prefix = get_bloginfo('url');
		global $wp;  
		$current_url = home_url(add_query_arg(array(),$wp->request));
		if($current_url == $url_prefix.'/commercial'){
			get_template_part('content', 'page-banner');
		} 
		?>