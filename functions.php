<?php 

function bakeryFiles() {
    wp_enqueue_style('bakeryStyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'bakeryFiles');

function bakeryFeatures() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bakeryFeatures');

function bakery_post_types () {
    register_post_type('flavor', array(
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Flavors',
            'add_new_item' => 'Add New Flavor',
            'edit_item' => 'Edit Flavor',
            'all_items' => 'All Flavors',
            'singular_name' => 'Flavor'
        ),
        'menu_icon' => 'dashicons-buddicons-community'
    ));

    register_post_type('price', array(
        'supports' => array('title', 'editor', 'custom-fields'),
        'public' => true,
        'labels' => array(
            'name' => 'Prices',
            'add_new_item' => 'Add New Price',
            'edit_item' => 'Edit Price',
            'all_items' => 'All Prices',
            'singular_name' => 'Price'
        ),
        'menu_icon' => 'dashicons-money-alt'
    ));

    register_post_type('people', array(
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'People',
            'add_new_item' => 'Add New Person',
            'edit_item' => 'Edit Person',
            'all_items' => 'All People',
            'singular_name' => 'Person'
        ),
        'menu_icon' => 'dashicons-id-alt'
    ));
}

add_action('init', 'bakery_post_types');

?>