<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Shop
 */
    
    /**
     * After Content
     * 
     * @hooked blossom_shop_content_end - 20
    */

    ?>

    <?php
    do_action( 'blossom_shop_before_footer' );
    
    /**
     * Before footer
     * 
     * @hooked blossom_shop_instagram - 10
     * @hooked blossom_shop_newsletter - 20
    */
    do_action( 'blossom_shop_before_footer_start' );

    /**
     * Footer
     * @hooked blossom_shop_footer_start  - 10
     * @hooked blossom_shop_footer_two    - 30
     * @hooked blossom_shop_footer_bottom - 40
     * @hooked blossom_shop_footer_end    - 50
    */

    ?>

    <div class="site-footer">
    <div class="footer-t">
        <div class="container">
            <div class="grid column-4">
                <div class="col">
                    <section id="text-3" class="widget widget_text">
                        <h2 class="widget-title" itemprop="name">INFORMACIÓN</h2>
                        <div class="textwidget">
                            <p>Taller de joyería en Santa María la Ribera</p>
                            <ul>
                                <li><a href="tel:525551032775"><strong>52 55 5103 2775</strong></a></li>
                                <li><a href="mailto:hola@kuuki.com.mx"><strong>hola@kuuki.com.mx</strong></a></li>
                                <li>Sta María la Ribera, Cuauhtémoc, 06400 Ciudad de México, CDMX</li>
                            </ul>
                        </div>
                    </section>
                    <section id="bttk_social_links-5" class="widget">
                        <h2 class="widget-title" itemprop="name">Siguenos en redes Sociales</h2>
                        <ul class="social-networks-kuuki">
                            <li class="kuuki_bttk_social_links">
                                <a href="https://www.facebook.com/kuuki.joyas">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.svg" alt="facebook Kuuki" width="40">
                                </a>
                                <a href="https://www.instagram.com/kuuki.joyas/">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Instagram.svg" alt="facebook Kuuki" width="43">
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col">
                    <section id="categories-4" class="widget widget_categories">
                        <h2 class="widget-title" itemprop="name">Avisos</h2>
                        <ul>
                            <li class="cat-item"><a href="<?php bloginfo('url'); ?>/politica-privacidad">Politica de privacidad</a>
                            </li>
                            <li class="cat-item"><a href="<?php bloginfo('url'); ?>/refund_returns">Política de Devoluciones</a>
                            </li>
                            <li class="cat-item"><a href="<?php bloginfo('url'); ?>/contactanos">Contáctanos</a>
                            </li>
                            <li class="cat-item"><a href="<?php bloginfo('url'); ?>/garantias">Facturas</a>
                            </li>
                            <li class="cat-item"><a href="<?php bloginfo('url'); ?>/conocenos">Conócenos</a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col">
                    <section id="nav_menu-3" class="widget widget_nav_menu">
                        <h2 class="widget-title" itemprop="name">Horario</h2>
                        <div class="menu-quick-nav-container">
                            <p><strong>5pm a 9 pm</strong> de Lunes a Viernes<br /><strong>9am a 3pm</strong>  Sábados y Domingos</p>
                        </div>
                    </section>
                </div>

                <?php
                     global $post;

                    $last_posts = get_posts(array('posts_per_page' => 1));

                    foreach ( $last_posts as $post ) :
                     setup_postdata( $post );
                ?>
                <div class="col">
                    <section id="bttk_pro_recent_post-7" class="widget widget_bttk_pro_recent_post">
                        <h2 class="widget-title" itemprop="name">Último post</h2>
                        <ul class="style-one">
                            <li>
                                <a target="_self" href="<?php the_permalink(); ?>" class="post-thumbnail">
                                    <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="Kuuki último post"></a>
                                <div class="entry-header">
                                    <h3 class="entry-title"><a target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                <?php endforeach;
                 wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="footer-b">
            <div class="container">
                <div class="site-info">
                    <span class="copyright">© Copyright
                        <?php Date('Y'); ?>Kuuki - Taller de Joyería <?php echo Date('Y'); ?> </span> - Paga seguro con Tarjeta de Crédito, Débito o Paypal
                </div>
                <div class="payment-method">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/payment-method.png" alt="payments" ></noscript>
            </div>
        </div>
    </div>
</div>


<?php if(is_home() || is_front_page()){ ?>
    <div class="toast">
    <?php
    $nombres= array("Lucas Arias","aleria Méndez","Emiliano Paredes","Carolina Ramírez","Carlos Vargas","Andrea Ortega","Miguel Mendoza","Ana González","Gabriel Santos","Isidora Rivera","Diego López","Fernanda Acosta","Luis Jiménez","Daniela Castillo","Felipe Delgado","Renata Guzmán","Andrés Silva","Antonella Martínez","José Medina","Manuela Navarro","Francisco Ríos","Martina Soto","Pedro Morales","Natalia Cordero","Tomás Castro","Victoria Paredes","Javier Herrera","Valentina Méndez","Santiago Vega","Camila Álvarez","Nicolás Hernández","Isabella Romero","Juan Delgado","Sofía Ponce","Mateo Rojas","Antonella Fernández","Daniel Gutiérrez","Gabriela Reyes","Lucas Valenzuela","Valeria Aguilar","Emiliano Sánchez","Carolina Morales","Carlos Arias","Andrea Valenzuela","Miguel Pérez","Ana Castro" );
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 1,
        'orderby'        => 'rand'
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
        <div class="toast-content">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
          <div class="image-prduct">
              <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
          </div>
          <div class="message">
            <span class="message-text text-1"><?php echo $nombres[array_rand($nombres)]; ?></span>
            <span class="message-text text-2">Compro <?php the_title(); ?></span>
          </div>
        </div>
        <i class="uil uil-multiply toast-close">X</i>
        <div class="progress"></div>
        <?php endwhile;
            } else {
                echo __( 'No products found' );
            }
        wp_reset_postdata(); ?>
  </div>
<?php } ?>

    <a href="https://api.whatsapp.com/send?phone=525551032775&amp;text=Quiero%20m%C3%A1s%20informaci%C3%B3n%20de%20acerca%20de%20Kuuki." class="float" target="_blank">
    <i class="fa-brands fa-whatsapp fa-2x"></i>
    </a>


    <?php
    
    
    /**
     * After Footer
     * 
     * @hooked blossom_shop_page_end    - 20
    */
    do_action( 'blossom_shop_after_footer' );

    wp_footer(); ?>

    <script type="text/javascript">
        let toast = document.querySelector(".toast");
        let btn = document.querySelector(".toast-btn");
        let close = document.querySelector(".toast-close");
        let progress = document.querySelector(".progress");

        let timeRandom = Math.floor(Math.random(5000) * 16000);

        let myTimeout = setTimeout( loadToast, timeRandom)

        function loadToast(){
            toast.classList.add("active");
            progress.classList.add("active");

            setTimeout(() =>{
                toast.classList.remove("active");
            }, 10000)

            setTimeout(() =>{
                progress.classList.remove("active");
            }, 10000)
        }


        /*btn.addEventListener("click", () =>{
          toast.classList.add("active");
          progress.classList.add("active");

          setTimeout(() =>{
            toast.classList.remove("active");
          }, 5000)

          setTimeout(() =>{
            progress.classList.remove("active");
          }, 5300)
        })*/

        close.addEventListener("click", () =>{
          toast.classList.remove("active");

          setTimeout(() =>{
            progress.classList.remove("active");
          }, 300)
        })
    </script>

</body>
</html>