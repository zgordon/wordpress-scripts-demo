<?php

namespace Gutenberg_Course\Example_Blocks;

add_action( 'init', __NAMESPACE__ . '\register_scripts' );
/**
 * Enqueue block editor only JavaScript and CSS.
 */
function register_scripts() {
	// Make paths variables so we don't write em twice ;)
	$block_path = '/build/index.js';

	$js_dependencies = [ 'wp-plugins', 'wp-element', 'wp-edit-post', 'wp-i18n', 'wp-api-request', 'wp-data', 'wp-hooks', 'wp-plugins', 'wp-components', 'wp-blocks', 'wp-editor', 'wp-compose' ];


	// Enqueue the bundled block JS file
	wp_register_script(
		'jsforwp-blocks-js',
		_get_plugin_url() . $block_path,
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor' ],
		filemtime( _get_plugin_directory() . $block_path )
	);

	// Enqueue optional editor only styles
//	wp_register_style(
//		'jsforwp-blocks-editor-css',
//		_get_plugin_url() . $editor_style_path,
//		[ ],
//		filemtime( _get_plugin_directory() . $style_path )
//	);

}