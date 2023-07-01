<!--<?php if(current_user_can('administrator') ) {  ?>-->
	<?php
	   $query = new WP_query( 'pagename=cita');
	   if( $query->have_posts()){ while ( $query->have_posts()){
	  $query->the_post(); ?>
	<section style="background: url(<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>) no-repeat center center fixed; background-size: cover;">
		<div class="mask"></div>
		<div class="container allcite">
			<!--<div class="title text-center">
				<h1><?php the_title(); ?></h1>
			</div>-->
			<div class="cite text-center">
				<?php the_content(); ?>
			</div>
			<div class="author text-right">
				<p><?php echo get_post_meta($post->ID, 'author_cite', true); ?> </p>
			</div>
		</div>
	</section>
	<?php } } wp_reset_postdata(); ?>
<!-- <?php } ?> -->