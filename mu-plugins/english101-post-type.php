<?php


// Register Custom Post Type
function english101_post_type() {

	register_post_type( 'vocabulary', array(
		'label'                 => __( 'Vocabulary', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'has_archive'           => true,
		'menu_position'         => 2,
		'menu_icon'				=> __('dashicons-welcome-write-blog'),
		'capability_type'       => 'page',
		'labels'                => array(
		'name'                  => _x( 'Vocabularies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Vocabulary', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Vocabularies', 'text_domain' ),
		'all_items'             => __( 'All Vocabularies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add Vocabulary', 'text_domain' ),
		'edit_item'             => __( 'Edit Vocabulary', 'text_domain' ),

	)));


	register_post_type( 'grammar',array(
		'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'has_archive'           => true,
		'menu_position'         => 3,
		'menu_icon'				=> __('dashicons-welcome-write-blog'),
		'capability_type'       => 'page',
		'labels'                =>  array(
		'name'                  => _x( 'Grammars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Grammar', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Grammars', 'text_domain' ),
		'all_items'             => __( 'All Grammars', 'text_domain' ),
		'add_new'               => __( 'Add Grammar', 'text_domain' ),
		'edit_item'             => __( 'Edit Grammar', 'text_domain' ),

	)));

	register_post_type( 'git', array(
		'label'                 => __( 'Git', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'has_archive'           => true,
		'menu_position'         => 2,
		'menu_icon'				=> __('dashicons-welcome-write-blog'),
		'capability_type'       => 'page',
		'labels'                => array(
		'name'                  => _x( 'Git', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Git', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Git', 'text_domain' ),
		'all_items'             => __( 'All Git', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add Git', 'text_domain' ),
		'edit_item'             => __( 'Edit Git', 'text_domain' ),
		
	)));
	register_post_type( 'reading', array(
		'label'                 => __( 'Reading', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'has_archive'           => true,
		'menu_position'         => 2,
		'menu_icon'				=> __('dashicons-welcome-write-blog'),
		'capability_type'       => 'page',
		'labels'                => array(
		'name'                  => _x( 'Reading', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Reading', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Reading', 'text_domain' ),
		'all_items'             => __( 'All Reading', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add Reading', 'text_domain' ),
		'edit_item'             => __( 'Edit Reading', 'text_domain' ),
		
	)));

}
add_action( 'init', 'english101_post_type');