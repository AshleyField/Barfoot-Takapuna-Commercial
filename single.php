<?php get_header(); ?>

	<div class="page-banner" style="background-image: url('<?php the_field('blog_main_image'); ?>')">

		<div class="page-banner-head">
			<h1><?php the_field('blog_short_title');?></h1>
		</div>
	</div>
	

	<div class="blog-post-single-outer">

		<?php while(have_posts()) {
			the_post(); ?>
		<div class="blog-post-single">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>

			<div class="posted-by-single">
				<span>
					Posted by <?php the_author_posts_link(); ?> on <?php  the_time('j M y'); ?> in <?php echo get_the_category_list(', '); ?>
				</span>
			</div>
			<div class="back-to-all">
				<a href="/market-updates">All Market Updates</a>
			</div>
			<div class="page-content-info">
				<?php the_content(); ?>
			</div>
		</div>

		<?php }?>

		<?php 

		$posts = get_field('relationship');

		if( $posts ): ?>
		    <ul>
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        <li>
		            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		            <span>Custom field from $post: <?php the_field('staff_position'); ?></span>
		        </li>
		    <?php endforeach; ?>
		    </ul>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>


	</div>

<? get_footer();?>