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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'pure hackery' ), 'Pure Hackery', '<a href="http://github.com/nkiermaier" rel="designer">Nick Kiermaier</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

    <?php wp_footer(); //wordpress include for plug-ins?>
    <?php get_template_part( 'partials/_riotjs' ); // factor this out at some point into a plugin maybe?>

  </body>
</html>