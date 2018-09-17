<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo get_bloginfo( 'name' );?> - <?php the_title(); ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
	<link rel="stylesheet" type="text/css" href="style.css"> -->

	<?php wp_head(); ?>

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
					<li><a href="/">Home</a></li>
					<li><a href="/market-updates">About</a></li>
					<li><a href="commercial">Current Listings</a></li>
					<li class="dropdown">
						<p class="dropbtn">About</a>
						<i class="fas fa-sort-down dropbtn" id="mobile-sub-menu"></i>

						<div class="dropdown-content dropdown-content-closed">

							<a href="/meet-the-team" class="sub-menu-item first-menu-item">Meet The Team</a>
							<a href="/testimonials" class="sub-menu-item">Testimonials</a>
							<a href="/track-record" class="sub-menu-item">Track Record</a>

						</div>
					</li>

					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
					

				<ul class="navigation desktop-nav" data-nav="close">
					<li><a href="/" class="<?php if(is_home())echo 'active' ?>">Home</a></li>
					<li><a href="/market-updates" class="<?php if(is_page('Market Updates'))echo 'active' ?>"> Market Updates</a></li>
					<li><a href="commercial">Current Listings</a></li>
					<li class="dropdown">
						<p class="dropbtn">About</a>
						<i class="fas fa-sort-down dropbtn"></i>

						<div class="dropdown-content desktop-sub-nav-closed">

							<a href="/meet-the-team" class="sub-menu-item <?php if(is_page('Meet The Team'))echo 'active' ?>">Meet The Team</a>
							<a href="/testimonials" class="sub-menu-item <?php if(is_page('Testimonials'))echo 'active' ?>">TESTIMONIALS</a>
							<a href="/track-record" class="sub-menu-item <?php if(is_page('Track Record'))echo 'active' ?>">TRACK RECORD</a>

						</div>
					</li>
					<li>
						<a href="contact">Contact</a>
					</li>
				</ul>
			</nav>
		</div>