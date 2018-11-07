<!DOCTYPE html>
<html>
<head>
	<?php 

	// echo $url;
	global $page_title_url;
	 ?>
	<title><?php echo get_bloginfo( 'name' );?> -
		<?php if ($page_title_url) {
    		echo 'Market Updates';
		}
		else {
			the_title();
		} ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

   <!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory')?>/assets/images/barfoot-favicon16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory')?>/assets/images/barfoot-favicon32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory')?>/assets/images/barfoot-favicon96x96.png" sizes="96x96">

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
					<a href="/">
						<img src="<?php echo get_theme_file_uri('/assets/images/Barfoot-and-Thompson-Logo-Large.jpg') ?>" alt="">
					</a>

				</div>
				<div class="bars">
					<i class="fas fa-bars"></i>
				</div>
				<ul class="navigation mobile-nav" data-nav="close">
					<li><a href="/" class="<?php if($pagetitle == 'Home') echo 'active' ?>">Home</a></li>
					<li><a href="/market-updates" class="<?php if($pagename == 'market-updates') echo 'active'; ?>">Market Updates</a></li>
					<li><a href="/properties" class="<?php if($pagename == 'properties') echo 'active'; ?>">Current Listings</a></li>
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
					<li><a href="/properties" class="<?php if($pagename == 'properties') echo 'active'; ?>">Current Listings</a></li>
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