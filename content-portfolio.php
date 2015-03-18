<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    content-portfolio.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/content-portfolio.php
  *
  *this is the content for the individual pages in the portfolio section.
  *
  */
?>

<div id="statics"><!--full screen, no sliding-->

  <div id="logo2"><!--  this is the logo at weenie sizes-->
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

  <ul class="statics-container">

    <li> <!-- each li equals a 'slide'  -->

      <div class="container scrollable"> <!--  this class means we can have vertical scrolling -->
       <div class="flex-friend"><!--  absolute center the contents of the 'slide'.-->
        <div class="gallery-wrapper"><!--  wrapper specific to gallery holding pages -->

        <?php get_template_part('inc/porkfolio-gallery'); ?>
        <h1><?php the_title(); ?></h1>

        <div class="gallery-pholder">
          <p><?php the_content(); ?></p>
        </div>

        <div class="nextprev">
          <?php previous_post('&laquo; &laquo; %', '', 'yes'); ?>&nbsp; &nbsp;|&nbsp; &nbsp;
          <?php next_post('% &raquo; &raquo;', '', 'yes'); ?>
        </div>

        </div><!--  end gallery-wrapper -->
       </div><!--  end flex-friend -->
      </div><!--  end container scrollable -->

    </li> <!-- end of this 'slide'  -->

  </ul>

</div>
