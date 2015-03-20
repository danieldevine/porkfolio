<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    404.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/404.php
  */
  get_header();?>

<?php get_template_part('inc/PFO_main-nav'); ?>
<div id="statics"><!--full screen, no sliding-->

  <div id="logo2"><!--  this is the logo at weenie sizes-->
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

  <ul class="statics-container">

    <li> <!--  eeach li equals a 'slide'  -->

       <img src="<?php echo get_bloginfo('template_directory');?>/img/build/Carina_Nebula_in_visible_light_(captured_by_the_Hubble_Space_Telescope).jpg">

      <div class="container scrollable"><!--  this class means we can have vertical scrolling -->
        <div class="flex-friend"> <!--  absolute center the contents of the 'slide'.-->
          <div class="mainwrapper"> <!--  default content wrapper -->

            <h2>We're sorry, but the content that you were looking for has moved, or doesn't exist.</h2>

          </div>

        </div>
      </div>
    </li>
  </ul>
</div>

<?php get_footer(); ?>
