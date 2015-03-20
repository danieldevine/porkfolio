<div class="boxwrap">

  <div class ="section group">

    <?php

      $args=array(
        'post_type'=>'portfolio',
        'posts_per_page'=>'3'
      );

      $category_posts = new WP_Query($args);

      if($category_posts->have_posts()) :

      while($category_posts->have_posts()) :

      $category_posts->the_post();

    ?>

    <div class="col span_4_of_12">
      <div class="homebox">
        <div class="imgcatch preserve">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'killernail', array( 'class' => 'preserve' ) ); ?>
          <div class="centered-title responsive_headline"> <?php the_title(); ?></div>
          </a>
        </div>
      </div>
    </div>

  <?php endwhile; else: ?>
  I'm afraid that there are no posts.
  <?php endif; ?>

  </div>

    <div class ="section group">

    <?php

      $args=array(
        'post_type'=>'portfolio',
        'posts_per_page'=>'3',
        'offset'=>'3'
      );

      $category_posts = new WP_Query($args);

      if($category_posts->have_posts()) :

      while($category_posts->have_posts()) :

      $category_posts->the_post();

    ?>

    <div class="col span_4_of_12">
      <div class="homebox">
        <div class="imgcatch preserve">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'killernail', array( 'class' => 'preserve' ) ); ?>
          <div class="centered-title responsive_headline"> <?php the_title(); ?></div>
          </a>
        </div>
      </div>
    </div>

  <?php endwhile; else: ?>
  I'm afraid that there are no posts.
  <?php endif; ?>

  </div>


    <div class ="section group">

    <?php

      $args=array(
        'post_type'=>'portfolio',
        'posts_per_page'=>'3',
        'offset'=>'6'
      );

      $category_posts = new WP_Query($args);

      if($category_posts->have_posts()) :

      while($category_posts->have_posts()) :

      $category_posts->the_post();

    ?>

    <div class="col span_4_of_12">
      <div class="homebox">
        <div class="imgcatch preserve">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'killernail', array( 'class' => 'preserve' ) ); ?>
          <div class="centered-title responsive_headline"> <?php the_title(); ?></div>
          </a>
        </div>
      </div>
    </div>

  <?php endwhile; else: ?>
  I'm afraid that there are no posts.
  <?php endif; ?>

  </div>
      <div class ="section group">

    <?php

      $args=array(
        'post_type'=>'portfolio',
        'posts_per_page'=>'3',
        'offset'=>'9'
      );

      $category_posts = new WP_Query($args);

      if($category_posts->have_posts()) :

      while($category_posts->have_posts()) :

      $category_posts->the_post();

    ?>

    <div class="col span_4_of_12">
      <div class="homebox">
        <div class="imgcatch preserve">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'killernail', array( 'class' => 'preserve' ) ); ?>
          <div class="centered-title responsive_headline"> <?php the_title(); ?></div>
          </a>
        </div>
      </div>
    </div>

  <?php endwhile; else: ?>
  I'm afraid that there are no posts.
  <?php endif; ?>

  </div>

</div>
