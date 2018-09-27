<?php
/*
Plugin Name: Geldum - WooCommerce Gateway
Description: Extends WooCommerce by Adding the Geldum Gateway
Version: 2.0
Author: Spnote
*/

// This code isn't for Dark Net Markets, please report them to Authority!
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Include our Gateway Class and register Payment Gateway with WooCommerce
add_action('plugins_loaded', 'geldum_init', 0);
function geldum_init()
{
    /* If the class doesn't exist (== WooCommerce isn't installed), return NULL */
    if (!class_exists('WC_Payment_Gateway')) return;


    /* If we made it this far, then include our Gateway Class */
    include_once('include/geldum_payments.php');
    require_once('library.php');

    // Lets add it too WooCommerce
    add_filter('woocommerce_payment_gateways', 'geldum_gateway');
    function geldum_gateway($methods)
    {
        $methods[] = 'Geldum_Gateway';
        return $methods;
    }
}

/*
 * Add custom link
 * The url will be http://yourworpress/wp-admin/admin.php?=wc-settings&tab=checkout
 */
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'geldum_payment');
function geldum_payment($links)
{
    $plugin_links = array(
        '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout') . '">' . __('Settings', 'geldum_payment') . '</a>',
    );

    return array_merge($plugin_links, $links);
}

add_action('admin_menu', 'geldum_create_menu');
function geldum_create_menu()
{
    add_menu_page(
        __('Geldum', 'textdomain'),
        'Geldum',
        'manage_options',
        'admin.php?page=wc-settings&tab=checkout&section=geldum_gateway',
        '',
        plugins_url('geldum/assets/geldum_icon.png'),
        56 // Position on menu, woocommerce has 55.5, products has 55.6

    );
}
