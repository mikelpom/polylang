<?php
/**
 * @package Polylang-Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Don't access directly.
};

if ( $polylang instanceof PLL_Admin && $polylang->model->get_languages_list() && pll_use_block_editor_plugin() ) {
	$polylang->block_editor_plugin = new PLL_Block_Editor_Plugin( $polylang );
}
if ( $polylang->model->get_languages_list() ) {
	$polylang->switcher_block = new PLL_Block_Editor_Switcher_Block( $polylang );
}
