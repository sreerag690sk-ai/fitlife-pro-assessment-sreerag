<?php
function fitlife_trainers_shortcode(){
    ob_start();

$query = new WP_Query(array(
    'post_type' => 'fitlife_trainer'
));
while($query->have_posts()){
    $query-> the_post();
    echo '<h2>' . get_the_title() . '</h2>';
}
wp_reset_postdata();
return ob_get_clean();

}
 add_shortcode('fitlife_trainers', 'fitlife_trainers_shortcode');