<?php

// create two taxonomies, genres and writers for the post type "book"
function e11_registers_taxonomies() {

    $e11_magic_taxonomy_maker_array = array(
        array(
            'tax_singular' => 'Nature',
            'tax_plural'   => 'Nature',
            'tax_slug'     => 'nature',
            'applicable_post_types' => array(
                'photography',
            )
        ),

        array(
            'tax_singular' => 'Personal',
            'tax_plural'   => 'Personal',
            'tax_slug'     => 'personal',
            'applicable_post_types' => array(
                'photography',
            )
        ),
    );

    foreach( $e11_magic_taxonomy_maker_array as $taxonomy ){
        $tax_singular = $taxonomy['tax_singular'];
        $tax_plural   = $taxonomy['tax_plural'];
        $tax_slug     = $taxonomy['tax_slug'];
        $applicable_post_types = $taxonomy['applicable_post_types'];

        $labels = e11_generate_tax_labels_array($tax_singular, $tax_plural);
        $args = e11_generate_tax_args_array($labels, $tax_slug);
        register_taxonomy( $tax_slug, $applicable_post_types, $args );
    }

}
add_action( 'init', 'e11_registers_taxonomies', 0 ); // hook into the init action



function e11_generate_tax_labels_array($tax_singular, $tax_plural){
    $labels = array(
        'name'              => __( $tax_plural ),
        'singular_name'     => __( $tax_singular ),
        'search_items'      => __( 'Search '.$tax_plural ),
        'all_items'         => __( 'All '.$tax_plural ),
        'parent_item'       => __( 'Parent '.$tax_singular ),
        'parent_item_colon' => __( 'Parent '.$tax_singular.':' ),
        'edit_item'         => __( 'Edit '.$tax_singular ),
        'update_item'       => __( 'Update '.$tax_singular ),
        'add_new_item'      => __( 'Add New '.$tax_singular ),
        'new_item_name'     => __( 'New '.$tax_singular.' Name' ),
        'menu_name'         => __( $tax_plural ),
    );
    return $labels;
}

function e11_generate_tax_args_array($labels, $tax_slug){
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => $tax_slug ),
    );
    return $args;
}
