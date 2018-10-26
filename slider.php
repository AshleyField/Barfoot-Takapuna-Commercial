<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php

        $args = array('post_type'=>'slides');
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();

            get_template_part('content', 'slides');
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        }
      ?>

  </div>
  <!-- Add Arrows -->
  <div class="swiper-button-next swiper-button-white"></div>
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-pagination"></div>
</div>
