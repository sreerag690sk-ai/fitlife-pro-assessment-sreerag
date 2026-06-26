<?php
function fitlife_settings_menu(){
    add_option_page(
        'Settings',
        'Manage'
    );
}
add_action('admin_menu', 'fitlife_settings_menu')