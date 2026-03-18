<?php

add_action('after_setup_theme', function () {

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('woocommerce');

  register_nav_menus([
    'primary' => 'Primary Menu',
    'quick-links' => 'Footer Quick Links',
    'legal' => 'Footer Legal Links',
  ]);

});


/**
 * Register all custom blocks from /blocks.
 */
function wdc_register_theme_blocks() {
	$blocks_dir = get_theme_file_path( 'blocks' );

	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}

	$allowed_blocks = array();

	$entries = scandir( $blocks_dir );

	if ( ! $entries ) {
		return;
	}

	foreach ( $entries as $entry ) {
		if ( '.' === $entry || '..' === $entry ) {
			continue;
		}

		$block_path = $blocks_dir . '/' . $entry;

		if ( ! is_dir( $block_path ) ) {
			continue;
		}

		$block_json = $block_path . '/block.json';

		if ( ! file_exists( $block_json ) ) {
			continue;
		}

		$registered = register_block_type_from_metadata( $block_path );

		if ( $registered && ! empty( $registered->name ) ) {
			$allowed_blocks[] = $registered->name;
		}
	}

	$GLOBALS['wdc_allowed_blocks'] = $allowed_blocks;
}
add_action( 'init', 'wdc_register_theme_blocks' );

/**
 * Allow only blocks registered from /blocks.
 */
function wdc_allowed_block_types( $allowed_block_types, $block_editor_context ) {
	$theme_blocks = isset( $GLOBALS['wdc_allowed_blocks'] ) && is_array( $GLOBALS['wdc_allowed_blocks'] )
		? $GLOBALS['wdc_allowed_blocks']
		: array();

	return $theme_blocks;
}
add_filter( 'allowed_block_types_all', 'wdc_allowed_block_types', 10, 2 );

/**
 * Register custom inserter category used by theme blocks.
 */
function wdc_register_block_category( $categories ) {
	$categories[] = array(
		'slug'  => 'wdc-blocks',
		'title' => __( 'WDC Blocks', 'weedram-block' ),
	);

	return $categories;
}
add_filter( 'block_categories_all', 'wdc_register_block_category', 10, 1 );
