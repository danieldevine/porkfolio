<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_remove-posts.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_remove-posts.php
  *
  * Remove 'posts' from the dashboard as we don't have any use for posts in this theme.
  *
  */

add_action( 'admin_menu', 'remove_posts_menu' );

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
