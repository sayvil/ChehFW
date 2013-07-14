<?php

function energy_scripts_basic() {  
	global $options_data;
	/* ------------------------------------------------------------------------ */
	/* Register Scripts */
	/* ------------------------------------------------------------------------ */
	wp_register_script('easing', get_template_directory_uri() . '/framework/js/easing.js', 'jquery', '1.3');
	wp_register_script('superfish', get_template_directory_uri() . '/framework/js/superfish.js', 'jquery', '1.4', TRUE);
	wp_register_script('mobilemenu', get_template_directory_uri() . '/framework/js/mobilemenu.js', 'jquery', '1.0', TRUE);
	wp_register_script('prettyPhoto', get_template_directory_uri() . '/framework/js/prettyPhoto.js', 'jquery', '3.1', TRUE);
	wp_register_script('flexslider', get_template_directory_uri() . '/framework/js/flexslider.js', 'jquery', '2.0', TRUE);
	wp_register_script('bootstrap', get_template_directory_uri() . '/framework/js/bootstrap.js', 'jquery', '1.0', TRUE);
	wp_register_script('fitvids', get_template_directory_uri() . '/framework/js/fitvids.js', 'jquery', '1.0');
	wp_register_script('isotope', get_template_directory_uri() . '/framework/js/isotope.js', 'jquery', '1.5', TRUE);
	wp_register_script('twitter', get_template_directory_uri() . '/framework/js/twitter.js', 'jquery', '1.0', TRUE);
	wp_register_script('functions', get_template_directory_uri() . '/framework/js/functions.js', 'jquery', '1.0', TRUE);
	wp_register_script('shortcodes', get_template_directory_uri() . '/framework/js/shortcodes.js', 'jquery', '1.0', TRUE);

	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Scripts */
	/* ------------------------------------------------------------------------ */
	wp_enqueue_script('jquery');
	wp_enqueue_script('easing');
	wp_enqueue_script('fitvids');
	wp_enqueue_script('shortcodes');
	wp_enqueue_script('bootstrap');
  	wp_enqueue_script('superfish');
  	wp_enqueue_script('mobilemenu');
  	wp_enqueue_script('flexslider');
  	
	if(is_page_template('page-portfolio-col1.php') || is_page_template('page-portfolio-col2.php') || is_page_template('page-portfolio-col3.php') || is_page_template('page-portfolio-col4.php')|| is_page_template('page-portfolio-hexagon.php')) {
		wp_enqueue_script('isotope');
	}
	
	if(is_singular('portfolio') || is_home() || is_page_template('page-blog-mediumimages.php') || is_single() || is_archive()) {
		
	}
  	
  	wp_enqueue_script('functions');
  	wp_enqueue_script('prettyPhoto');
  	wp_enqueue_script('twitter');
}

add_action( 'wp_enqueue_scripts', 'energy_scripts_basic' );  

function energy_styles_basic()  
{  
	
	/* ------------------------------------------------------------------------ */
	/* Register Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_register_style( 'skeleton', get_template_directory_uri() . '/framework/css/skeleton.css', array(), '1', 'all' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/framework/css/responsive.css', array(), '1', 'all' );
	wp_register_style( 'fontello', get_template_directory_uri() . '/framework/css/css/fontello.css', array(), '1', 'all' );
	/* ------------------------------------------------------------------------ */
	/* Enqueue Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_enqueue_style( 'fontello' );
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' ); // Main Stylesheet
	wp_enqueue_style( 'retina' ); 
	
	global $options_data;
	
	if($options_data['check_responsive'] == true) {
		wp_enqueue_style( 'skeleton' );
		wp_enqueue_style( 'responsive' ); 
	}
	
}  
add_action( 'wp_enqueue_scripts', 'energy_styles_basic', 1 ); 

/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */

?>