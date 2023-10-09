<?php
/**
 * Theme config file.
 *
 * @package DataCraft
 * @author  TemplatePath
 * @version 1.0
 * changed
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['DataCraft_main_header'][] 	= array( 'DataCraft_preloader', 98 );
$config['default']['DataCraft_main_header'][] 	= array( 'DataCraft_main_header_area', 99 );

$config['default']['DataCraft_main_footer'][] 	= array( 'DataCraft_preloader', 98 );
$config['default']['DataCraft_main_footer'][] 	= array( 'DataCraft_main_footer_area', 99 );

$config['default']['DataCraft_sidebar'][] 	    = array( 'DataCraft_sidebar', 99 );

$config['default']['DataCraft_banner'][] 	    = array( 'DataCraft_banner', 99 );


return $config;
