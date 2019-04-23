<?php get_header();?>


   <div class="container container--narrow page-section"> 
          <?php
          while(have_posts()) {
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

  <!-- <?php } 
  
  $values = CFS()->get( 'related_post' );
  foreach ( $values as $post_id ) {
            $the_post = get_post( $post_id );
            echo $the_post->post_content;
  }?> -->
</div>

 <?php get_footer(); ?>