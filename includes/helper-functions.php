<?php

// Check to make sure we're on Apache
if (stristr($_SERVER['SERVER_SOFTWARE'], 'apache') || stristr($_SERVER['SERVER_SOFTWARE'], 'litespeed') !== false)  {

	/**
	 * Show admin notice if .htaccess isn't writable
	 * @return void
	 *
	 * @since  0.1
	 */
	function vit_htaccess_writable() {
		if (!is_writable(get_home_path() . '.htaccess')) {
			if (current_user_can('administrator')) {
				add_action('admin_notices', create_function('', "echo '<div class=\"error\"><p>" . sprintf(__('Please make sure your <a href="%s">.htaccess</a> file is writable ', 'vit'), admin_url('options-permalink.php')) . "</p></div>';"));
			}
		}
	}
	add_action('admin_init', 'vit_htaccess_writable');

	/**
	 * Add rewrite rules for auto-versioning CSS/JS files
	 * @return void
	 *
	 * @since  0.1
	 */
	function vit_add_rewrites() {
		global $wp_rewrite;
		$vit_new_non_wp_rules = array(
			'(.*)\.[\d]{10}\.(css|js)$' => '$1.$2'
		);
		$wp_rewrite->non_wp_rules = $vit_new_non_wp_rules + $wp_rewrite->non_wp_rules;
	}

	add_action('generate_rewrite_rules', 'vit_add_rewrites');
}