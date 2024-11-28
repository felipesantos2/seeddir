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


add_action('admin_menu', 'seeddir_add_admin_menu');

function seeddir_add_admin_menu()
{
    add_menu_page(
        'Include Text',     // page title
        'Enviar Emails',     // menu title
        'manage_options',   // capability
        'include-text',     // menu slug
        function () {
            
            global $title;

            echo '<div class="wrap">';

                echo "<h1>$title</h1>";

            echo '</div>';
        } // callback function
    );
}
