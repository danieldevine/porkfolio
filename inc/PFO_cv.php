<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_cv.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_cv.php
  *
  */
?>
<li>
  <div class="container scrollable">
    <div class="cv-wrapper">

      <div class="cv">
        <h1>Daniel Devine</h1>
        <div class="highlight"><h2>DEVELOPER &amp; DESIGNER</h2></div>
        <hr />

        <blockquote>I am a creative and adaptable web developer and designer. I specialise in responsive design, with a focus on performance, usability and progressive enhancement. I’m a highly proficient coder with a strong background in design and I strive to continually develop my abilities. I’m currently seeking a new and challenging environment in which to contribute my experience and skills.</blockquote>
<hr />
        <div class="section group">

          <div class="col span_9_of_12">
            <div class="experience">
            <div class="cv-title">EXPERIENCE</div>
    <?php get_template_part( 'inc/PFO_cv-experience' ); ?>
            </div>
          </div>

          <div class="col span_3_of_12">
            <div class="skills">
             <div class="cv-title">SKILLS</div>
              <?php get_template_part( 'inc/PFO_cv-skills' ); ?>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</li>
