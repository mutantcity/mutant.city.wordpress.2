<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
    <div class="col-md-12 post-title-area">
      <h2><?php the_title() ?></h2>
    </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="row">
        <div class="col-md-12">
        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
        </div>
    </div>

    <div class="row post-info-area">
      <div class="col-md-12">
        Posted: <?php the_date() ?> <br/>
        By: <?php the_author() ?>
      </div>
    </div>
  </div>

  <div class="col-md-9 the-content">
    <?php the_content() ?>
  </div>

</div>
</article><!-- #post-## -->