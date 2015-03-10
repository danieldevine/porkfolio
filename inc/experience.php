<?php $args=array( 'post_type'=>'experience' ); $category_posts = new WP_Query($args); if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>

<div class="experience"><?php the_field('dates'); ?><br />
<h3><strong><?php the_field('location'); ?></strong> &nbsp; <?php the_field('location2'); ?></h3>
<div class="highlight"><?php the_field('job_title'); ?><br /></div>
<?php the_field('contact'); ?>
</div>

<?php endwhile; else: ?>I'm afraid that there are no posts.
<?php endif; ?>
