<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    content-home.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/content-home.php
  *
  *this is the content for the individual slides.
  *
  */
?>

<?php the_post_thumbnail('massivenail'); ?> <!--this featured image fills the background of the slide-->

<div class="container scrollable">
      <?php $image = get_field('lead_image'); if( !empty($image) ): ?>
     <div class="lead-image">
<img class="preserve" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php endif; ?>

  <div class="flex-friend">
    <div class="mainwrapper">
           <h1 class="large_in_charge"> I'm a <span class="emph">Web Developer </span>&amp;<span class="emph"> Designer.</span> Let's work <span class="emph">together</span> </h1>
      <div class="pholder"><?php the_content(); ?></div>
    </div>
  </div>
</div>
