<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_enqueue-stuff.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_enqueue-stuff.php
  *
  * Remove 'posts' from the dashboard as we don't have any use for posts in this theme.
  *
  */

add_action( 'admin_menu', 'remove_posts_menu' );

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
