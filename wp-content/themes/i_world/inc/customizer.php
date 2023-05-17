<?php
/**
 * i-world Theme Customizer
 *
 * @package i-world
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function i_world_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'i_world_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'i_world_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Add the Footer Panel
	 */
	$wp_customize->add_panel (	'footer_navigation_panel',
		array(
			'title'			=>	__(	'Footer Navigation'	),
			'description'	=>	esc_html__(	'Adjust your Footer Navigation Section here' ),
			'priority'		=>	160,
		)	
	);

	/**
	 * Add the Footer Section
	 */
	$wp_customize->add_section (	'footer_section', 
		array(
			'title'			=>	__( 'Footer Section' ),
			'description'	=>	esc_html__( 'This is where the footer section resides' ),
			'panel'			=> 	'footer_navigation_panel',		
		)
	);

	/**
	 * Add the Sales Hotlines Setting
	 */
	$wp_customize->add_setting ( 'sales_hotles_1' );

	/**
	 * Adding the First Sales Hotline Controls
	 */
	$wp_customize->add_control ('sales_hotles_1', 
		array(
			'label'				=>__('Sales Hotline'),
			'description'		=> esc_html__( 'Enter the first hotline'),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input the first sales hotline number'),
			)
		)	
	);

	
	/**
	 * Add the Sales Hotlines Setting
	 */
	$wp_customize->add_setting ( 'sales_hotles_2' );

	/**
	 * Adding the Second Sales Hotline Controls
	 */
	$wp_customize->add_control ('sales_hotles_2', 
		array(
			'label'				=>__('Sales Hotline'),
			'description'		=> esc_html__( 'Enter the second hotline'),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input the second sales hotline number'),
			)
		)	
	);

	
	/**
	 * Add the Sales Hotlines Setting
	 */
	$wp_customize->add_setting ( 'sales_hotles_3' );

	/**
	 * Adding the Third Sales Hotline Controls
	 */
	$wp_customize->add_control ('sales_hotles_3', 
		array(
			'label'				=>__('Sales Hotline'),
			'description'		=> esc_html__( 'Enter the third hotline'),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input the third sales hotline number'),
			)
		)	
	);

	
	/**
	 * Add the Sales Hotlines Setting
	 */
	$wp_customize->add_setting ( 'sales_hotles_4' );

	/**
	 * Adding the Fourth Sales Hotline Controls
	 */
	$wp_customize->add_control ('sales_hotles_4', 
		array(
			'label'				=>__('Sales Hotline'),
			'description'		=> esc_html__( 'Enter the fourth hotline'),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input the fourth sales hotline number'),
			)
		)	
	);

	
	/**
	 * Add the Sales Hotlines Setting
	 */
	$wp_customize->add_setting ( 'sales_hotles_5' );

	/**
	 * Adding the Fifth Sales Hotline Controls
	 */
	$wp_customize->add_control ('sales_hotles_5', 
		array(
			'label'				=>__('Sales Hotline'),
			'description'		=> esc_html__( 'Enter the fifth hotline'),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input the fifth sales hotline number'),
			)
		)	
	);

	/**
	 * Adding the first footer address setting
	 */
	$wp_customize->add_setting( 'footer_address_1' );

	/**
	 * Adding the footer address controls
	 */
	$wp_customize->add_control( 'footer_address_1', 
		array(
			'label'				=>__( 'Footer Address 1' ),
			'description'		=> esc_html__( 'Enter the first office address here' ),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input address' ),
			)
		)
	);

	/**
	 * Adding the second footer address setting
	 */
	$wp_customize->add_setting( 'footer_address_2' );

	/**
	 * Adding the footer address controls
	 */
	$wp_customize->add_control( 'footer_address_2', 
		array(
			'label'				=>__( 'Footer Address 2' ),
			'description'		=> esc_html__( 'Enter the second office address here' ),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input address' ),
			)
		)
	);

	
	/**
	 * Adding the first social media icon settings
	 */
	$wp_customize->add_setting( 'facebook',
		array(
			'default'			=>	'',
			'transport'			=>	'refresh',
			'sanitize_callback'	=>	'wp_filter_nohtml_kses',
		) 
	);

	/**
	 * Adding the first social media icon controls
	 */
	$wp_customize->add_control( 'facebook', 
		array(
			'label'	=> __( 'Facebook Link' ),
			'description'	=>	esc_html__( 'Enter the Facebook link here'),
			'section'	=> 'footer_section',
			'priority'	=> 10,
			'type'	=> 'textarea',
			'capability'	=> 'edit_theme_options',
			'input_attrs'	=> array(
				'class'	=> 'social-media-icons',
				'placeholder'	=> __( 'Enter facebook url here....'),
			)
		)	
	);

	/**
	 * Adding the second social media icon settings
	 */
	$wp_customize->add_setting( 'twitter',
		array(
			'default'			=>	'',
			'transport'			=>	'refresh',
			'sanitize_callback'	=>	'wp_filter_nohtml_kses',
		) 
	);

	/**
	 * Adding the second social media icon controls
	 */
	$wp_customize->add_control( 'twitter', 
		array(
			'label'	=> __( 'Twitter Link' ),
			'description'	=>	esc_html__( 'Enter the Twitter link here'),
			'section'	=> 'footer_section',
			'priority'	=> 10,
			'type'	=> 'textarea',
			'capability'	=> 'edit_theme_options',
			'input_attrs'	=> array(
				'class'	=> 'social-media-icons',
				'placeholder'	=> __( 'Enter twitter url here....'),
			)
		)	
	);

	/**
	 * Adding the third social media icon settings
	 */
	$wp_customize->add_setting( 'linkedin',
		array(
			'default'			=>	'',
			'transport'			=>	'refresh',
			'sanitize_callback'	=>	'wp_filter_nohtml_kses',
		) 
	);

	/**
	 * Adding the third social media icon controls
	 */
	$wp_customize->add_control( 'linkedin', 
		array(
			'label'	=> __( 'LinkedIn Link' ),
			'description'	=>	esc_html__( 'Enter the LinkedIn link here'),
			'section'	=> 'footer_section',
			'priority'	=> 10,
			'type'	=> 'textarea',
			'capability'	=> 'edit_theme_options',
			'input_attrs'	=> array(
				'class'	=> 'social-media-icons',
				'placeholder'	=> __( 'Enter linkedin url here....'),
			)
		)	
	);
	
}
add_action( 'customize_register', 'i_world_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function i_world_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function i_world_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function i_world_customize_preview_js() {
	wp_enqueue_script( 'i_world-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'i_world_customize_preview_js' );
