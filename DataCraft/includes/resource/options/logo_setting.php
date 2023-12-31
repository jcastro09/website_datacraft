<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'DataCraft' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'DataCraft' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'DataCraft' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/fav-icon/icon.png' ),
		),
		array(
            'id' => 'dark_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Dark Color Logo', 'DataCraft'),
            'default' => true,
        ),
		array(
			'id'       => 'dark_color_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Dark Color Logo Image', 'DataCraft' ),
			'subtitle' => esc_html__( 'Insert site Dark Color logo image', 'DataCraft' ),
			'required' => array( 'dark_logo_show', '=', true ),
		),
		array(
			'id'       => 'dark_color_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Dark Color Logo Dimentions', 'DataCraft' ),
			'subtitle' => esc_html__( 'Select Dark Color Logo Dimentions', 'DataCraft' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'dark_logo_show', '=', true ),
		),
		array(
            'id' => 'light_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Light Color Logo', 'DataCraft'),
            'default' => true,
        ),
		array(
			'id'       => 'light_color_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Light Color Logo Image', 'DataCraft' ),
			'subtitle' => esc_html__( 'Insert site Light Color logo image', 'DataCraft' ),
			'required' => array( 'light_logo_show', '=', true ),
		),
		array(
			'id'       => 'light_color_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Light Color Logo Dimentions', 'DataCraft' ),
			'subtitle' => esc_html__( 'Select Light Color Logo Dimentions', 'DataCraft' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'light_logo_show', '=', true ),
		),
		array(
            'id' => 'color_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Color Logo', 'DataCraft'),
            'default' => true,
        ),
		array(
			'id'       => 'color_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Color Logo Image', 'DataCraft' ),
			'subtitle' => esc_html__( 'Insert site Color logo image', 'DataCraft' ),
			'required' => array( 'color_logo_show', '=', true ),
		),
		array(
			'id'       => 'color_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Color Logo Dimentions', 'DataCraft' ),
			'subtitle' => esc_html__( 'Select Color Logo Dimentions', 'DataCraft' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'color_logo_show', '=', true ),
		),
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);
