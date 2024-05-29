<?php

function enqueue_files () {
      if ( ! is_admin() ) {

          wp_enqueue_style( 'mytheme-custom2', get_template_directory_uri() . '/css/normalize.css' );
          wp_enqueue_style( 'mytheme-custom3', get_template_directory_uri() . '/css/components.css' );
          wp_enqueue_style( 'mytheme-custom1', get_template_directory_uri() . '/css/sattler-living-consulting.css' );


          wp_enqueue_script('wp_main_js', get_theme_file_uri() . '/js/sattler-living-consulting.js', NULL, '1.0', true);
          wp_enqueue_script('jQuery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61b3153140d089f6d384168e');

      }
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_files');

  ?>
