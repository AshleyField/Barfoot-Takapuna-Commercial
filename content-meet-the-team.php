<div class="team-member">
	<div class="team-images">
		<div class="team-photo">
			<img src="<?php the_field('staff_image'); ?>" alt="">
			
		</div>
		<div class="team-signature">
			<img src="<?php the_field('staff_signature'); ?>" alt="">
		</div>
	</div>
	<div class="team-content">
		<div class="name-position">
			<p class="team-name"><?php the_title(); ?></p>
			<p class="team-position"><?php the_field('staff_position');?></p>
		</div>
		<div class="team-bio">
			<?php the_content(); ?>
		</div>
	</div>
</div>