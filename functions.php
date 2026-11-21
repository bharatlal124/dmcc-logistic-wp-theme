<?php
/**
 * DMCC Logistic theme functions
 */

if (!defined('ABSPATH')) {
  exit;
}

function dmcc_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'dmcc_setup');

function dmcc_enqueue_assets() {
  $uri = get_template_directory_uri();

  // Styles
  wp_enqueue_style('dmcc-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap', array(), null);
  wp_enqueue_style('dmcc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
  wp_enqueue_style('dmcc-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3');
  // Theme style.css (tumhari CSS yahin hai)
  wp_enqueue_style('dmcc-style', get_stylesheet_uri(), array('dmcc-bootstrap', 'dmcc-bootstrap-icons'), filemtime(get_stylesheet_directory() . '/style.css'));

  // Scripts (footer mein load honge)
  wp_enqueue_script('dmcc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
  wp_enqueue_script('dmcc-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
  wp_enqueue_script('dmcc-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('dmcc-gsap'), '3.12.5', true);
  wp_enqueue_script('dmcc-main', $uri . '/script.js', array('dmcc-bootstrap', 'dmcc-gsap', 'dmcc-scrolltrigger'), filemtime(get_template_directory() . '/script.js'), true);
}
add_action('wp_enqueue_scripts', 'dmcc_enqueue_assets');
