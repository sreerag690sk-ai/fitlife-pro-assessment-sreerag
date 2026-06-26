<?php

function fitlife_register_cpts(){
    register_post_type('fitlife_trainer', array(
        'label' => 'Trainers',
        'public' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true

    ));

    register_post_type('fitlife_program', array(
        'label' => 'Programs',
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-universal-access',
        'show_in_rest' => true

    ));

// taxonamies

register_taxonomy('program_type', 'fitlife_program', array(
'label' => 'Program Type',
'hierarchical' => true
));

register_taxonomy('speciality', 'fitlife_trainer', array(
'label' => 'Speciality',
'hierarchical' => true
));

}

add_action('init', 'fitlife_register_cpts');



