<div id="slides">

  <div id="logo2">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/build/logo2.png">
  </div>

    <ul class="slides-container">


  <!--/////////////////////////////////////// hi slide 1 :) ///////////////////////////////////////////-->


  <li>

<?php $args=array( 'post_type'=>'slide', 'page_id'=>'29'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

<?php the_post_thumbnail('massivenail'); ?>

  <div class="container scrollable">
   <div class="flex-friend">
    <div class="mainwrapper">
      <h1><?php the_title(); ?></h1>
      <div class="pholder"><?php the_content(); ?></div>
    </div>
   </div>
  </div>

      <?php endwhile; else: ?>I'm afraid that there are no posts.
      <?php endif; ?>

  </li>

  <!--/////////////////////////////////////// bye slide 1 :( ///////////////////////////////////////////-->

  <!--/////////////////////////////////////// hi slide 2 :) ///////////////////////////////////////////-->


  <li>

            <?php $args=array( 'post_type'=>'slide', 'page_id'=>'31'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

         <?php the_post_thumbnail('massivenail'); ?>

        <div class="container scrollable">
         <div class="flex-friend">
          <div class="mainwrapper">
            <h1><?php the_title(); ?></h1>
            <div class="pholder"><?php the_content(); ?></div>
          </div>
         </div>
        </div>

      <?php endwhile; else: ?>I'm afraid that there are no posts.
      <?php endif; ?>

  </li>

  <!--/////////////////////////////////////// bye slide 2 :( ///////////////////////////////////////////-->

  <!--/////////////////////////////////////// hi slide 3 :) ///////////////////////////////////////////-->

    <?php get_template_part ('inc/portfolio-slide'); ?>

  <!--/////////////////////////////////////// bye slide 3 :( ///////////////////////////////////////////-->

  <!--/////////////////////////////////////// hi slide 4 :) ///////////////////////////////////////////-->


  <li>

            <?php $args=array( 'post_type'=>'slide', 'page_id'=>'34'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

        <?php the_post_thumbnail('massivenail'); ?>

        <div class="container scrollable">
         <div class="flex-friend">
          <div class="mainwrapper">
            <h1><?php the_title(); ?></h1>
            <div class="pholder"><?php the_content(); ?>
            </div>
          </div>
         </div>
        </div>

      <?php endwhile; else: ?>I'm afraid that there are no posts.
      <?php endif; ?>

  </li>

  <!--/////////////////////////////////////// bye slide 4 :( ///////////////////////////////////////////-->

  <!--/////////////////////////////////////// hi slide 5 :) ///////////////////////////////////////////-->


<?php get_template_part ('inc/cv'); ?>

  <!--/////////////////////////////////////// bye slide 5 :( ///////////////////////////////////////////-->

  <!--/////////////////////////////////////// hi slide 6 :) ///////////////////////////////////////////-->


  <li>

            <?php $args=array( 'post_type'=>'slide', 'page_id'=>'36'); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

   <?php the_post_thumbnail('massivenail'); ?>

        <div class="container scrollable">
          <div class="flex-friend">
          <div class="mainwrapper">
            <h1><?php the_title(); ?></h1>
            <div class="pholder"><?php the_content(); ?></div>
          </div>
         </div>
        </div>

      <?php endwhile; else: ?>I'm afraid that there are no posts.
      <?php endif; ?>

  </li>

  <!--/////////////////////////////////////// bye slide 6 :( ///////////////////////////////////////////-->

  </ul>

  <nav class="slides-navigation">
    <a href="#" class="next"></a>
    <a href="#" class="prev"></a>
  </nav>

</div>
