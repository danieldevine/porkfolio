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
  <div class="portfolio-flick">
    <div class="next"><?php previous_post('%', '&#xf054;', 'no'); ?></div>
    <div class="prev"><?php next_post('%', '&#xf053;', 'no'); ?></div>
  </div>
  <div id="logo2"><!--  this is the logo at weenie sizes-->
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

  <ul class="statics-container">

    <li> <!-- each li equals a 'slide'  -->

      <div class="container scrollable"> <!--  this class means we can have vertical scrolling -->
       <div class="flex-friend"><!--  absolute center the contents of the 'slide'.-->
        <div class="gallery-wrapper"><!--  wrapper specific to gallery holding pages -->

        <?php get_template_part('inc/PFO_portfolio-gallery'); ?>

        <div class="gallery-pholder">
          <p>
           <ul class="project-details">
            <li>CLIENT: <?php echo get_field('client'); ?></li>
            <li><hr></li>
            <li>LINK: <a href="http://<?php echo get_field('url'); ?>" target="blank"><?php echo get_field('url'); ?></a></li>
            <li>PROJECT TYPE: <?php echo get_field('project_type'); ?></li>
           </ul>
          </p>

              <p><div class="project-details"><?php echo get_field('description'); ?></div></p>

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
