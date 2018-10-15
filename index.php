<?php
get_header();

$bannerimage_id = get_field('banner_image');

?>

<div class="page-banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/banner-image-3.jpg'); ?>')">

		<div class="page-banner-head">
			<h1>Market Updates</h1>
			<p class="page-banner-subheading">Keep up with our latest news</p>
		</div>
</div>

<div class="blog-loop-container">

  <?php 
  while(have_posts()){
    the_post(); ?>
    <div class="blog-loop-item">
      <h2 class="blog-loop-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

      <div class="blog-loop-meta">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php  the_time('j M y'); ?> in <?php echo get_the_category_list(', '); ?></p> 
      </div>

      <div class="blog-loop-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>

    </div>


    <?php } 

    echo paginate_links(); ?>
    
  </div>

  <?php get_footer(); ?>