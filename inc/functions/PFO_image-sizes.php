<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_image-sizes.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_image-sizes.php
  *
  * image thumbnails
  *
  */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 726, 414, true );
add_image_size( 'massivenail', 2600, auto );
add_image_size( 'mininail', 300, 300, true );
add_image_size( 'killernail', 770, 770, true );
