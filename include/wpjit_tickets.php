<?php 

    $args = array(
        'labels' => array(
        'name' => __( 'Tickets' ),
        'singular_name' => __( 'Ticket' )
        ),

        'hierarchical'          => false,
        'description'           => 'Tickets Information.',
        'supports'              => array( 'title', 'editor','author'),
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-clock',
        'show_in_nav_menus'     => true,
        'publicly_queryable'    => true,
        'exclude_from_search'   => false,
        'has_archive'           => false,
        'query_var'             => 'wpjit_tickets',
        'can_export'            => true,
        'rewrite'               => array(
            'slug'              => 'wpjit_tickets',
            'with_front'        => false,
            'feeds'             => false,
            'pages'             => false
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'wpjit_tickets', $args );

