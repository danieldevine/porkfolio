<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    ìndex.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/index.php
  *
  *this isn't used in the default configuration but Wordpress needs it to exist so oh well here it is.
  *
  */
  get_header();?>

<?php get_template_part('inc/PFO_main-nav'); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content'); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
