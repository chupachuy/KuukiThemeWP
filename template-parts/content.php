<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blossom_Shop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); if( ! is_single() ) echo ' itemscope itemtype="https://schema.org/Blog"'; ?>>
	<?php 
        /**
         * @hooked blossom_shop_post_thumbnail - 10
        */
        do_action( 'blossom_shop_before_post_entry_content' );
        
        if( ! is_single() ) echo '<div class="content-wrap">';

        /**
         * @hooked blossom_shop_entry_header  - 10 
         * @hooked blossom_shop_entry_content - 15
         * @hooked blossom_shop_entry_footer  - 20
        */
        do_action( 'blossom_shop_post_entry_content' );

        ?>

        <?php if((get_post_meta( get_the_ID(), 'button_blog_text', true ) )){ ?>
            <div class="wrap-button-blog"><a href="<?php echo get_post_meta($post->ID, 'button_blog_url', true); ?>" class="btn-blog"><?php echo get_post_meta($post->ID, 'button_blog_text', true); ?></a></div>
        <?php } else { ?>

        <?php } ?>

        

        <?php if( ! is_single() ) echo '</div>';
    ?>
</article><!-- #post-<?php the_ID(); ?> -->