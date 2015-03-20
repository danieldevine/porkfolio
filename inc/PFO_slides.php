<div id="slides">

  <div id="logo2">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

    <ul class="slides-container">


  <!--/////////////////////////////////////// hi slide 1 :) ///////////////////////////////////////////-->
  <li>

  <?php $args=array( 'posts_per_page'=>'1', 'post_type'=>'slide'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

  <?php get_template_part( 'content', 'slide'); ?>

  <?php endwhile; else: ?>I'm afraid that there are no posts.
  <?php endif; ?>

  </li>
  <!--/////////////////////////////////////// bye slide 1 :( ///////////////////////////////////////////-->



  <!--/////////////////////////////////////// hi slide 2 :) ///////////////////////////////////////////-->
  <li>

  <?php $args=array( 'posts_per_page'=>'1', 'post_type'=>'slide','offset' =>'1'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

  <?php get_template_part( 'content', 'slide'); ?>

  <?php endwhile; else: ?>I'm afraid that there are no posts.
  <?php endif; ?>

  </li>
  <!--/////////////////////////////////////// bye slide 2 :( ///////////////////////////////////////////-->



  <!--/////////////////////////////////////// hi slide 3 :) ///////////////////////////////////////////-->

  <?php get_template_part ('inc/PFO_portfolio-slide'); ?>

  <!--/////////////////////////////////////// bye slide 3 :( ///////////////////////////////////////////-->



  <!--/////////////////////////////////////// hi slide 4 :) ///////////////////////////////////////////-->

  <?php get_template_part ('inc/PFO_cv'); ?>

  <!--/////////////////////////////////////// bye slide 4 :( ///////////////////////////////////////////-->



  <!--/////////////////////////////////////// hi slide 5 :) ///////////////////////////////////////////-->
  <li>

  <?php $args=array( 'posts_per_page'=>'1', 'post_type'=>'slide','offset' =>'2'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

  <?php get_template_part( 'content', 'slide'); ?>

  <?php endwhile; else: ?>I'm afraid that there are no posts.
  <?php endif; ?>

  </li>
  <!--/////////////////////////////////////// bye slide 5 :( ///////////////////////////////////////////-->



  </ul>

  <nav class="slides-navigation">
    <a href="#" class="next"></a>
    <a href="#" class="prev"></a>
  </nav>

</div>
