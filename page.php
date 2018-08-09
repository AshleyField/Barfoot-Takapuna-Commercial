<?php get_header();

	while(have_posts()) {
		the_post(); ?>

	<div class="page-content">
		<h1><?php the_title(); ?></h1>
		<p class="page-content-info">
			<?php the_content(); ?>
		</p>
	</div>

	<?php }?>

<? get_footer();?>