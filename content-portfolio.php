<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    content-portfolio.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/content-portfolio.php
  */
?>

<div id="statics"><!--full screen, no sliding-->

  <div id="logo2"><!--  this is the logo at weenie sizes-->
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

  <ul class="statics-container">

    <li>

      <div class="container scrollable">
       <div class="flex-friend">
        <div class="gallery-wrapper">

        <?php get_template_part('inc/porkfolio-gallery'); ?>
        <h1><?php the_title(); ?></h1>

        <div class="gallery-pholder">
          <p><?php the_content(); ?></p>
        </div>

        <div class="nextprev">
          <?php previous_post('&laquo; &laquo; %', '', 'yes'); ?>&nbsp; &nbsp;|&nbsp; &nbsp;
          <?php next_post('% &raquo; &raquo;', '', 'yes'); ?>
        </div>

        </div>
       </div>
      </div>

    </li>

  </ul>

</div>
