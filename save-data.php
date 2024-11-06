<?php

/**
 * Plugin Name: Save Data
 *
 * Description: A WordPress plugin that allows admins to input data through the admin panel, save it into the wp_options table as JSON, and provide it to JavaScript for frontend usage.
 *
 * Version: 1.0.0
 *
 * Author: hassan Ali Askari
 * Author URI: https://t.me/hassan7303
 * Plugin URI: https://github.com/hassan7303
 *
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 *
 * Email: hassanali7303@gmail.com
 * Domain Path: https://hsnali.ir
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

/**
 * Adds menu items to the WordPress admin dashboard.
 *
 * This function creates two menu items in the WordPress admin panel:
 * 1. "Save Data" - The main settings page where users can enter data.
 * 2. "List of Data" - A submenu that could later be used to display stored data (currently not implemented).
 *
 * @return void
 */
function animation_shortcodes_menu(): void
{
    add_menu_page(
        'Save Data',           // Page title
        'Save Data',           // Menu title
        'manage_options',      // Capability required to access
        'save_data',           // Menu slug
        'save_data_page'       // Function to display the settings page content
    );

    add_submenu_page(
        'save_data',           // Parent slug
        'List of Data',        // Page title
        'Data List',           // Menu title
        'manage_options',      // Capability required to access
        'save_data_list',      // Menu slug
        'save_data_list_page'  // Function to display the data list page (optional)
    );
}

add_action('admin_menu', 'animation_shortcodes_menu');

/**
 * Displays the admin settings page for entering data.
 *
 * This function generates a form that allows users to enter various data fields such as
 * title, message, options (including title, link, and color), and more. The form is part of
 * the WordPress settings API, and the data will be saved into the wp_options table.
 *
 * @return void
 */
function save_data_page()
{
    ?>
    <div class="wrap">
        <h1>Save Data Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('save_data_options_group');
            do_settings_sections('save_data');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Registers settings fields and sections.
 *
 * This function initializes multiple fields where the admin can input complex data like
 * title, message, options (title, link, color), and duration and time.
 * These values are saved to the wp_options table under the 'save_data_options' key.
 *
 * @return void
 */
function save_data_settings_init()
{
    register_setting('save_data_options_group', 'save_data_options');

    add_settings_section(
        'save_data_section',
        'Data Configuration',
        '',
        'save_data'
    );

    // Title field
    add_settings_field(
        'save_data_title',
        'Title',
        'save_data_title_callback',
        'save_data',
        'save_data_section'
    );

    // Message field
    add_settings_field(
        'save_data_message',
        'Message',
        'save_data_message_callback',
        'save_data',
        'save_data_section'
    );

    // Option Title field
    add_settings_field(
        'save_data_option_title',
        'Option Title',
        'save_data_option_title_callback',
        'save_data',
        'save_data_section'
    );

    // Option Link field
    add_settings_field(
        'save_data_option_link',
        'Option Link',
        'save_data_option_link_callback',
        'save_data',
        'save_data_section'
    );

    // Option Color field
    add_settings_field(
        'save_data_option_color',
        'Option Color',
        'save_data_option_color_callback',
        'save_data',
        'save_data_section'
    );

    // Link field
    add_settings_field(
        'save_data_link',
        'Link',
        'save_data_link_callback',
        'save_data',
        'save_data_section'
    );

    // Color field
    add_settings_field(
        'save_data_color',
        'Color',
        'save_data_color_callback',
        'save_data',
        'save_data_section'
    );

    // Duration field
    add_settings_field(
        'save_data_duration',
        'Duration',
        'save_data_duration_callback',
        'save_data',
        'save_data_section'
    );

    // Time field
    add_settings_field(
        'save_data_time',
        'Time',
        'save_data_time_callback',
        'save_data',
        'save_data_section'
    );
}

add_action('admin_init', 'save_data_settings_init');

// Callbacks for each setting field

function save_data_title_callback()
{
    $options = get_option('save_data_options');
    $title = isset($options['title']) ? $options['title'] : '';
    echo '<input type="text" name="save_data_options[title]" value="' . esc_attr($title) . '" />';
}

function save_data_message_callback()
{
    $options = get_option('save_data_options');
    $message = isset($options['message']) ? $options['message'] : '';
    echo '<input type="text" name="save_data_options[message]" value="' . esc_attr($message) . '" />';
}

function save_data_option_title_callback()
{
    $options = get_option('save_data_options');
    $option_title = isset($options['option']['title']) ? $options['option']['title'] : '';
    echo '<input type="text" name="save_data_options[option][title]" value="' . esc_attr($option_title) . '" />';
}

function save_data_option_link_callback()
{
    $options = get_option('save_data_options');
    $option_link = isset($options['option']['link']) ? $options['option']['link'] : '';
    echo '<input type="url" name="save_data_options[option][link]" value="' . esc_attr($option_link) . '" />';
}

function save_data_option_color_callback()
{
    $options = get_option('save_data_options');
    $option_color = isset($options['option']['color']) ? $options['option']['color'] : '';
    echo '<input type="text" name="save_data_options[option][color]" value="' . esc_attr($option_color) . '" />';
}

function save_data_link_callback()
{
    $options = get_option('save_data_options');
    $link = isset($options['link']) ? $options['link'] : '';
    echo '<input type="url" name="save_data_options[link]" value="' . esc_attr($link) . '" />';
}

function save_data_color_callback()
{
    $options = get_option('save_data_options');
    $color = isset($options['color']) ? $options['color'] : '';
    echo '<input type="text" name="save_data_options[color]" value="' . esc_attr($color) . '" />';
}

function save_data_duration_callback()
{
    $options = get_option('save_data_options');
    $duration = isset($options['duration']) ? $options['duration'] : '';
    echo '<input type="number" name="save_data_options[duration]" value="' . esc_attr($duration) . '" />';
}

function save_data_time_callback()
{
    $options = get_option('save_data_options');
    $time = isset($options['time']) ? $options['time'] : '';
    echo '<input type="number" name="save_data_options[time]" value="' . esc_attr($time) . '" />';
}

/**
 * Passes stored data to JavaScript.
 *
 * This function retrieves data from the wp_options table, prepares it as an
 * array, and uses `wp_localize_script` to pass the data to a JavaScript file
 * that will handle it on the frontend.
 *
 * @return void
 */
function pass_data_to_js()
{
    $options = get_option('save_data_options', array());
    wp_enqueue_script('custom-script', get_site_url() . '/react/index.js', array('jquery'), null, true);

    wp_localize_script('custom-script', 'saveData', $options);
}

add_action('wp_enqueue_scripts', 'pass_data_to_js');
