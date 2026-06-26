<?php
function fitlife_trainer_meta_callback($post){

    wp_nonce_field('save_trainer_meta', 'trainer_nonce');

    $certification      = get_post_meta($post->ID, '_certification', true);
    $yearsofexperience  = get_post_meta($post->ID, '_yearsofexperience', true);
    $instagram          = get_post_meta($post->ID, '_instagram', true);
    $youtube            = get_post_meta($post->ID, '_youtube', true);
    $hourlyrate         = get_post_meta($post->ID, '_hourlyrate', true);
    ?>

    <p>
        <label>Certification</label><br>
        <input type="text" name="certification" value="<?php echo esc_attr($certification); ?>">
    </p>

    <p>
        <label>Years of Experience</label><br>
        <input type="number" name="yearsofexperience" value="<?php echo esc_attr($yearsofexperience); ?>">
    </p>

    <p>
        <label>Instagram</label><br>
        <input type="text" name="instagram" value="<?php echo esc_attr($instagram); ?>">
    </p>

    <p>
        <label>YouTube</label><br>
        <input type="text" name="youtube" value="<?php echo esc_attr($youtube); ?>">
    </p>

    <p>
        <label>Hourly Rate</label><br>
        <input type="number" name="hourlyrate" value="<?php echo esc_attr($hourlyrate); ?>">
    </p>

    <?php
}
function fitlife_program_meta_callback($post){

    wp_nonce_field('save_program_meta', 'program_nonce');

    $duration = get_post_meta($post->ID, '_program_duration', true);
    ?>

    <p>
        <label>Program Duration</label><br>
        <input type="text" name="program_duration" value="<?php echo esc_attr($duration); ?>">
    </p>

    <?php
}
function fitlife_save_meta($post_id){

    // Trainer nonce
    if (
        isset($_POST['trainer_nonce']) &&
        wp_verify_nonce($_POST['trainer_nonce'], 'save_trainer_meta')
    ) {

        if (isset($_POST['certification'])) {
            update_post_meta(
                $post_id,
                '_certification',
                sanitize_text_field($_POST['certification'])
            );
        }

        if (isset($_POST['yearsofexperience'])) {
            update_post_meta(
                $post_id,
                '_yearsofexperience',
                sanitize_text_field($_POST['yearsofexperience'])
            );
        }

        if (isset($_POST['instagram'])) {
            update_post_meta(
                $post_id,
                '_instagram',
                esc_url_raw($_POST['instagram'])
            );
        }

        if (isset($_POST['youtube'])) {
            update_post_meta(
                $post_id,
                '_youtube',
                esc_url_raw($_POST['youtube'])
            );
        }

        if (isset($_POST['hourlyrate'])) {
            update_post_meta(
                $post_id,
                '_hourlyrate',
                sanitize_text_field($_POST['hourlyrate'])
            );
        }
    }

    // Program nonce
    if (
        isset($_POST['program_nonce']) &&
        wp_verify_nonce($_POST['program_nonce'], 'save_program_meta')
    ) {

        if (isset($_POST['program_duration'])) {
            update_post_meta(
                $post_id,
                '_program_duration',
                sanitize_text_field($_POST['program_duration'])
            );
        }
    }
}

add_action('save_post', 'fitlife_save_meta');
