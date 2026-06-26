<?php
function fitlife_register_api_routes(){
    register_rest_route('/wp-json/fitlife/v1/trainers', array(
        'methods' =>'GET',
        'callback' => 'fitlife_get_trainers'
    ));
    register_rest_route('/wp-json/fitlife/v1/programs', array(
        'method' =>'GET',
        'callback' => 'fitlife_get_programs'
    ));
}
function fitlife_get_trainers(){
    $posts = get_posts(array('post_type' => 'fitlife_trainer', 'numberposts' => -1));
    $data= array();
    foreach($posts as $posts){
        $data[] =array(
            'id' => $post->ID,
            'title' => $post->post_title
        );
    }
    return rest_ensure_response($data);
}

    function fitlife_get_programs(){
    $posts = get_posts(array('post_type' => 'fitlife_program', 'numberposts' => -1));
    $data= array();
    foreach($posts as $posts){
        $data[] =array(
            'id' => $post->ID,
            'title' => $post->post_title
        );
    }
return rest_ensure_response($data);
}

add_action('rest_api_init', 'fitlife_register_api_routes');


