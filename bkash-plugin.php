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
