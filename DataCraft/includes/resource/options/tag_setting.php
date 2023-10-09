<?php

return array(
	'title'      => esc_html__( 'Tag Page Settings', 'DataCraft' ),
	'id'         => 'tag_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'tag_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Tag Source Type', 'DataCraft' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'DataCraft' ),
				'e' => esc_html__( 'Elementor', 'DataCraft' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'tag_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'DataCraft' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'tag_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'tag_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Tag Default', 'DataCraft' ),
			'indent'   => true,
			'required' => [ 'tag_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'tag_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'DataCraft' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'DataCraft' ),
			'default' => true,
		),
		array(
			'id'       => 'tag_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'DataCraft' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'DataCraft' ),
			'required' => array( 'tag_page_banner', '=', true ),
		),
		array(
			'id'       => 'tag_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'DataCraft' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'DataCraft' ),
			'default'  => '',
			'required' => array( 'tag_page_banner', '=', true ),
		),

		array(
			'id'       => 'tag_sidebar_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout', 'DataCraft' ),
			'subtitle' => esc_html__( 'Select main content and sidebar alignment.', 'DataCraft' ),
			'options'  => array(

				'left'  => array(
					'alt' => esc_html__( '2 Column Left', 'DataCraft' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cl.png',
				),
				'full'  => array(
					'alt' => esc_html__( '1 Column', 'DataCraft' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/1col.png',
				),
				'right' => array(
					'alt' => esc_html__( '2 Column Right', 'DataCraft' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cr.png',
				),
			),

			'default' => 'right',
		),

		array(
			'id'       => 'tag_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'DataCraft' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'DataCraft' ),
			'required' => array(
				array( 'tag_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => DataCraft_get_sidebars(),
		),
		array(
			'id'       => 'tag_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'tag_source_type', '=', 'd' ],
		),
	),
);