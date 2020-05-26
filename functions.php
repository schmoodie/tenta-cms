<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}



function cptui_register_my_cpts() {

	/**
	 * Post Type: Hundar.
	 */

	$labels = [
		"name" => __( "Hundar", "understrap" ),
		"singular_name" => __( "Hund", "understrap" ),
		"menu_name" => __( "My Hundar", "understrap" ),
		"all_items" => __( "All Hundar", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new Hund", "understrap" ),
		"edit_item" => __( "Edit Hund", "understrap" ),
		"new_item" => __( "New Hund", "understrap" ),
		"view_item" => __( "View Hund", "understrap" ),
		"view_items" => __( "View Hundar", "understrap" ),
		"search_items" => __( "Search Hundar", "understrap" ),
		"not_found" => __( "No Hundar found", "understrap" ),
		"not_found_in_trash" => __( "No Hundar found in trash", "understrap" ),
		"parent" => __( "Parent Hund:", "understrap" ),
		"featured_image" => __( "Featured image for this Hund", "understrap" ),
		"set_featured_image" => __( "Set featured image for this Hund", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this Hund", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this Hund", "understrap" ),
		"archives" => __( "Hund archives", "understrap" ),
		"insert_into_item" => __( "Insert into Hund", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this Hund", "understrap" ),
		"filter_items_list" => __( "Filter Hundar list", "understrap" ),
		"items_list_navigation" => __( "Hundar list navigation", "understrap" ),
		"items_list" => __( "Hundar list", "understrap" ),
		"attributes" => __( "Hundar attributes", "understrap" ),
		"name_admin_bar" => __( "Hund", "understrap" ),
		"item_published" => __( "Hund published", "understrap" ),
		"item_published_privately" => __( "Hund published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "Hund reverted to draft.", "understrap" ),
		"item_scheduled" => __( "Hund scheduled", "understrap" ),
		"item_updated" => __( "Hund updated.", "understrap" ),
		"parent_item_colon" => __( "Parent Hund:", "understrap" ),
	];

	$args = [
		"label" => __( "Hundar", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "hund", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "hund", $args );

	/**
	 * Post Type: usps.
	 */

	$labels = [
		"name" => __( "usps", "understrap" ),
		"singular_name" => __( "usp", "understrap" ),
		"menu_name" => __( "My usps", "understrap" ),
		"all_items" => __( "All usps", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new usp", "understrap" ),
		"edit_item" => __( "Edit usp", "understrap" ),
		"new_item" => __( "New usp", "understrap" ),
		"view_item" => __( "View usp", "understrap" ),
		"view_items" => __( "View usps", "understrap" ),
		"search_items" => __( "Search usps", "understrap" ),
		"not_found" => __( "No usps found", "understrap" ),
		"not_found_in_trash" => __( "No usps found in trash", "understrap" ),
		"parent" => __( "Parent usp:", "understrap" ),
		"featured_image" => __( "Featured image for this usp", "understrap" ),
		"set_featured_image" => __( "Set featured image for this usp", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this usp", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this usp", "understrap" ),
		"archives" => __( "usp archives", "understrap" ),
		"insert_into_item" => __( "Insert into usp", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this usp", "understrap" ),
		"filter_items_list" => __( "Filter usps list", "understrap" ),
		"items_list_navigation" => __( "usps list navigation", "understrap" ),
		"items_list" => __( "usps list", "understrap" ),
		"attributes" => __( "usps attributes", "understrap" ),
		"name_admin_bar" => __( "usp", "understrap" ),
		"item_published" => __( "usp published", "understrap" ),
		"item_published_privately" => __( "usp published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "usp reverted to draft.", "understrap" ),
		"item_scheduled" => __( "usp scheduled", "understrap" ),
		"item_updated" => __( "usp updated.", "understrap" ),
		"parent_item_colon" => __( "Parent usp:", "understrap" ),
	];

	$args = [
		"label" => __( "usps", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "usp", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "usp", $args );

	/**
	 * Post Type: successes.
	 */

	$labels = [
		"name" => __( "successes", "understrap" ),
		"singular_name" => __( "success", "understrap" ),
		"menu_name" => __( "My sucesses", "understrap" ),
		"all_items" => __( "All sucesses", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new sucess", "understrap" ),
		"edit_item" => __( "Edit sucess", "understrap" ),
		"new_item" => __( "New sucess", "understrap" ),
		"view_item" => __( "View sucess", "understrap" ),
		"view_items" => __( "View sucesses", "understrap" ),
		"search_items" => __( "Search sucesses", "understrap" ),
		"not_found" => __( "No sucesses found", "understrap" ),
		"not_found_in_trash" => __( "No sucesses found in trash", "understrap" ),
		"parent" => __( "Parent sucess:", "understrap" ),
		"featured_image" => __( "Featured image for this sucess", "understrap" ),
		"set_featured_image" => __( "Set featured image for this sucess", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this sucess", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this sucess", "understrap" ),
		"archives" => __( "sucess archives", "understrap" ),
		"insert_into_item" => __( "Insert into sucess", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this sucess", "understrap" ),
		"filter_items_list" => __( "Filter sucesses list", "understrap" ),
		"items_list_navigation" => __( "sucesses list navigation", "understrap" ),
		"items_list" => __( "sucesses list", "understrap" ),
		"attributes" => __( "sucesses attributes", "understrap" ),
		"name_admin_bar" => __( "sucess", "understrap" ),
		"item_published" => __( "sucess published", "understrap" ),
		"item_published_privately" => __( "sucess published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "sucess reverted to draft.", "understrap" ),
		"item_scheduled" => __( "sucess scheduled", "understrap" ),
		"item_updated" => __( "sucess updated.", "understrap" ),
		"parent_item_colon" => __( "Parent sucess:", "understrap" ),
	];

	$args = [
		"label" => __( "successes", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "custom-fields" ],
	];

	register_post_type( "success", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_cpts_hund() {

	/**
	 * Post Type: Hundar.
	 */

	$labels = [
		"name" => __( "Hundar", "understrap" ),
		"singular_name" => __( "Hund", "understrap" ),
		"menu_name" => __( "My Hundar", "understrap" ),
		"all_items" => __( "All Hundar", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new Hund", "understrap" ),
		"edit_item" => __( "Edit Hund", "understrap" ),
		"new_item" => __( "New Hund", "understrap" ),
		"view_item" => __( "View Hund", "understrap" ),
		"view_items" => __( "View Hundar", "understrap" ),
		"search_items" => __( "Search Hundar", "understrap" ),
		"not_found" => __( "No Hundar found", "understrap" ),
		"not_found_in_trash" => __( "No Hundar found in trash", "understrap" ),
		"parent" => __( "Parent Hund:", "understrap" ),
		"featured_image" => __( "Featured image for this Hund", "understrap" ),
		"set_featured_image" => __( "Set featured image for this Hund", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this Hund", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this Hund", "understrap" ),
		"archives" => __( "Hund archives", "understrap" ),
		"insert_into_item" => __( "Insert into Hund", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this Hund", "understrap" ),
		"filter_items_list" => __( "Filter Hundar list", "understrap" ),
		"items_list_navigation" => __( "Hundar list navigation", "understrap" ),
		"items_list" => __( "Hundar list", "understrap" ),
		"attributes" => __( "Hundar attributes", "understrap" ),
		"name_admin_bar" => __( "Hund", "understrap" ),
		"item_published" => __( "Hund published", "understrap" ),
		"item_published_privately" => __( "Hund published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "Hund reverted to draft.", "understrap" ),
		"item_scheduled" => __( "Hund scheduled", "understrap" ),
		"item_updated" => __( "Hund updated.", "understrap" ),
		"parent_item_colon" => __( "Parent Hund:", "understrap" ),
	];

	$args = [
		"label" => __( "Hundar", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "hund", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "hund", $args );
}

add_action( 'init', 'cptui_register_my_cpts_hund' );



function cptui_register_my_cpts_usp() {

	/**
	 * Post Type: usps.
	 */

	$labels = [
		"name" => __( "usps", "understrap" ),
		"singular_name" => __( "usp", "understrap" ),
		"menu_name" => __( "My usps", "understrap" ),
		"all_items" => __( "All usps", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new usp", "understrap" ),
		"edit_item" => __( "Edit usp", "understrap" ),
		"new_item" => __( "New usp", "understrap" ),
		"view_item" => __( "View usp", "understrap" ),
		"view_items" => __( "View usps", "understrap" ),
		"search_items" => __( "Search usps", "understrap" ),
		"not_found" => __( "No usps found", "understrap" ),
		"not_found_in_trash" => __( "No usps found in trash", "understrap" ),
		"parent" => __( "Parent usp:", "understrap" ),
		"featured_image" => __( "Featured image for this usp", "understrap" ),
		"set_featured_image" => __( "Set featured image for this usp", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this usp", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this usp", "understrap" ),
		"archives" => __( "usp archives", "understrap" ),
		"insert_into_item" => __( "Insert into usp", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this usp", "understrap" ),
		"filter_items_list" => __( "Filter usps list", "understrap" ),
		"items_list_navigation" => __( "usps list navigation", "understrap" ),
		"items_list" => __( "usps list", "understrap" ),
		"attributes" => __( "usps attributes", "understrap" ),
		"name_admin_bar" => __( "usp", "understrap" ),
		"item_published" => __( "usp published", "understrap" ),
		"item_published_privately" => __( "usp published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "usp reverted to draft.", "understrap" ),
		"item_scheduled" => __( "usp scheduled", "understrap" ),
		"item_updated" => __( "usp updated.", "understrap" ),
		"parent_item_colon" => __( "Parent usp:", "understrap" ),
	];

	$args = [
		"label" => __( "usps", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "usp", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "usp", $args );
}

add_action( 'init', 'cptui_register_my_cpts_usp' );


function cptui_register_my_cpts_success() {

	/**
	 * Post Type: successes.
	 */

	$labels = [
		"name" => __( "successes", "understrap" ),
		"singular_name" => __( "success", "understrap" ),
		"menu_name" => __( "My sucesses", "understrap" ),
		"all_items" => __( "All sucesses", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new sucess", "understrap" ),
		"edit_item" => __( "Edit sucess", "understrap" ),
		"new_item" => __( "New sucess", "understrap" ),
		"view_item" => __( "View sucess", "understrap" ),
		"view_items" => __( "View sucesses", "understrap" ),
		"search_items" => __( "Search sucesses", "understrap" ),
		"not_found" => __( "No sucesses found", "understrap" ),
		"not_found_in_trash" => __( "No sucesses found in trash", "understrap" ),
		"parent" => __( "Parent sucess:", "understrap" ),
		"featured_image" => __( "Featured image for this sucess", "understrap" ),
		"set_featured_image" => __( "Set featured image for this sucess", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this sucess", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this sucess", "understrap" ),
		"archives" => __( "sucess archives", "understrap" ),
		"insert_into_item" => __( "Insert into sucess", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this sucess", "understrap" ),
		"filter_items_list" => __( "Filter sucesses list", "understrap" ),
		"items_list_navigation" => __( "sucesses list navigation", "understrap" ),
		"items_list" => __( "sucesses list", "understrap" ),
		"attributes" => __( "sucesses attributes", "understrap" ),
		"name_admin_bar" => __( "sucess", "understrap" ),
		"item_published" => __( "sucess published", "understrap" ),
		"item_published_privately" => __( "sucess published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "sucess reverted to draft.", "understrap" ),
		"item_scheduled" => __( "sucess scheduled", "understrap" ),
		"item_updated" => __( "sucess updated.", "understrap" ),
		"parent_item_colon" => __( "Parent sucess:", "understrap" ),
	];

	$args = [
		"label" => __( "successes", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "custom-fields" ],
	];

	register_post_type( "success", $args );
}

add_action( 'init', 'cptui_register_my_cpts_success' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Genders.
	 */

	$labels = [
		"name" => __( "Genders", "understrap" ),
		"singular_name" => __( "gender", "understrap" ),
	];

	$args = [
		"label" => __( "Genders", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'genders', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "genders",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "genders", [ "hund" ], $args );

	/**
	 * Taxonomy: cities.
	 */

	$labels = [
		"name" => __( "cities", "understrap" ),
		"singular_name" => __( "city", "understrap" ),
	];

	$args = [
		"label" => __( "cities", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'cities', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "cities",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "cities", [ "hund" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


function cptui_register_my_taxes_genders() {

	/**
	 * Taxonomy: Genders.
	 */

	$labels = [
		"name" => __( "Genders", "understrap" ),
		"singular_name" => __( "gender", "understrap" ),
	];

	$args = [
		"label" => __( "Genders", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'genders', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "genders",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "genders", [ "hund" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_genders' );


function cptui_register_my_taxes_cities() {

	/**
	 * Taxonomy: cities.
	 */

	$labels = [
		"name" => __( "cities", "understrap" ),
		"singular_name" => __( "city", "understrap" ),
	];

	$args = [
		"label" => __( "cities", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'cities', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "cities",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "cities", [ "hund" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_cities' );
