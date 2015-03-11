<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    ìndex.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/index.php
  */
  get_header();?>

  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content' ); ?>
  <?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
