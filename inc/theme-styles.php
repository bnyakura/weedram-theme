<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'weedram-tailwind',
    get_template_directory_uri() . '/assets/dist/app.css',
    [],
    filemtime(get_template_directory() . '/assets/dist/app.css')
  );

    wp_enqueue_script(
      'weedram-js',
      get_template_directory_uri() . '/assets/js/app.js',
      [],
      filemtime(get_template_directory() . '/assets/js/app.js'),
      true
    );
});