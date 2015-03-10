<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_enqueue-stuff.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_enqueue-stuff.php
  *
  * enqueue the junk.
  *
  */
function pfo_styles()
{
    // Register styles:
    wp_register_style( 'pfo-main-style', get_template_directory_uri() . '/css/global.min.css', array(), 'all' );

    // Register scripts:
    wp_register_script( 'pfo-production-script', get_template_directory_uri() . '/js/build/production.min.js', array( 'jquery' ) );

    //  enqueue style:
    wp_enqueue_style( 'pfo-main-style' );

    //  enqueue script:
    wp_enqueue_script( 'pfo-production-script' );


}

add_action( 'wp_enqueue_scripts', 'pfo_styles' );
