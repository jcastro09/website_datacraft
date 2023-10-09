<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'DataCraft' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Source Type', 'DataCraft' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'DataCraft' ),
				'e' => esc_html__( 'Elementor', 'DataCraft' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'DataCraft' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		
		array(
			'id'      => 'facebook_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Facebook Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Facebook', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'twitter_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Twitter Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Twitter', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'linkedin_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Linkedin Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Linkedin', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'pinterest_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Pinterest Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Pinterest', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'reddit_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Reddit Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Reddit', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'tumblr_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Tumblr Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Tumblr', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'      => 'digg_sharing',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Digg Post Share', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show Post Share to Digg', 'DataCraft' ),
			'default' => false,
		),
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
	),
);





