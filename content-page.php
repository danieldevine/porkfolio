<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    content-page.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/content-page.php
  */
?>

<div class="small-headline">
  <?php the_title() ?>
</div>

<?php the_post_thumbnail(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</article>

<!-- #post-<?php the_ID(); ?> -->
