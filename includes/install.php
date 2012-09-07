<?php

function vit_activate() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
register_activation_hook( VERSIONIT_PLUGIN_FILE, 'vit_activate' );