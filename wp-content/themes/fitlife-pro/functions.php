<?php

function fitlife_pro_setup(){
    add_theme_support('post-thumbnail');
    add_theme_support('title-tag');
    add_theme_support('html5');
    add_theme_support('custom-logo');


register_nav_menus([
    'primary' => 'Primary Nav',
    'footer' => 'Footer Nav'
]);
}
add_action('after_setup_theme', 'fitlife_pro_setup');

function fitlife_enqueue_assets(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_stylesheet_uri(). '/css/mainstyle.css');
 
    wp_enqueue_scripts('main-js', get_template_directory_uri(). '/js/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'fitlife_enqueue_assets');


add_filter('xmlrpc_enabled', '__return_false');

wp_nonce_field('fitlife_nonce', 'fitlife_nonce_field');

// add_filter('woocommerce_checkout_fields', function($fields){
//     $fields['billing'][fitness_goal] =[
//         'type' => 'select',
//         'label' =>'Fitness Goal',
//         options =>[
//             'weight_loss' =>'Weight Loss',
//             'weight_loss' =>'Muscle Gain',
//             'weight_loss' =>'Endurance',
//             'weight_loss' =>'Flexibility.',
//         ]
//     ]
// });

// add_action('woocommerce_checkoutupdate_order_meta', function($order_id){
//     if(isset($_post[fitness_goal])){
//         update_post_meta($order_id,'fitness goal'sanitize_text_field($_POST['fitness_goal']));
//     }
// });