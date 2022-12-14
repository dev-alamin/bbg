<?php
add_action('init', 'bbg_cpt_urcode');
/**
 * Register Post Type POST UR Codes
 *
 * @return void
 **/

if (!function_exists('bbg_cpt_urcode')) {
    function bbg_cpt_urcode(){
        $labels = array(
            'name'               => __('UR Codes', 'bbgurcode'),
            'singular_name'      => __('UR Code', 'bbgurcode'),
            'add_new'            => __('Add New UR Code', 'bbgurcode'),
            'add_new_item'       => __('Add New UR Code', 'bbgurcode'),
            'edit_item'          => __('Edit UR Code', 'bbgurcode'),
            'new_item'           => __('New UR Code', 'bbgurcode'),
            'view_item'          => __('View UR Code', 'bbgurcode'),
            'search_items'       => __('Search UR Codes', 'bbgurcode'),
            'not_found'          => __('Not found UR Codes', 'bbgurcode'),
            'not_found_in_trash' => __('Not found UR Codes in trash', 'bbgurcode'),
        );
        $args   = array(
            'labels'             => $labels,
            'public'             => false,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_rest'       => true, // Adds gutenberg support.
            'query_var'          => true,
            'rewrite'            => array(
                'slug'       => _x('urcode', 'slug', 'bbgurcode'),
                'with_front' => false,
            ),
            'has_archive'        => false,
            'capability_type'    => 'post',
            'hierarchical'       => false,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-book', // https://developer.wordpress.org/resource/dashicons/.
            'supports'           => array('title'),
        );
        register_post_type('urcode', $args);
    }
}
