<?php

/**
* Template Name: Contact Page
*/


 get_header(); ?>
<!-- Hero Banner -->
	<div class="contact-head">
			<h1>Contact Us<h1>
		</div>	
	<div class="bluebackground">
		<h2>Barfoot & Thompson North Shore Commercial<h2>
	</div>

	<div class="address">
		<h3>Address: Ground floor, 129 Hurstmere Road, Takapuna</h3>
	</div>

	<div class="pobox">
		<h4>
			PO Box: 331 346 Takapuna 0740
		</h4>
	</div>

	<div class="email"> 
		<h5>Email:  nscommercial@barfoot.co.nz</h5>
	</div>

	<div class="phone"> 
		<h5>Main line: 09 489 3880
		Fax: 09 489 3884</h5>
	</div>

	<div class="alt-contact">
		<h2>Alternatively,</h2>
	</div>


	<div class="contact-form">
	<form action="/my-handling-form-page" method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" size="35" id="name" name="user_name">
  </div>

  <div>
    <label for="mail">E-mail:</label>
    <input type="email" size="35" id="mail" name="user_email">
  </div>

  <div class="message">
    <label for="msg">Message:</label>
    <textarea id="msg" size="1000" name="user_message"></textarea>
  </div>
 
  <div class="button-outline">
    <button class ="button">Submit</button>
  </div>
	</form>
		</div>

<div class="map">
	<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJYbTiqmI3DW0R7GOkwZ_-9wA&key=AIzaSyAQ3Y6VzLCoL6PcEpPRjAf1D8C_c7k9pnc" allowfullscreen></iframe>
</div>


<?php get_footer() ?>

