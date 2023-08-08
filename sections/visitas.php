<?php
   $query = new WP_query( 'pagename=visitas');

	   if( $query->have_posts()){ while ( $query->have_posts()){
	        $query->the_post(); ?>


	<section id="visitas" class="visitas">
	    <div class="container text-center">
	      <h3><?php the_content(); ?></h3>
	    </div>
	</section>

	<?php } 
	        } wp_reset_postdata();
?>
