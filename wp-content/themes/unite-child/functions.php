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
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'films'),
        )
    );


}

add_action( 'init', 'create_film_post_type' );
