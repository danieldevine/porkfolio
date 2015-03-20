<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_cv-experience.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_cv-experience.php
  *
  *Loop that displays all our experiences and experience meta fields on our CV
  *
  */
?>
<?php $args=array( 'post_type'=>'experience' ); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

<div class="experience"><?php the_field('dates'); ?><br />
<h3><strong><?php the_field('location'); ?></strong> &nbsp; <?php the_field('location2'); ?></h3>
<div class="highlight"><?php the_field('job_title'); ?><br /></div>
<?php the_field('contact'); ?>
</div>

<?php endwhile; else: ?>I'm afraid that there are no posts.
<?php endif; ?>
