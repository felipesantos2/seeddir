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


function seeddir_emails_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    global $title;

    echo '<div class="wrap">';

        echo "<h1>$title</h1>";

        require __DIR__ . '/admin/email/email-create' . '.php';

    echo '</div>';
}


function seeddir_post_type_order_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    global $title;

    echo '<div class="wrap">';

        // echo "<h1>$title</h1>";

        // require __DIR__ . '/admin/list-emails' . '.php';

    echo '</div>';
}

add_action('admin_menu', 'seeddir_add_admin_menu');


function seeddir_add_admin_menu()
{
    add_menu_page(
        'Teste seus E-mails',       // page title
        'E-mails Send',             // menu title
        'manage_options',           // capability
        'emails-send',              // menu slug
        'seeddir_emails_page',       // calback function
        'dashicons-email-alt'
    );

    add_menu_page(
        'Post Order',
        'Post Order',
        'manage_options',
        'post-order',
        'seeddir_post_type_order_page',
        'dashicons-editor-ol'
    );
}

// capabilities - roles - permissions - authentication - authorization
