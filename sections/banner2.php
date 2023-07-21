
<?php
   $query = new WP_query( 'pagename=aretes-kantu-colibri');

    if( $query->have_posts()){ while ( $query->have_posts()){
        $query->the_post(); ?>

		<div class="site-banner banner-kuuki" style="background-image: url(<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>);">
		    <div class="item">
		        <h2 class="banner-title"><?php the_title(); ?></h2>
		    </div>
		    <div class="item">
		        <?php the_content(); ?>
		    </div>
		    <div class="item">
		        <a class="btn-readmore" href="<?php bloginfo('url'); ?>/producto/aretes-kantu-colibri/">Ver</a>
		    </div>
		</div>

<?php } 
        } wp_reset_postdata();
?>