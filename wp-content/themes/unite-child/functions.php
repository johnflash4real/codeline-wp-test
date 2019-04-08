<?php
/**
 * Created by PhpStorm.
 * User: JFlash
 * Date: 4/8/19
 * Time: 4:36 PM
 */
function create_film_post_type() {

    register_post_type( 'film',
        array(
            'labels' => array(
                'name' => __( 'Films' ),
                'singular_name' => __( 'Film' )
            ),
            'hierarchical'=>false,
            'public' => true,
            'has_archive' => true,
            'show_in_menu'=>true,
            'show_ui'=>true,
            'show_in_nav_menus'=>true,
            'rewrite' => array('slug' => 'films'),
        )
    );



    register_taxonomy('genre','film',
        array(
            'label'=>__('Genre'),
            'rewrite'=> array('slug'=>'genre'),
            'hierarchical'=>false
        )
    );

    register_taxonomy('country','film',
        array(
            'label'=>__('Country'),
            'rewrite'=> array('slug'=>'country'),
            'hierarchical'=>false
        )
    );

    register_taxonomy('year','film',
        array(
            'label'=>__('Year'),
            'rewrite'=> array('slug'=>'genre'),
            'hierarchical'=>false
        )
    );

    register_taxonomy('actors','film',
        array(
            'label'=>__('Actors'),
            'rewrite'=> array('slug'=>'actors'),
            'hierarchical'=>false
        )
    );


}

add_action( 'init', 'create_film_post_type' );
