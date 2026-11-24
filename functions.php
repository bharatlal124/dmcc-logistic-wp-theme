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
  wp_enqueue_style('dmcc-style', get_stylesheet_uri(), array('dmcc-bootstrap', 'dmcc-bootstrap-icons'), filemtime(get_stylesheet_directory() . '/style.css'));

  // Scripts (footer)
  wp_enqueue_script('dmcc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
  wp_enqueue_script('dmcc-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
  wp_enqueue_script('dmcc-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('dmcc-gsap'), '3.12.5', true);
  wp_enqueue_script('dmcc-main', $uri . '/script.js', array('dmcc-bootstrap', 'dmcc-gsap', 'dmcc-scrolltrigger'), filemtime(get_template_directory() . '/script.js'), true);
}
add_action('wp_enqueue_scripts', 'dmcc_enqueue_assets');

/* ==========================================================
 * Homepage content helpers (ACF fields with safe fallbacks)
 * ========================================================== */

// Default text for every field (inc/defaults.php)
function dmcc_defaults() {
  static $defaults = null;
  if ($defaults === null) {
    $defaults = require get_template_directory() . '/inc/defaults.php';
  }
  return $defaults;
}

// Get a field value from the homepage. Falls back to the default text,
// so the site still works if ACF is not installed or a field is empty.
function dmcc_field($name) {
  $value = '';
  if (function_exists('get_field')) {
    $value = get_field($name, (int) get_option('page_on_front'));
  }
  if ($value === null || $value === false || $value === '') {
    $defaults = dmcc_defaults();
    return isset($defaults[$name]) ? $defaults[$name] : '';
  }
  return $value;
}

// Print a field as safe plain text
function dmcc_e($name) {
  echo esc_html(dmcc_field($name));
}

// Image field: uploaded image URL, or the default image from /images
function dmcc_image($name, $file) {
  $value = '';
  if (function_exists('get_field')) {
    $value = get_field($name, (int) get_option('page_on_front'));
  }
  if (!$value) {
    return get_template_directory_uri() . '/images/' . $file;
  }
  return $value;
}

// Initials for the avatar circle, e.g. "Basant Tomar" => "BT"
function dmcc_initials($name) {
  $letters = '';
  foreach (preg_split('/\s+/', trim($name)) as $word) {
    if ($word !== '') {
      $letters .= strtoupper(mb_substr($word, 0, 1));
    }
  }
  return mb_substr($letters, 0, 2);
}

// Phone number to tel: link, e.g. "99100 73670" => "tel:+919910073670"
function dmcc_tel($number) {
  $digits = preg_replace('/\D/', '', $number);
  if (strlen($digits) === 10) {
    $digits = '91' . $digits;
  }
  return 'tel:+' . $digits;
}

// Fill all fields with the default text once, so the admin sees real
// content in the fields (runs one time after the field group exists).
function dmcc_seed_fields() {
  if (get_option('dmcc_fields_seeded')) {
    return;
  }
  if (!function_exists('update_field') || !function_exists('acf_get_field_group')) {
    return;
  }
  $page_id = (int) get_option('page_on_front');
  if (!$page_id || !acf_get_field_group('group_dmcc_homepage')) {
    return;
  }
  foreach (dmcc_defaults() as $name => $value) {
    update_field('field_dmcc_' . $name, $value, $page_id);
  }
  update_option('dmcc_fields_seeded', 1);
}
add_action('admin_init', 'dmcc_seed_fields', 20);
