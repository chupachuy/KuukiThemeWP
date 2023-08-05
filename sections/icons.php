<section class="icons-section">
	<div class="container">
		<?php
		   $query = new WP_query( 'pagename=pago-seguro');
		   if( $query->have_posts()){ while ( $query->have_posts()){
		  $query->the_post(); 
		 ?>
	  		<?php the_content(); ?>

	  	<?php } } wp_reset_postdata(); ?>
	</div>
</section>