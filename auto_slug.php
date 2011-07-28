<?php
/**
 * @version 0.1
 */
/*
Plugin Name: Auto Slug
Description: This plugin just updates the url with the slugged title before publish an article
Author: Christian Felipe
Version: 0.1
*/


function auto_slug( $post_data ) {
    $post_data['post_name'] = sanitize_title( $post_data['post_title'] );
    return $post_data;
}

add_filter('wp_insert_post_data', 'auto_slug', 10);
?>
