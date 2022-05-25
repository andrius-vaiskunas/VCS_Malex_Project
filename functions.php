<?php

function malexproject_menus()
{

  $locations = array(
    'main menu' => 'top menu',
    'footer' => 'Footer Menu Items'

  );
  register_nav_menus($locations);
}

// Styles

function malexproject_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'malexproject_theme_support');


function malexproject_register_styles()
{


  wp_enqueue_style('malexproject-jsdeliver', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css", array(), '6.6.6', 'all');
  wp_enqueue_style('malexproject-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
  wp_enqueue_style('malexproject-style', get_template_directory_uri() . "/assets/css/style.css", array('malexproject-bootstrap'), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'malexproject_register_styles');

// Scripts

function malexproject_register_scripts()
{
  wp_enqueue_script('malexproject-fancyapps', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), '1.0', true);
  wp_enqueue_script('malexproject-fontawesome', 'https://kit.fontawesome.com/dc47fe1c75.js', array(), '1.0', true);
  wp_enqueue_script('malexproject-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
  wp_enqueue_script('malexproject-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.1.0', true);
  wp_enqueue_script('malexproject-js', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'malexproject_register_scripts');


add_theme_support('menus');

register_nav_menus(
  array(

    'top-menu' => __('Top Menu', 'theme'),

  )
);
