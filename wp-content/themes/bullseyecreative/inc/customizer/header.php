<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses bc_header_style()
 */
 function bc_custom_header_setup() {
 	add_theme_support( 'custom-header', apply_filters( 'bc_custom_header_args', array(
 		'default-image'          => '',
 		// 'default-text-color'     => '000000',
 		'width'                  => 1340,
 		'height'                 => 480,
 		'flex-height'            => false,
 		'random-default'         => true,
 		'uploads'     					 => true,
 		// 'wp-head-callback'       => 'bc_header_style',
 		// 'video' 								 => true, // comment to remove video
 	) ) );

 }
 // Uncomment to allow header images and/or videos in the customizer
 // add_action( 'after_setup_theme', 'bc_custom_header_setup' );



 /**
  * Modify settings in the customizer Header Image panel
  */

 function bc_customize_header_image_title( $wp_customize ) {

    //All our sections, settings, and controls will be added here
 	 $wp_customize->add_section( 'header_image' , array(
     'title'      => __( 'Images', 'bc' ),
 	) );

 	$wp_customize->add_setting( 'header_instructions' , array(
 		'default'     => '',
 		'transport'   => 'refresh',
 	) );

 	$wp_customize->add_setting( 'header_instructions_2' , array(
 		'default'     => '',
 		'transport'   => 'refresh',
 	) );

 	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_instructions_2', array(
 		'label'       => '',
 		'section'    	=> 'header_image',
 		'settings'   	=> 'header_instructions_2',
 		'description' => "<h2>Custom Images</h2>",
 		'type' => 'hidden',
 	) ) );


 	$wp_customize->add_setting( 'home_header_image' , array(
 		'default'     => '',
 		'transport'   => 'refresh',
 	) );

 	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'home_header_image', array(
 		'label'       => 'Homepage Featured Image',
 		'section'    	=> 'header_image',
 		'settings'   	=> 'home_header_image',
 		'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
 		'flex_height' => true, // Require the resulting image to be exactly as tall as the height attribute (default).
 		'width'       => 1340,
 		'height'      => 480,
 		'description' => "Override the home page's featured image with a custom cropped header. Minimum 1340 x 480px"
 	) ) );

 	// Add the main colors panel
 		$wp_customize->add_panel( 'default_property_image', array(
 	 'priority'       => 10,
 		'capability'     => 'edit_theme_options',
 		'theme_supports' => '',
 		'title'          => __('404 Panel'),
 		'description'    => __('Text header colors'),
 	) );


 	$wp_customize->add_setting( 'default_property_image' , array(
 		'default'     => '',
 		'transport'   => 'refresh',
 	) );

 	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'default_property_image', array(
 		'label'       => 'Example Default Image',
 		'section'    	=> 'header_image',
 		'settings'   	=> 'default_property_image',
 		'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
 		'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
 		'width'       => 600,
 		'height'      => 500,
 		'description' => "Example. Minimum 600 x 500px"
 	) ) );


 }
 add_action( 'customize_register', 'bc_customize_header_image_title' );

if ( ! function_exists( 'bc_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see bc_custom_header_setup().
	 */
	function bc_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;


/**
 * Replace front page featured image metabox with link to customizer
 */
function bc_front_page_header_metaboxes(){
	if ('page' == get_current_screen()->id) {
		global $post;
		if (get_option( 'page_on_front' ) == $post->ID)  {
				remove_meta_box( 'postimagediv','page','side' );
				add_meta_box(
					'front_page_header_image',
					'Header Image',
					'bc_add_front_page_header_image_html',
					'page',
					'side'
				);
		}
	}
}
add_action( 'do_meta_boxes', 'bc_front_page_header_metaboxes' );

/**
 * Content for the featured image metabox replacement
 */
function bc_add_front_page_header_image_html($post) {
  $query['autofocus[section]'] = 'header_image';
  $panel_link = add_query_arg( $query, admin_url( 'customize.php' ) );
	echo '<span><a href="' . admin_url( 'customize.php' ) . '?autofocus[section]=header_image'  . '">Edit the front page header in the theme customizer</a></span>';
}
