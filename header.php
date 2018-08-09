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
			<!-- 	<ul class="navigation mobile-nav" data-nav="close">
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="rent-a-vehicle.php">About</a></li>
					<li><a href="why-nz.html">Current Listings</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul> -->

				<?php wp_nav_menu(array(
					'theme_location' => 'barfootNavigation',
					'menu_class' => 'navigation mobile-nav'
				)); ?>

				<ul class="navigation desktop-nav" data-nav="close">
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="rent-a-vehicle.php">About</a></li>
					<li><a href="why-nz.html">Current Listings</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>