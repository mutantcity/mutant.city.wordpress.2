<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

<div class ="container-fluid">

	<?php while ( have_posts() ) : the_post(); ?>


					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="row">
						<div class="col-md-3">
									<?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
						</div>

						<div class="col-md-9">
							<h3><?php the_title() ?></h3> <?php the_date() ?> | <?php the_author() ?>
							<hr>
							<?php the_content() ?>
						</div>
					</div>




					</article><!-- #post-## -->

	<?php endwhile; // end of the loop. ?>

</div>
	<?php
get_footer();
