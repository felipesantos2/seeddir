<?php


/**
 *
 *  @author            Felipe Pinheiro
 *  @copyright         2024 Felipe Pinheiro
 *  @license           https://unlicense.org
 *
 *  Plugin Name: Seeddir - Mail Tester
 *  Author: Felipe Pinheiro
 *  Author URI: https://github.com/felipesantos2
 *  Version: 1.0.0
 *  Licence:
 *  Text Domain: seeddir
 *
 *  Description: Email tester
 *
 */


if (!defined('ABSPATH')) {
    throw new Exception('Constante ' . ABSPATH . ' não definida');
}

define('BASE_PATH', __DIR__);




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
        'Include Text',     // page title
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
