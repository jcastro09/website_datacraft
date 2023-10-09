<?php

define( 'DataCraft_ROOT', get_template_directory() . '/' );

require_once get_template_directory() . '/includes/functions/functions.php';
include_once get_template_directory() . '/includes/classes/base.php';
include_once get_template_directory() . '/includes/classes/dotnotation.php';
include_once get_template_directory() . '/includes/classes/header-enqueue.php';
include_once get_template_directory() . '/includes/classes/options.php';
include_once get_template_directory() . '/includes/classes/ajax.php';
include_once get_template_directory() . '/includes/classes/common.php';
include_once get_template_directory() . '/includes/classes/bootstrap_walker.php';
include_once get_template_directory() . '/includes/library/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/includes/library/hook.php';

// Merlin demo import.
require_once get_template_directory() . '/demo-import/class-merlin.php';
require_once get_template_directory() . '/demo-import/merlin-config.php';
require_once get_template_directory() . '/demo-import/merlin-filters.php';

add_action( 'after_setup_theme', 'DataCraft_wp_load', 5 );

function DataCraft_wp_load() {

	defined( 'DataCraft_URL' ) or define( 'DataCraft_URL', get_template_directory_uri() . '/' );
	define(  'DataCraft_KEY','!@#DataCraft');
	define(  'DataCraft_URI', get_template_directory_uri() . '/');

	if ( ! defined( 'DataCraft_NONCE' ) ) {
		define( 'DataCraft_NONCE', 'DataCraft_wp_theme' );
	}

	( new \DataCraft\Includes\Classes\Base )->loadDefaults();
	( new \DataCraft\Includes\Classes\Ajax )->actions();

}
add_action( 'init', 'DataCraft_bunch_theme_init');
function DataCraft_bunch_theme_init()
{
	$bunch_exlude_hooks = include_once get_template_directory(). '/includes/resource/remove_action.php';
	foreach( $bunch_exlude_hooks as $k => $v )
	{
		foreach( $v as $value )
		remove_action( $k, $value[0], $value[1] );
	}

}
