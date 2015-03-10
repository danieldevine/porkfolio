<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    page.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/page.php
  */
  get_header();?>
<div class="mainwrapper">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'page'); ?>
  <?php endwhile; // end of the loop. ?>
</div><!--mainwrapper -->
<?php get_footer(); ?>
