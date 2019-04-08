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
            'supports'=>array('title','editor','excerpt'),
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


function codeline_latest_films_shortcode($atts){
    $args = array(
        'post_type'=>'film',
        'posts_per_page'=>5
    );
    $filmsQuery = new WP_Query($args);
    if(!$filmsQuery->have_posts())
        return "<div class='alert alert-info'>No films found</div>";

    $filmsArr = $filmsQuery->get_posts();
    $output = "<ul>";
    foreach ($filmsArr as $film)
        $output .= "<li><a href='".get_permalink($film)."'>{$film->post_title}</a></li>";


    $output .="</ul>";
    return $output;


}
add_shortcode('latest_films','codeline_latest_films_shortcode');


function codeline_films_after_title(){
    global $post;
    if (get_post_type()=='film'):?>

    <div class="row film-detail-div">
            <div class="col-md-6">
                <b><i class="fa fa-globe"></i> Country:</b>
                <?php
                echo get_the_term_list($post->ID,'country','<span class="label label-info">','','</span>');
                ?>
            </div>

            <div class="col-md-6">
                <b><i class="fa fa-file"></i> Genre:</b>
                <?php
                echo get_the_term_list($post->ID,'genre','<span class="label label-info">','','</span>');
                ?>
            </div>

            <div class="col-md-6">
                <b><i class="fa fa-ticket"></i> Ticket Price:</b>
                $<?php echo get_field('ticket_price',$post->ID); ?>
            </div>

            <div class="col-md-6">
                <b><i class="fa fa-ticket"></i> Release Date:</b>
                <?php echo get_field('release_date',$post->ID); ?>
            </div>


        </div>
<?php endif;
}
add_action('unite_after_post_loop','codeline_films_after_title');
