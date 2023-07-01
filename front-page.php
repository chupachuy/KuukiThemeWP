<?php
/**
 * Front Page
 * 
 * @package Blossom_Shop
 */


    get_header();
    //If any one section are enabled then show custom home page.
    echo '<div id="content" class="site-content">';

        get_template_part( 'sections/kuukibanner' ); 
        get_template_part( 'sections/block' );
        get_template_part( 'sections/bannertool' );
        get_template_part( 'sections/recent_products' );
        get_template_part( 'sections/block2' );
        get_template_part( 'sections/more-products' );
        get_template_part( 'sections/joyeria' );
        get_template_part( 'sections/googlereviews' );
        get_template_part( 'sections/icons' );
        /*get_template_part( 'sections/prueba2'  );  
        get_template_part( 'sections/prueba2'  ); */

    echo '</div>';
    get_footer();


?>