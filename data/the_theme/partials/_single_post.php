        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="row">
            <div class="col-md-3">
              <div class="row">
                  <div class="col-md-12">
                  <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
                  </div>
              </div>

              <div class="row post-info-area">
                <div class="col-md-12">
                  Posted: <?php the_date() ?> | By: <?php the_author() ?>
                </div>
              </div>
            </div>

            <div class="col-md-9 the-content">
              <?php the_content() ?>
            </div>

          </div>
        </article><!-- #post-## -->