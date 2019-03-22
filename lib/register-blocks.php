<?php
namespace Adv_Gutenberg_Course\Register_Blocks;

add_action( 'init', __NAMESPACE__ . '\register_blocks', 40 );
/**
 * Enqueue block editor only JavaScript and CSS.
 */
function register_blocks() {
    // Fail if block editor is not supported
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
    // List all of the blocks for your plugin
    $blocks = [
        "jsforwpadvgb/shoutout",
    ];
    // Register each block with same CSS and JS
    foreach( $blocks as $block ) {

        register_block_type( $block, [
            'editor_script' => 'jsforwp-blocks-js',
         ] );
    }
}