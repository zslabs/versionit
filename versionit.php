<?php

/*
Plugin Name: VersionIt
Plugin URI: http://yellowhousedesign.com
Description: Removes default version query strings from CSS/JS resources and appends on the modified time to the filename
Version: 0.1
Author: Yellow House Design
Author URI: http://yellowhousedesign.com
License: GPL2
*/

// Global Variables
$versionit_prefix = 'vit';
$versionit_name = 'VersionIt';

// plugin folder url
if(!defined('VERSIONIT_BASE_URL')) {
	define('VERSIONIT_BASE_URL', plugin_dir_url(__FILE__));
}
// plugin folder path
if(!defined('VERSIONIT_BASE_DIR')) {
	define('VERSIONIT_BASE_DIR', plugin_dir_path( __FILE__ ));
}
// plugin root file
if(!defined('VERSIONIT_PLUGIN_FILE')) {
	define('VERSIONIT_PLUGIN_FILE', __FILE__);
}

// Includes
include_once(VERSIONIT_BASE_DIR . 'includes/install.php'); // Sets default plugin settings on activation

// Add rewrite rules for auto-versioning CSS/JS files
function ftc_add_rewrites() {
	global $wp_rewrite;
	$ftc_new_non_wp_rules = array(
		'(.*)\.[\d]{10}\.(css|js)$' => '$1.$2'
	);
	$wp_rewrite->non_wp_rules = $ftc_new_non_wp_rules + $wp_rewrite->non_wp_rules;
}

add_action('generate_rewrite_rules', 'ftc_add_rewrites');

include_once(VERSIONIT_BASE_DIR . 'includes/auto-versioning.php'); // Register
AutoVersioning::apply_to_all_dependencies(true);