        if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
          <?php _s_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php
          the_content( sprintf(
            /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ) );

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

      <footer class="entry-footer">
        <?php _s_entry_footer(); ?>
      </footer><!-- .entry-footer -->


            <header class="entry-header">



                   if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }