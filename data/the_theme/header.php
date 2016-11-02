<!DOCTYPE html>
<html <?php language_attributes();// required for wordpress plumbing ?>>

  <?php get_template_part( 'partials/_head_tag'); ?>

  <body <?php body_class(); //required for wordpress plumbing?>>


<?php get_template_part( 'partials/_compatibility_warnings'); ?>

<header id="masthead" class="site-header" role="banner">
  <?php get_template_part( 'partials/_navbar', 'none' ); ?>
</header><!-- #masthead -->


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
