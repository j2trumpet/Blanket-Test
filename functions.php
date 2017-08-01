<?php

// Global
include 'comps/head/head.php';
include 'comps/nav/nav.php';
include 'comps/footer/footer.php';

// Content
include 'comps/hero/hero.php';


// Add. functions
function img_path( $filename ) {
  echo '../../assets/img/' . $filename;
}

// Top of rendered HTML page
// $page_title = page title (defaults to "Page Title")
// $display = display local menu (defaults to false)
function start_page( $page_title = 'Page Title', $local = false, $global = false ) {
  ob_start();
  head( $page_title );
  global_header(); // has local menu, defaults to false
  local_menu( $local );
  global_menu( $global );
}

// Bottom of rendered HTML page
// $filename = name given to generated HTML file
function end_page( $filename ) {
  footer();
  chdir( '../../dist' );
  file_put_contents( $filename, ob_get_contents() );
}



?>