<?php
   $query = new WP_query( 'pagename=aretes-kantu-colibri');

   if( $query->have_posts()){ while ( $query->have_posts()){
        $query->the_post(); ?>


<div id="banner_section" class="site-banner static-banner left-align">
        <div id="wp-custom-header" class="wp-custom-header">
                <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" width="1920" height="806" alt="">
        </div>
        <div class="banner-caption">
                <div class="container">
                        <h2 class="banner-title"><?php the_title(); ?></h2>
                        <div class="banner-desc"><?php the_content(); ?>
                        </div>
                        <a class="btn-readmore" href="<?php echo get_post_meta($post->ID, 'more_banner', true); ?>">Ver</a>
                </div>
        </div>
</div>

<?php } 
        } wp_reset_postdata();
?>