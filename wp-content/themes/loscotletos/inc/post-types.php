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
