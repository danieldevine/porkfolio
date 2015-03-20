<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_portfolio-gallery.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_portfolio-gallery.php
  *
  *displays our galleries on each portfolio page
  *
  */
?>

<?php $images = get_field('galleries'); ?>

<?php if($images): ?>
    <div class="popup-gallery ">
      <?php foreach( $images as $image ): ?>
          <a href="<?php echo $image['url']; ?>"
             class="lightbox-link"
             title="<?php echo $image['caption']; ?>"
             data-description="<?php echo $image['description']; ?>">
              <div class="image-wrap">
                <img src="<?php echo $image['sizes']['killernail']; ?>">
              </div>
          </a>
      <?php endforeach; ?>
    </div>

<?php endif; ?>
