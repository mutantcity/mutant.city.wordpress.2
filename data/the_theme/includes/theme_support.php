<?php

if ( ! function_exists( 'theme_support_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_support_setup() {


  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages. ALSO KNOWN AS FEATURED IMAGES!!!
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );


  // Learn what these  do!!
  // Set up the WordPress core custom background feature.
  // add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
  //   'default-color' => 'ffffff',
  //   'default-image' => '',
  // ) ) );

    /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on _s, use a find and replace
   * to change '_s' to the name of your theme in all the template files.
   */
  //load_theme_textdomain( '_s', get_template_directory() . '/languages' );

}
endif;
add_action( 'after_setup_theme', 'theme_support_setup' );