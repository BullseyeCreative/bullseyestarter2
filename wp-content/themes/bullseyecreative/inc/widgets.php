<?php
/**
 * Registers widget areas for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */


// // Saves a list of widgets used for each page
// function update_widget_info($post_id) {
//   global $post;
//
//   if (get_post_type() == 'page') {
//     $data = [];
//     foreach(get_pages() as $page) {
//       $data[] = array('ID' => $page->ID, 'title' => $page->post_title );
//     }
//     update_option('bc_page_widgets', $data);
//   }
//
//  }
//  add_action( 'save_post', 'update_widget_info' );
//
//
//
//
// function bc_register_page_widget_areas() {
// 		// save a list of all page with certain params to wp_options on page save only,
// 		//then read from that field
//     // Grab all pages except trashed
// 		foreach(get_option('bc_page_widgets') as $page) {
//         // Ignore pages with no slug
//         // Register the sidebar for the page. Note that the id has
//         // to match the name given in the theme template
//         register_sidebar( array(
//             'name'          => $page['title'],
//             'id'            => 'widget_area_for_page_'.$page['ID'],
//             'before_widget' => '',
//             'after_widget'  => '',
//             'before_title'  => '',
//             'after_title'   => '',
//         ) );
// 		}
// }
// // add_action( 'widgets_init', 'bc_register_page_widget_areas' );
