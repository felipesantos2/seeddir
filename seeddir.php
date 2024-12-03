<?php


/**
 *
 *  @author            Felipe Pinheiro
 *  @copyright         2024 Felipe Pinheiro
 *  @license           https://unlicense.org
 *
 *
 *  Plugin Name: Seeddir - Email Tester and post type order
 *  Author: Felipe Pinheiro
 *  Author URI: https://github.com/felipesantos2
 *  Version: 1.0.0
 *  Licence:
 *  Text Domain: seeddir
 *
 *  Description: Email tester and post yype order
 *
 */


if (!defined('ABSPATH')) {
    throw new Exception('Constante ' . ABSPATH . ' não definida');
}


define('APP_IS_ACTIVE', true);

define('BASE_PATH', __DIR__);


if (APP_IS_ACTIVE) {
    require __DIR__ . '/app.php';
}
