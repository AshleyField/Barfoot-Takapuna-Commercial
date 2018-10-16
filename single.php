<?php get_header(); ?>

	<div class="page-banner" style="background-image: url('<?php the_field('blog_main_image'); ?>')">

		<div class="page-banner-head">
			<h1><?php the_title();?></h1>
		</div>
	</div>
	

	<div class="blog-post-single-outer">

		<?php while(have_posts()) {
			the_post(); ?>

		<div class="blog-post-single">
			<div class="posted-by-single">
				<span>
					Posted by <?php the_author_posts_link(); ?> on <?php  the_time('j M y'); ?> in <?php echo get_the_category_list(', '); ?>
				</span>
			</div>
			<p class="page-content-info">
				<?php the_content(); ?>
			</p>
		</div>

		<?php }?>

	</div>

<? get_footer();?>