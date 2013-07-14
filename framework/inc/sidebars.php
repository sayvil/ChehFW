<?php

/* ------------------------------------------------------------------------ */
/* Define Sidebars */
/* ------------------------------------------------------------------------ */

if (function_exists('register_sidebar')) {
	
	/* ------------------------------------------------------------------------ */
	/* Blog Widgets */

	register_sidebar(array(
		'name' => __('Blog Widgets','energy-framework' ),
		'id'   => 'blog-widgets',
		'description'   => __( 'These are widgets for the Blog sidebar.','energy-framework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title"><span>',
		'after_title'   => '</span></h3>'
	));
	
	/* ------------------------------------------------------------------------ */
	/* Footer Widgets */
	
	register_sidebar(array(
	   'name' => __('Footer Widgets','energy-framework' ),
	   'id'   => 'footer-widgets',
		'description'   => __( 'These are widgets for the Footer.','energy-framework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s four columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
   	));
   	
   	/* ------------------------------------------------------------------------ */
}
    
?>