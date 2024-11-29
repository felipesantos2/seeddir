<?php

// add  public/css/seeddir.css
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style(
        'seeddir-css',
        plugin_dir_url(__FILE__) . '/public/css/seeddir.css',
        array(),
        microtime()
    );
});

add_action('admin_menu', 'seeddir_add_admin_menu');

function seeddir_add_admin_menu()
{
    add_menu_page(
        'Teste seus E-mails',     // page title
        'E-mails Send',     // menu title
        'manage_options',   // capability
        'emails-send',     // menu slug
        function () {

            if (!current_user_can('manage_options')) {
                return;
            }

            global $title;

            echo '<div class="wrap">';

            echo "<h1>$title</h1>";

            require __DIR__ . '/admin/list-emails' . '.php';

            echo '</div>';
        } // callback function
    );
}
