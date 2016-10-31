<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <?php get_template_part( 'partials/_head'); ?>

  <body <?php body_class(); //for some wordpress functionality?>>


<?php get_template_part( 'partials/_compatibility_warnings'); ?>

<header id="masthead" class="site-header" role="banner">
  <?php get_template_part( 'partials/_navbar', 'none' ); ?>
</header><!-- #masthead -->