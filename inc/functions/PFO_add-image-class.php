<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_add-image-class.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_add-image-class.php
  *
  * This adds the 'preserve' class to WordPress post images, stopping them from inflating to fill the slide.
  * You can alter the name of the preserve class in superslides.js and superstatics.js
  * NOTE: does not work on existing images, newly added images only.
  *
  */

function PFO_add_image_class($class){
$class .= ' preserve ';
return $class;
}
add_filter('get_image_tag_class','PFO_add_image_class');
