<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    content-slide.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/content-slide.php
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
      <h1><?php the_title(); ?></h1>
      <div class="pholder"><?php the_content(); ?></div>
    </div>
  </div>

</div>
