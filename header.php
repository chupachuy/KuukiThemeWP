<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Shop
 */
    /**
     * Doctype Hook
     * 
     * @hooked blossom_shop_doctype
    */
    do_action( 'blossom_shop_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked blossom_shop_head
    */
    do_action( 'blossom_shop_before_wp_head' );
    
    wp_head(); ?>
    <meta name="description" content="Somos un pequeño taller de joyería en plata en el corazón de Santa Maria la Ribera">
    <meta name="keywords" content="Joyería de plata, joyería, taller de joyería, taller de joyería en CDMX, anillo de compromiso, regalos cdmx">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="robots" content="noindex, nofollow" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W9BML7F5EK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-W9BML7F5EK');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
   <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187491301-1"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-187491301-1');
   </script>-->
   <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '563707587753241'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=563707587753241&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
	
	<!-- Meta Pixel Code 2023 -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '813952803780642');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=813952803780642&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	
	
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <h1 class="description_site"><?php bloginfo('description'); ?></h1>

<?php
    
    wp_body_open();
    
    /**
     * Before Header
     *  
     * @hooked blossom_shop_page_start - 20 
    */
    do_action( 'blossom_shop_before_header' );
    
    /**
     * Header
     * @hooked blossom_shop_sticky_bar - 10
     * @hooked blossom_shop_header - 20     
    */
    do_action( 'blossom_shop_header' );
    
    /**
     * Before Content
     * 
     * @hooked blossom_shop_show_banner - 5
     * @hooked blossom_shop_featured_section - 10
    */
    do_action( 'blossom_shop_after_header' );
    
    /**
     * Content
     * 
     * @hooked blossom_shop_content_start
    */
    do_action( 'blossom_shop_content' );