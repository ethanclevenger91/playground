<?php

class WordcampKansasCity2016 {

  function __construct() {
    add_action('wp_enqueue_scripts', [$this, 'wp_enqueue_scripts']);
  }

  function wp_enqueue_scripts() {
    wp_enqueue_style('wckc2016-styles', get_template_directory_uri().'/style.css');
    // wp_enqueue_style('wckc2016-styles2', get_template_directory_uri().'/css/styles.css');
  }

}

$WCKC2016 = new WordcampKansasCity2016();
