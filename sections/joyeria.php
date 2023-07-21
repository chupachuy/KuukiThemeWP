
<?php
   $query = new WP_query( 'pagename=cuentanos-tu-idea');

    if( $query->have_posts()){ while ( $query->have_posts()){
        $query->the_post(); ?>

        <section id="cta_section" class="cta-section style-one">
            <section id="blossomtheme_companion_cta_widget-3" class="widget widget_blossomtheme_companion_cta_widget">
                <div class="right bttk-cta-bg" style="background:url(<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>) no-repeat; background-size: cover; background-position: center">
                    <div class="blossomtheme-cta-container tellme-idea-full">
                        <h2 class="widget-title" itemprop="name"><?php the_title(); ?></h2>
                        <div class="text-holder">
                            <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>-->
                            <div class="button-wrap">
                                <a target="_self" href="https://api.whatsapp.com/send?phone=525551032775&text=Hola%20,%20Cuentanos%20tu%20ídea." class="btn-cta btn-1"><?php the_content(); ?></a> </div>
                        </div>
                    </div>
                    <div class="tellmeidea-movil">
                        <p><a href="https://api.whatsapp.com/send?phone=525551032775&text=Hola%20,%20Cuentanos%20tu%20ídea.">Cotizar idea</a></p>
                    </div>
                </div>
            </section>
        </section>

    <?php } 
        } wp_reset_postdata();
?>