<?php
function my_theme_enqueue_styles() {
 $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style',
 get_stylesheet_directory_uri() . '/style.css',
 array( $parent_style ),
 wp_get_theme()->get('Version')
 );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/***** Aceptar extenciones tipo WEBP **/


/*** EXENCION PARA EL WHATS PRODUCTO **/

function dcms_question_whatsapp(){ 
  $phone = '525551032775';
    $message = 'Quiero informaci√≥n del producto: '.get_the_title().' en '.get_permalink().' ';
    $text = 'Preguntar por Whatsapp';
   /* $ico = '<img src="'.get_stylesheet_directory_uri().'/img/whatsaap.png" width=50 height=50 />';*/

    $url = 'https://api.whatsapp.com/send?phone='.$phone.'&amp;text='.str_replace(' ', '%20', $message);
    $link = '<div class="logo-whatsapp"><a class="dc-link" href="'.$url.'" target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i><span>'.$text.'</span></a></div>';

    echo '<div class="dc-whatsapp-container">'. $link. '</div>';
};

add_action( 'woocommerce_share', 'dcms_question_whatsapp' );


/****** IMPORTA FONR AWESOME ***/
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

function add_font_awesome() {
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
  }
 
 
function filter_gettext( $translated, $text, $domain ) {
    if ( is_admin() ) {
        return $translated;
    }

    if ( wp_is_mobile() ) {
        $translated = str_ireplace( 'facturaci®Æn', 'envio', $translated );
    }
    
    return $translated;
}
add_filter( 'gettext', 'filter_gettext', 10, 3 );

?>