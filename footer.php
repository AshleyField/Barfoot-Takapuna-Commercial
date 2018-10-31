		<footer>
			<div class="footer-inner">
				<div class="footer-row top-row">
					<ul class="footer-nav">
						<li class="footer-nav-item">
							<a href="/" class="<?php if($pagetitle == 'Home') echo 'active' ?>">Home</a></li>
						<li class="footer-nav-item">
							<a href="/market-updates" class="<?php if($pagename == 'market-updates') echo 'active'; ?>">Market Updates</a></li>
						<li class="footer-nav-item">
							<a href="/commercial" class="<?php if($pagename == 'Properties'){ echo 'active';} ?>">Current Listings</a></li>
						<li class="footer-nav-item">
							<a href="/meet-the-team" class="<?php if($pagetitle == 'Meet The Team') echo 'active' ?>">Meet The Team</a>
						</li>
						<li class="footer-nav-item">
							<a href="/testimonials" class="<?php if($pagetitle == 'Testimonials') echo 'active' ?>">TESTIMONIALS</a>
						</li>
						<li class="footer-nav-item">
							<a href="/track-record" class="<?php if($pagetitle == 'Track Record') echo 'active' ?>">TRACK RECORD</a>
						</li>
						<li class="footer-nav-item">
							<a href="/contact" class="<?php if($pagetitle == 'Contact') echo 'active' ?>">Contact</a>
						</li>
					</ul>
					<div class="footer-image">
						<a href="/">
							<img src="<?php echo bloginfo('template_directory')?>/assets/images/Barfoot-and-Thompson-Logo-Large.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="footer-spacer"></div>
				<div class="footer-row bottom-row">
					<div class="footer-address">
						<p>Cnr Lake Road &, Blomfield Spa, Takapuna, Auckland 0622</p>
					</div>
					<div class="footer-copy">© Copyright Barfoot & Thompson 2018 - <a href="www.precisionweb.co.nz">Website by Precision Web</a></div>
					<div class="footer-social">
						<a href="https://www.facebook.com/Barfoot-Thompson-Commercial-275251036179815/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/company/barfoot-thompson-commercial/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			</div>
		</footer>
	</div>



	<!-- Scripts -->

	 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

	<?php wp_footer(); ?>

</body>
</html>