<?php
   $query = new WP_query( 'pagename=taller');

   if( $query->have_posts()){ while ( $query->have_posts()){
        $query->the_post(); ?>


<section id="google-reviews" class="recent-prod-section style-one">
    <div class="container text-center">
      <h3><?php the_content(); ?></h3>
    </div>
</section>

<?php } 
        } wp_reset_postdata();
?>
