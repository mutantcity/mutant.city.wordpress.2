    <?php
      if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) : the_post();
          get_template_part( 'partials/content', get_post_format() );
        endwhile;
        the_posts_navigation();
      else :
        get_template_part( 'partials/content', 'none' );
      endif;
    ?>
