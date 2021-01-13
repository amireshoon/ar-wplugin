<?php

if (!is_admin() || !defined( 'ABSPATH' ))
    exit;

function ar_main_menu() {
    add_menu_page(
        __( 'Domains', AR_TEXT_DOMAIN ),
        __( 'ArvanCloud CDN', AR_TEXT_DOMAIN ),
        'manage_options',
        'arvancloud',
        'domains_menu',
        'dashicons-cloud',
        6
    );
    add_submenu_page( 
        'arvancloud',
        __( 'Settings', AR_TEXT_DOMAIN),
        __( 'Settings', AR_TEXT_DOMAIN),
        'manage_options',
        'arvancloud-settings',
        'settings_menu'
    );
}

add_action( 'admin_menu', 'ar_main_menu' );

function domains_menu() {
    require_once('domains.php');
}

function settings_menu() {
    require_once('settings.php');
}