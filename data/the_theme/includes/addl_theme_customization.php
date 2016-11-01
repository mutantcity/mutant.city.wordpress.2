<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function _s_content_width() {
//  $GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
// }

// add_action( 'after_setup_theme', '_s_content_width', 0 );



// this is hackery to add a class to the first paragraph of the_content()
// apparently, this is how it's done in wordpress...
function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="the_content">', $content, 1);
}
add_filter('the_content', 'first_paragraph');