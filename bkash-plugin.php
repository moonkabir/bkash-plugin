<?php
/*
Plugin Name: Bkash Plugin
Plugin URI: https://github.com/moonkabir/bkash-plugin
Description: Woocommerece payment Gateway Bkash
Version: 1.0
Author: Moon Kabir
Author URI: https://moonkabir.xyz
License: GPLv2 or later
Text Domain: bkash-plugin
Domain Path: /languages/
*/

function bkashp_load_textdomain()
{
    load_plugin_textdomain('bkash-plugin', false, dirname(__FILE__) . "/languages");
}
add_action('plugins_loaded', 'bkashp_load_textdomain');



add_action('admin_menu', 'bp_admin_menu');

function bp_admin_menu()
{
    //parameters details
    //add_management_page( $page_title, $menu_title, $capability,$menu_slug, $function );
    //add a new setting page udner setting menu
    //add_management_page('Footer Text', 'Footer Text', 'manage_options',__FILE__, //'footer_text_admin_page');

    add_menu_page(
        __('Bkash Plugin title', 'bkash-plugin'),
        __('Bkash Plugin', 'bkash-plugin'),
        'manage_options',
        'bkash_plugin_page',
        'bp_admin_page_function'
    );
    add_submenu_page(
        'bkash_plugin_page',
        __('Bkash Plugin submenu', 'bkash-plugin'),
        __('Bkash Plugin All Entries', 'bkash-plugin'),
        'manage_options',
        'bp-all-entries',
        'bp_all_entries_function'
    );
    add_submenu_page(
        'bkash_plugin_page',
        __('Bkash Plugin submenu', 'bkash-plugin'),
        __('Bkash Plugin Settings', 'bkash-plugin'),
        'manage_options',
        'bp_setting_page',
        'bp_settings_function'
    );
}

function bp_admin_page_function()
{
    echo 'this is where we will edit the variable';
}

function bp_all_entries_function()
{
    include_once('bkash_all_entries_page.php');
}

function bp_settings_function()
{
    include_once('bkash_settings_page.php');
}




// displaying content
// function your_function()
// {
//     echo "<div style='color: red;
//     font-size: 30px;
//     margin: 20px;'>" . get_option('footer_text') . "</div>";
// }
// add_action('wp_footer', 'your_function');
