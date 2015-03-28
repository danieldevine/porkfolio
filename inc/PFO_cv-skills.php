
<?php $args=array(
          'post_type'=>'skill'
);

$category_posts = new WP_Query($args);

if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

<ul>

 <div class="highlight"><?php the_title(); ?></div>

  <li><?php the_field('skillage_one');?></li>
  <li><?php the_field('skillage_two');?></li>
  <li><?php the_field('skillage_three');?></li>
  <li><?php the_field('skillage_four');?></li>
  <li><?php the_field('skillage_five');?></li>
  <li><?php the_field('skillage_six');?></li>
  <li><?php the_field('skillage_seven');?></li>

</ul>

<?php endwhile; else: ?>I'm afraid that there are no posts.
<?php endif; ?>


