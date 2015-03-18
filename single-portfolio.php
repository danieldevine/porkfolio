<?php
/**
 * @Theme Name   :    porkfolio
 * @file         :    single-portfolio.php
 * @package      :    porkfolio
 * @author       :    Dan Devine
 * @license      :    GPLv3
 * @filesource   :    wp-content/themes/porkfolio/page-templates/single-portfolio.php
 *
 *this is the loop and template for the individual pages in the portfolio section.
 */

get_header(); ?>

<?php get_template_part('inc/nav'); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'portfolio'); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
