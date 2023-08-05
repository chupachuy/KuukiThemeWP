<section id="recent_product_section" class="more-prod-section">
    <div class="container">
        <div class="recent-prod-wrap">
            <?php
                $query = new WP_query( 'pagename=catalogo-de-joyeria');
                if( $query->have_posts()){ while ( $query->have_posts()){
                $query->the_post(); 
            ?>
            <h2 class="section-title"><?php the_title(); ?> <img draggable="false" role="img" class="emoji" alt="❤️" src="https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg"></h2>
            <div class="section-desc"><?php the_content(); ?></div>

            <?php } } wp_reset_postdata(); ?>
        </div>
        <div class="more-prod-grid">

            <?php
                $args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'tax_query' => array( array(
                        'taxonomy'         => 'product_cat',
                        'field'            => 'slug', // Or 'term_id' or 'name'
                        'terms'            => ['anillos', "aretes", "dijes", "personalizables"], // A slug term
                        // 'include_children' => false // or true (optional)
                        'operator'  => 'IN'
                    )),
                    'orderby' => 'rand'
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                 global $product; 
            ?>
            <div class="item">
                <div class="recent-prod-image">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" class="attachment-full size-full wp-post-image" alt="<?php the_title(); ?>"></a>
                    <a class="button product_type_variable add_to_cart_button" href="<?php the_permalink(); ?>">Ver Producto</a> </div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                <p class="price"><span class="woocommerce-Price-amount amount"><?php echo wc_price( $price ); ?></span></p>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <div class="container text-center">
        <a class="btn-gostore" href="<?php bloginfo('url'); ?>/tienda">Ver tienda</a>
    </div>
</section>

