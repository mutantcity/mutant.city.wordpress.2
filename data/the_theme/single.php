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

    <?php get_template_part( 'partials/_single_post'); ?>

    <hr style="border-top: 5px solid #e7e7e7">

    <?php if ( comments_open() || get_comments_number() ) :
     comments_template();
    endif;
    ?>

	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
