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
    $message = 'Quiero información del producto: '.get_the_title().' en '.get_permalink().' ';
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


/** CUSTOM POST TYPES DE GALLERIA **/
/** Direct query variable used in WP_Query. e.g. WP_Query( array( 'post_type' => 'product', 'term' => 'disk' ) ) **/

if ( ! function_exists('custom_gallery_kuuki') ) {

// Register Custom Post Type
function custom_gallery_kuuki() {

  $labels = array(
    'name'                  => _x( 'Galerias', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Galerias', 'text_domain' ),
    'name_admin_bar'        => __( 'Galeria', 'text_domain' ),
    'archives'              => __( 'Lista de Archivos', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'Todas la Imagenes', 'text_domain' ),
    'add_new_item'          => __( 'Agregar nueva Imagen', 'text_domain' ),
    'add_new'               => __( 'Nueva imagen', 'text_domain' ),
    'new_item'              => __( 'Nueva Imagen', 'text_domain' ),
    'edit_item'             => __( 'Editar Imagen', 'text_domain' ),
    'update_item'           => __( 'Actualizar imagen', 'text_domain' ),
    'view_item'             => __( 'Ver Imagen', 'text_domain' ),
    'view_items'            => __( 'Ver Imagenes', 'text_domain' ),
    'search_items'          => __( 'Buscar Imagen', 'text_domain' ),
    'not_found'             => __( 'No hay resultados', 'text_domain' ),
    'not_found_in_trash'    => __( 'No hay resultados en la papelera', 'text_domain' ),
    'featured_image'        => __( 'imagen Principal', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'lista de imagenes', 'text_domain' ),
    'items_list_navigation' => __( 'lista de imagenes', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Gallery', 'text_domain' ),
    'description'           => __( 'Imagenes para galleria', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'menu_icon' => 'dashicons-format-gallery',
  );
  register_post_type( 'gallery', $args );

}
add_action( 'init', 'custom_gallery_kuuki', 0 );

}




?>