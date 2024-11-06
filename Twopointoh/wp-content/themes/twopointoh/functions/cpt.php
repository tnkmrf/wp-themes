<?php
add_action( 'init', 'mt_cpts', 0 );

function mt_cpts() {
	if ( function_exists( 'mt_register_cpt' ) ) :
		mt_register_cpt( 'project', 'art', array( 'title','editor','thumbnail'), 'page', false, true );
		mt_register_cpt( 'creator', 'groups', array( 'title', 'editor','thumbnail' ), 'page', false, true );
	endif;
}


register_taxonomy('project-categories', 'project', array(

	'hierarchical' => true,
	
	'labels' => array(
	  'name' => _x( 'Project Categories', 'taxonomy general name' ),
	  'singular_name' => _x( 'Project Category', 'taxonomy singular name' ),
	  'search_items' =>  __( 'Search Project Categories' ),
	  'all_items' => __( 'All Project Categories' ),
	  'parent_item' => __( 'Parent Project Category' ),
	  'parent_item_colon' => __( 'Parent Project Category:' ),
	  'edit_item' => __( 'Edit Project Category' ),
	  'update_item' => __( 'Update Project Categoy' ),
	  'add_new_item' => __( 'Add New Project Category' ),
	  'new_item_name' => __( 'New Project Category Name' ),
	  'menu_name' => __( 'Project Categories' ),
	),

	'rewrite' => array(
	  'slug' => 'projectcategories', // This controls the base slug that will display before each term
	  'with_front' => false, // Don't display the category base before "/locations/"
	  'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
  ));


  register_taxonomy('creator-categories', 'creator', array(

	'hierarchical' => true,
	
	'labels' => array(
	  'name' => _x( 'Creator Categories', 'taxonomy general name' ),
	  'singular_name' => _x( 'Creator Category', 'taxonomy singular name' ),
	  'search_items' =>  __( 'Search Creator Categories' ),
	  'all_items' => __( 'All Creator Categories' ),
	  'parent_item' => __( 'Parent Creator Category' ),
	  'parent_item_colon' => __( 'Parent Creator Category:' ),
	  'edit_item' => __( 'Edit Creator Category' ),
	  'update_item' => __( 'Update Creator Categoy' ),
	  'add_new_item' => __( 'Add New Creator Category' ),
	  'new_item_name' => __( 'New Creator Category Name' ),
	  'menu_name' => __( 'Creator Categories' ),
	),

	'rewrite' => array(
	  'slug' => 'creatorcategories', // This controls the base slug that will display before each term
	  'with_front' => false, // Don't display the category base before "/locations/"
	  'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
  ));


  register_taxonomy('creator-countries', 'creator', array(

	'hierarchical' => true,
	
	'labels' => array(
	  'name' => _x( 'Creator Countries', 'taxonomy general name' ),
	  'singular_name' => _x( 'Creator Country', 'taxonomy singular name' ),
	  'search_items' =>  __( 'Search Creator Countries' ),
	  'all_items' => __( 'All Creator Countries' ),
	  'parent_item' => __( 'Parent Creator Country' ),
	  'parent_item_colon' => __( 'Parent Creator Country:' ),
	  'edit_item' => __( 'Edit Creator Country' ),
	  'update_item' => __( 'Update Creator Country' ),
	  'add_new_item' => __( 'Add New Creator Country' ),
	  'new_item_name' => __( 'New Creator Country Name' ),
	  'menu_name' => __( 'Creator Countries' ),
	),

	'rewrite' => array(
	  'slug' => 'creatorcountries', // This controls the base slug that will display before each term
	  'with_front' => false, // Don't display the category base before "/locations/"
	  'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
  ));
?>


