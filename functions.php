<?php
function shortcodes_init(){
 add_shortcode( 'recent_posts', 'shortcode_handler_function' );
}
add_action('init', 'shortcodes_init');

// function myThemeSupport(){
//   // add dynamic title tag support
//   add_theme_support("title-tag");
//   add_theme_support("custom-logo");
//   add_theme_support("post-thumbnails");
// }
// add_action('after_setup_theme', 'myThemeSupport');

function main_features(){
  add_theme_support("title_tag");
}
add_action('after_setup_theme', 'main_features');
?>