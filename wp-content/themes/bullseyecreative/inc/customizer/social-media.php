<?php

function bc_custom_social_media_register( $wp_customize ) {

  $wp_customize->add_section( 'social_media' , array(
      'title'      => 'Social Media',
      'priority'   => 27,
  ) );

  $wp_customize->add_setting( 'bc_facebook' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_facebook', array(
  	'label'        => 'Facebook',
  	'section'    => 'social_media',
  	'settings'   => 'bc_facebook',
  ) ) );

  $wp_customize->add_setting( 'bc_twitter' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_twitter', array(
  	'label'        => 'Twitter',
  	'section'    => 'social_media',
  	'settings'   => 'bc_twitter',
  ) ) );

  $wp_customize->add_setting( 'bc_youtube' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_youtube', array(
  	'label'        => 'Youtube',
  	'section'    => 'social_media',
  	'settings'   => 'bc_youtube',
  ) ) );

  $wp_customize->add_setting( 'bc_google_plus' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_google_plus', array(
  	'label'        => 'Google +',
  	'section'    => 'social_media',
  	'settings'   => 'bc_google_plus',
  ) ) );

  $wp_customize->add_setting( 'bc_instagram' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_instagram', array(
  	'label'        => 'Instagram',
  	'section'    => 'social_media',
  	'settings'   => 'bc_instagram',
  ) ) );

  $wp_customize->add_setting( 'bc_pinterest' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_pinterest', array(
  	'label'        => 'Pinterest',
  	'section'    => 'social_media',
  	'settings'   => 'bc_pinterest',
  ) ) );

  $wp_customize->add_setting( 'bc_linkedin' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_linkedin', array(
  	'label'        => 'LinkedIn',
  	'section'    => 'social_media',
  	'settings'   => 'bc_linkedin',
  ) ) );

  $wp_customize->add_setting( 'bc_yelp' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_yelp', array(
  	'label'        => 'Yelp',
  	'section'    => 'social_media',
  	'settings'   => 'bc_yelp',
  ) ) );

  $wp_customize->add_setting( 'bc_tumblr' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bc_tumblr', array(
  	'label'        => 'Tumblr',
  	'section'    => 'social_media',
  	'settings'   => 'bc_tumblr',
  ) ) );

	$wp_customize->add_panel( 'social_media_panel', array(
	 'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Social Media'),
		'description'    => __('Set social media for the blog.'),
	) );

}
add_action( 'customize_register', 'bc_custom_social_media_register' );

function get_social_media_links() {
  
}
