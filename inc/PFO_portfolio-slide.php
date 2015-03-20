<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    portfolio-slide.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/portfolio-slide.php
  *
  *this is the main template for the portfolio 'index' slide.
  */
?>

  <li>

  <div class="container scrollable">

    <div class="portfolio-wrapper">
      <?php get_template_part( 'inc/PFO_portfolios'); ?>
    </div>

  </div>

</li>
