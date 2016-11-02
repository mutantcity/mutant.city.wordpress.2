<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
    </main><!-- #main -->
  </div><!-- #primary -->


    <?php get_template_part( 'partials/_footer_bar' );?>

    <?php wp_footer(); //wordpress include for plug-ins?>
    <?php get_template_part( 'partials/_riotjs' ); // factor this out at some point into a plugin maybe?>

  </body>
</html>