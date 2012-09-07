<?php

/*
Plugin Name: VersionIt
Plugin URI: http://zslabs.com
Description: Removes default version query strings from CSS/JS resources, appends the modified time to the filename, and creates the necessary .htaccess rewrites.
Version: 0.1
Author: ZS Labs
Author URI: http://zslabs.com
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
include_once(VERSIONIT_BASE_DIR . 'includes/helper-functions.php'); // Helper functions to initiate .htaccess rewrites
include_once(VERSIONIT_BASE_DIR . 'includes/auto-versioning.php'); // Register

// Run Auto Versioning class
AutoVersioning::apply_to_all_dependencies(true);