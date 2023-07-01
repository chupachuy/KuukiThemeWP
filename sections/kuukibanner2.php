<?php
   $query = new WP_query( 'pagename=aretes-kantu-colibri');

   if( $query->have_posts()){ while ( $query->have_posts()){
        $query->the_post(); ?>


<div id="kuuki-banner" class="kuuki-banner">
   <div class="container">
      <h2 class="banner-title">Aretes Kantu Colibri</h2>
      <div class="banner-desc">
         <p>Un regalo ideal para toda ocasión</p>
         <p></p>
         <p></p>
      </div>
      <a class="btn-readmore" href="http://localhost/kuuki/producto/aretes-kantu-colibri/">Ver</a>
   </div>
</div>

<?php } 
        } wp_reset_postdata();
?>