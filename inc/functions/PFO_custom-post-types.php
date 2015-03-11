<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    PFO_custom-post-types.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/inc/functions/PFO_custom-post-types.php
  *
  * custom post types and the means to add them to existing categories and tags.
  *
  */

function pfo_slides() {
    $labels = array(
        'name'               => _x( 'slides', 'post type general name' ),
        'singular_name'      => _x( 'slide', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New slide' ),
        'edit_item'          => __( 'Edit slide' ),
        'new_item'           => __( 'New slide' ),
        'all_items'          => __( 'All slides' ),
        'view_item'          => __( 'View slide' ),
        'search_items'       => __( 'Search slides' ),
        'not_found'          => __( 'No slides found' ),
        'not_found_in_trash' => __( 'No slides found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Slides'

    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our slides and slide specific data',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-slides',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        // Set the available taxonomies here
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type( 'slide', $args );
}
add_action( 'init', 'pfo_slides' );


function pfo_portfolios() {
    $labels = array(
        'name'               => _x( 'portfolios', 'post type general name' ),
        'singular_name'      => _x( 'portfolio', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New portfolio' ),
        'edit_item'          => __( 'Edit portfolio' ),
        'new_item'           => __( 'New portfolio' ),
        'all_items'          => __( 'All portfolio entries' ),
        'view_item'          => __( 'View portfolio' ),
        'search_items'       => __( 'Search portfolios' ),
        'not_found'          => __( 'No portfolios found' ),
        'not_found_in_trash' => __( 'No portfolios found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Portfolio'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our portfolios and portfolio specific data',
        'public'        => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-portfolio',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        // Set the available taxonomies here
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'pfo_portfolios' );

function pfo_experiences() {
    $labels = array(
        'name'               => _x( 'experiences', 'post type general name' ),
        'singular_name'      => _x( 'experience', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New experience' ),
        'edit_item'          => __( 'Edit experience' ),
        'new_item'           => __( 'New experience' ),
        'all_items'          => __( 'All experiences' ),
        'view_item'          => __( 'View experience' ),
        'search_items'       => __( 'Search experiences' ),
        'not_found'          => __( 'No experiences found' ),
        'not_found_in_trash' => __( 'No experiences found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Experiences'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our experiences and experience specific data',
        'public'        => true,
        'menu_position' => 7,
      'menu_icon'     => 'dashicons-star-filled',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        // Set the available taxonomies here
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type( 'experience', $args );
}
add_action( 'init', 'pfo_experiences' );

function pfo_skills() {
    $labels = array(
        'name'               => _x( 'skills', 'post type general name' ),
        'singular_name'      => _x( 'skill', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New skill' ),
        'edit_item'          => __( 'Edit skill' ),
        'new_item'           => __( 'New skill' ),
        'all_items'          => __( 'All skills' ),
        'view_item'          => __( 'View skill' ),
        'search_items'       => __( 'Search skills' ),
        'not_found'          => __( 'No skills found' ),
        'not_found_in_trash' => __( 'No skills found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Skills'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our skills and skill specific data',
        'public'        => true,
        'menu_position' => 8,
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        // Set the available taxonomies here
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type( 'skill', $args );
}
add_action( 'init', 'pfo_skills' );


//add custom post types to reg categories
function add_custom_types_to_tax( $query ) {
if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

$post_types = get_post_types();

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );
