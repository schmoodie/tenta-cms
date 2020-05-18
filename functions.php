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


function cptui_register_my_cpts_hund() {

	/**
	 * Post Type: hundar.
	 */

	$labels = [
		"name" => __( "hundar", "understrap" ),
		"singular_name" => __( "hund", "understrap" ),
		"menu_name" => __( "Hundar", "understrap" ),
		"all_items" => __( "Alla hundar", "understrap" ),
		"add_new" => __( "Lägg till en ny hund", "understrap" ),
		"add_new_item" => __( "Lägg till ny hund", "understrap" ),
		"edit_item" => __( "redigera hund", "understrap" ),
		"new_item" => __( "Ny hund", "understrap" ),
		"view_item" => __( "Visa hund", "understrap" ),
		"view_items" => __( "Visa hundar", "understrap" ),
		"search_items" => __( "Sök efter hundar", "understrap" ),
		"not_found" => __( "Hunden hittades ej", "understrap" ),
		"not_found_in_trash" => __( "Hunden hittades inte bland skräp", "understrap" ),
		"parent" => __( "Parent hund", "understrap" ),
		"featured_image" => __( "Bild på hunden", "understrap" ),
		"set_featured_image" => __( "Välj bild på hunden", "understrap" ),
		"remove_featured_image" => __( "Ta bort bild på hunden", "understrap" ),
		"use_featured_image" => __( "Använd bild på hunden", "understrap" ),
		"archives" => __( "Hund arkiv", "understrap" ),
		"insert_into_item" => __( "Insert into hund", "understrap" ),
		"uploaded_to_this_item" => __( "uploaded to hund", "understrap" ),
		"filter_items_list" => __( "Hund filter", "understrap" ),
		"items_list_navigation" => __( "Hund navigation", "understrap" ),
		"items_list" => __( "Hund lista", "understrap" ),
		"attributes" => __( "Hund attribut", "understrap" ),
		"name_admin_bar" => __( "Hundar på lager", "understrap" ),
		"item_published" => __( "Hund tillagd", "understrap" ),
		"item_published_privately" => __( "Hunden är privat", "understrap" ),
		"item_reverted_to_draft" => __( "Hunden är i draft", "understrap" ),
		"item_scheduled" => __( "Hunder läggs ut", "understrap" ),
		"item_updated" => __( "Hunden uppdaterad", "understrap" ),
		"parent_item_colon" => __( "Parent hund", "understrap" ),
	];

	$args = [
		"label" => __( "hundar", "understrap" ),
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
		"rewrite" => [ "slug" => "hund", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category" ],
	];

	register_post_type( "hund", $args );
}

add_action( 'init', 'cptui_register_my_cpts_hund' );
