<?php
/**
 * Register a custom post type called "gallery".
 *
 * @see get_post_type_labels() for label keys.
 */
function lc_post_type_gallery() {
    $labels = array(
        'name'                  => _x( 'Galleries', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gallery', 'Post type singular name', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail',),
    );

    register_post_type( 'gallery', $args );
}

add_action( 'init', 'lc_post_type_gallery' );

/**
 * Register a custom post type called "chunk".
 *
 * @see get_post_type_labels() for label keys.
 */
function lc_post_type_chunks() {
    $labels = array(
        'name'                  => _x( 'Chunks', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Chunk', 'Post type singular name', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'chunk' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail',),
    );

    register_post_type( 'chunk', $args );
}

add_action( 'init', 'lc_post_type_chunks' );

/**
 * Register a private 'Skill' taxonomy for post type 'chunk'.
 *
 * @see register_post_type() for registering post types.
 */
function lc_register_custom_taxonomy() {
    $args = array(
        'label'        => __( 'Skill', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    $args_time = array(
        'label'        => __( 'Time', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );

    register_taxonomy( 'skill', 'chunk', $args );
    register_taxonomy( 'spend-time', 'chunk', $args_time );
}
add_action( 'init', 'lc_register_custom_taxonomy', 0 );
