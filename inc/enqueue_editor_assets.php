<?php
/**
 * Enqueue Assets in Editor
 * link: https://github.com/imranhsayed/tailwind-wordpress-plugin-example/blob/master/inc/class-enqueue-assets.php
 * @package Boilerplate
 */
if ( ! defined( 'ABSPATH' ) ) exit;

class Enqueue_Assets {

	/**
	 * Constructor.
	 */
	public function __construct() {

		/**
		 * Actions.
		 */
		add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	/**
	 * Enqueue editor scripts & styles.
	 *
	 */
	public function enqueue_editor_assets() {

		// Theme Gutenberg blocks CSS.
		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library'
		];

		wp_enqueue_style(
			'hrd-editor-css',
			get_theme_file_uri('/dist/editor.css'),
			$css_dependencies,
			filemtime(get_stylesheet_directory() . '/dist/editor.css'),
			false
		);

		// Theme Gutenberg blocks JS.
		$js_dependencies = [
			'wp-block-editor',
			'wp-blocks',
			'wp-editor',
			'wp-components',
			'wp-compose',
			'wp-data',
			'wp-element',
			'wp-hooks',
			'wp-i18n',
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		];

		wp_enqueue_script(
			'hrd-editor-js',
			get_theme_file_uri('/dist/editor.js'),
			$js_dependencies,
			'1.0',
			true
		);

	}
}

new Enqueue_Assets();