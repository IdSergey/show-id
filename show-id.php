<?php
/**
 * ShowCountViewPost
 * Plugin Name:       Show ID for Page or Post
 * Plugin URI:        #
 * Description:       Show ID for Page or Post
 * Version:           1.0
 * Requires at least: 5.7
 * Requires PHP:      5.6
 * Author:            Artium
 * Author URI:        https://artium.com.ua
 * Text Domain:       show-id
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Don't access directly.
};


//--- Добавление колонки с ID записей и страниц в админку
function true_id($args){
	$args['post_page_id'] = 'ID';
	return $args;
}
function true_custom($column, $id){
	if($column === 'post_page_id'){
		echo $id;
	}
}
add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);