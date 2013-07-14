<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
	

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		$of_options_select = array("one","two","three","four","five"); 
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$url =  ADMIN_DIR . 'assets/images/';

/* ------------------------------------------------------------------------ */
/* General
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "General",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Disable Comments for all Content Pages (not Blog)",
					"desc" => "<strong>Be careful:</strong> Page specific Settings get overwritten.",
					"id" => "check_disablecomments",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics Code (or other) here.",
					"id" => "textarea_trackingcode",
					"std" => "",
					"type" => "textarea"); 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Favicons",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Favicon Upload (16x16)",
					"desc" => "Upload your Favicon (16x16px ico/png - use <a href='http://www.favicon.cc/' target='_blank'>favicon.cc</a> to make sure it's fully compatible)",
					"id" => "media_favicon",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					

/* ------------------------------------------------------------------------ */
/* Layout
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Layout",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Layout Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Enable Responsive Layout",
					"desc" => "Check to enable Responsive Layout",
					"id" => "check_responsive",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable to Zoom on Mobile Devices",
					"desc" => "Check to enable Zoom on Mobile Devices",
					"id" => "check_mobilezoom",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Layout Style",
					"desc" => "Choose your Layout Style",
					"id" => "select_layoutstyle",
					"std" => "wide",
					"type" => "select",
					"options" => array('wide', 'boxed', 'framed', 'rounded'));	
					
$of_options[] = array( "name" => "Tile Bar Image Grid Opacity",
					"desc" => "Opacity of the grid for Featured Image Title. Between 0 (0%) and 1 (100%). Default: 0.8",
					"id" => "titlebar_gridopacity",
					"std" => "0.8",
					"type" => "text"); 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Boxed Layout Options (only work when Boxed Layout is enabled)",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Default Background Image",
					"desc" => "Upload default Background or paste Image URL",
					"id" => "media_bg",
					"std" => get_template_directory_uri()."/framework/images/pattern1.png",
					"mod" => "min",
					"type" => "media");

$of_options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select Background Repeat Option for the default Background.",
					"id" => "select_bg",
					"std" => "repeat",
					"type" => "select",
					"options" => array('Stretch Image', 'repeat', 'no-repeat', 'repeat-x', 'repeat-y')
					);
					
$of_options[] = array( "name" => "Default Background Color",
					"desc" => "Select Color for default Background",
					"id" => "color_bg",
					"std" => "#f6f6f6",
					"type" => "color"); 
																
/* ------------------------------------------------------------------------ */
/* Header
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Header",
					"type" => "heading");

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header variations",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Select a Header Layout",
					"desc" => "",
					"id" => "header_layout",
					"std" => "version1",
					"type" => "images",
					"options" => array(
						"version1" => get_template_directory_uri()."/framework/images/headers/header1.png",
						"version2" => get_template_directory_uri()."/framework/images/headers/header2.png",
						"version3" => get_template_directory_uri()."/framework/images/headers/header3.png",
						"version4" => get_template_directory_uri()."/framework/images/headers/header4.png",
						"version5" => get_template_directory_uri()."/framework/images/headers/header5.png"
					));
$of_options[] = array( "name" => "Show Top Bar",
					"desc" => "If you want to show top bar, you need to check it",
					"id" => "check_topbar",
					"std" => 0,
					"type" => "checkbox");

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Title Bar Options",
					"icon" => false,
					"type" => "info");	

$of_options[] = array( "name" => "Show Social Icons in Title bar",
					"desc" => "Check to show Social Icons in Title bar (Configure Icons in Social Media)",
					"id" => "check_social_titlebar",
					"std" => 1,
					"type" => "checkbox");


$of_options[] = array( "name" => "Call us",
					"desc" => "Enter call us info.</strong>",
					"id" => "call_us",
					"std" => "Call Us: (123) 456-78-90 - Mail demolink@companyname.com",
					"type" => "text"); 	

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Logo & Search Options",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Show Searchform",
					"desc" => "Check to show Searchform in Navigation Bar",
					"id" => "check_searchform",
					"std" => 0,
					"type" => "checkbox");

					
$of_options[] = array( "name" => "Header Height (without px)",
					"desc" => "Header Height (Default: 114)",
					"id" => "style_headerheight",
					"std" => "114",
					"type" => "text");
					
$of_options[] = array( "name" => "Logo Upload",
					"desc" => "Upload your Logo",
					"id" => "media_logo",
					"std" => get_template_directory_uri()."/framework/images/logo.png",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter your Top margin value for the Logo in pixels (Default: 35px)",
					"id" => "style_logotopmargin",
					"std" => "35px",
					"type" => "text");
					
$of_options[] = array( "name" => "Logo Bottom Margin",
					"desc" => "Enter your Bottom margin value for the Logo in pixels (Default: 30px)",
					"id" => "style_logobottommargin",
					"std" => "30px",
					"type" => "text");  

/* ------------------------------------------------------------------------ */
/* Footer
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Footer",
					"type" => "heading");

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Footer Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Enable Widgetized Footer",
					"desc" => "Check to show widgetized Footer.",
					"id" => "check_footerwidgets",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Copyright Text",
					"desc" => "Enter your Copyright Text (HTML allowed)",
					"id" => "textarea_copyright",
					"std" => "<span class='small-logo'>Energy</span> by <a href='http://themeforest.net/user/ArtstudioWorks/portfolio'>ArtstudioWorks</a> © All rights reserved",
					"type" => "textarea"); 

$of_options[] = array( "name" => "Show Social Icons in Footer",
					"desc" => "Check to show Social Icons in Footer (Configure Icons in Social Media)",
					"id" => "check_socialfooter",
					"std" => 1,
					"type" => "checkbox"); 
					
/* ------------------------------------------------------------------------ */
/* Typography
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Typography",
					"type" => "heading");
									
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Body",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Body Text Font",
					"desc" => "Specify the Body font properties",
					"id" => "font_body",
					"std" => array('size' => '14px','face' => 'Open Sans','style' => 'normal','color' => '#727272'),
					"type" => "typography");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Headlines",
					"icon" => false,
					"type" => "info");
				
$of_options[] = array( "name" => "H1 - Headline Font",
					"desc" => "Specify the H1 Headline font properties",
					"id" => "font_h1",
					"std" => array('size' => '46px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography");  

$of_options[] = array( "name" => "H2 - Headline Font",
					"desc" => "Specify the H2 Headline font properties",
					"id" => "font_h2",
					"std" => array('size' => '36px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H3 - Headline Font",
					"desc" => "Specify the H3 Headline font properties",
					"id" => "font_h3",
					"std" => array('size' => '24px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography");  

$of_options[] = array( "name" => "H4 - Headline Font",
					"desc" => "Specify the H4 Headline font properties",
					"id" => "font_h4",
					"std" => array('size' => '18px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H5 - Headline Font",
					"desc" => "Specify the H5 Headline font properties",
					"id" => "font_h5",
					"std" => array('size' => '16px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography");  

$of_options[] = array( "name" => "H6 - Headline Font",
					"desc" => "Specify the H6 Headline font properties",
					"id" => "font_h6",
					"std" => array('size' => '14px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography"); 
					
/* ------------------------------------------------------------------------ */
/* Styling
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Styling",
					"type" => "heading");
					
/* ------------------------------------------------------------------------ */

					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Accent Color",
					"desc" => "Default: #a2c852",
					"id" => "color_accent",
					"std" => "#a2c852",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Links",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Link Color",
					"desc" => "Default: #a2c852",
					"id" => "color_link",
					"std" => "#a2c852",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Link Hover Color",
					"desc" => "Default: #3b3b3b",
					"id" => "color_hover",
					"std" => "#3b3b3b",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Top Bar Text Color",
					"desc" => "Default: #777777",
					"id" => "textcolor_topbar",
					"std" => "#777777",
					"type" => "color");

$of_options[] = array( "name" => "Top Bar Background Color",
					"desc" => "Default: #fafafa",
					"id" => "color_topbar",
					"std" => "#fafafa",
					"type" => "color");

$of_options[] = array( "name" => "Header Background Color",
					"desc" => "Default: #ffffff",
					"id" => "color_headerbg",
					"std" => "#ffffff",
					"type" => "color");

$of_options[] = array( "name" => "Header Border Bottom Style",
					"desc" => "Default: 1px none #d8d8d8",
					"id" => "border_header",
					"std" => array('width' => '1','style' => 'none','color' => '#d8d8d8'),
					"type" => "border"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Navigation",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Navigation Link Color",
					"desc" => "Default: #666666",
					"id" => "font_nav",
					"std" => array('size' => '18px','face' => 'Bitter','style' => 'normal','color' => '#3b3b3b'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Navigation Link Hover Background Color",
					"desc" => "It shows when you select third header layout. Default: #a2c852",
					"id" => "bgcolor_navlinkhover",
					"std" => "#a2c852",
					"type" => "color"); 

$of_options[] = array( "name" => "Navigation Link Hover Color",
					"desc" => "Default: #a2c852",
					"id" => "color_navlinkhover",
					"std" => "#a2c852",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Navigation Link Active Color",
					"desc" => "Default: #a2c852",
					"id" => "color_navlinkactive",
					"std" => "#a2c852",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Background Color",
					"desc" => "Default: #ffffff",
					"id" => "color_submenubg",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Border-Top Color",
					"desc" => "Default: #beda39",
					"id" => "color_submenuborder",
					"std" => "#beda39",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Color",
					"desc" => "Default: #3b3b3b",
					"id" => "color_submenulink",
					"std" => "#3b3b3b",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Border Color",
					"desc" => "Default: #ffffff",
					"id" => "color_submenulinkborder",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Hover and Active Color",
					"desc" => "Default: #beda39",
					"id" => "color_submenulinkhover",
					"std" => "#beda39",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Title",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Title Background Gradient Top",
					"desc" => "Default: #f6f6f6",
					"id" => "color_titlebgtop",
					"std" => "#f6f6f6",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Background Gradient Bottom",
					"desc" => "Default: #f6f6f6",
					"id" => "color_titlebgbottom",
					"std" => "#f6f6f6",
					"type" => "color");
					
$of_options[] = array( "name" => "Title Border Top Color",
					"desc" => "Default: 1px solid #d8d8d8",
					"id" => "border_titletop",
					"std" => array('width' => '1','style' => 'solid','color' => '#d8d8d8'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title Border Bottom Color",
					"desc" => "Default: 1px solid #d8d8d8",
					"id" => "border_titlebottom",
					"std" => array('width' => '1','style' => 'solid','color' => '#d8d8d8'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title h1 Text Font",
					"desc" => "Default: #3b3b3b",
					"id" => "font_titleh1",
					"std" => array('size' => '24px','face' => 'Bitter','style' => 'normal','color' => '#3b3b3b'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Title h2 Text Font",
					"desc" => "Default: #c6c6c6",
					"id" => "font_titleh2",
					"std" => array('size' => '13px','face' => 'Open Sans','style' => 'normal','color' => '#c6c6c6'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Title Breadcrumb Color",
					"desc" => "Default: #c6c6c6",
					"id" => "color_titlebreadcrumb",
					"std" => "#c6c6c6",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Breadcrumb Hover Color",
					"desc" => "Default: #a2c852",
					"id" => "color_titlebreadcrumbhover",
					"std" => "#a2c852",
					"type" => "color"); 				

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Sidebar Headlines",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Sidebar Widgets Headline",
					"desc" => "Default: #525252",
					"id" => "font_sidebarwidget",
					"std" => array('size' => '18px','face' => 'Bitter','style' => 'normal','color' => '#525252'),
					"type" => "typography"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Footer",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Footer Background Color",
					"desc" => "Default: #393939",
					"id" => "color_footerbg",
					"std" => "#393939",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Border Top Color",
					"desc" => "Default: 10px solid #5f5f5f",
					"id" => "border_footertop",
					"std" => array('width' => '10','style' => 'solid','color' => '#5f5f5f'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Footer Text Color",
					"desc" => "Default: #878787",
					"id" => "color_footertext",
					"std" => "#878787",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Headline",
					"desc" => "Default: #bebebe",
					"id" => "font_footerheadline",
					"std" => array('size' => '18px','face' => 'Bitter','style' => 'normal','color' => '#bebebe'),
					"type" => "typography");
					
$of_options[] = array( "name" => "Footer Headline Border",
					"desc" => "Default: 1px none #676767",
					"id" => "border_footerheadline",
					"std" => array('width' => '1','style' => 'none','color' => '#676767'),
					"type" => "border");
					
$of_options[] = array( "name" => "Footer Link Color",
					"desc" => "Default: #878787",
					"id" => "color_footerlink",
					"std" => "#878787",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Link Hover Color",
					"desc" => "Default: #bebebe",
					"id" => "color_footerlinkhover",
					"std" => "#bebebe",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Copyright",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Copyright Background Color",
					"desc" => "Default: #222222",
					"id" => "color_copyrightbg",
					"std" => "#222222",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Text Color",
					"desc" => "Default: #777777",
					"id" => "color_copyrighttext",
					"std" => "#777777",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Color",
					"desc" => "Default: #888888",
					"id" => "color_copyrightlink",
					"std" => "#888888",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Hover Color",
					"desc" => "Default: #ffffff",
					"id" => "color_copyrightlinkhover",
					"std" => "#ffffff",
					"type" => "color"); 

/* ------------------------------------------------------------------------ */
/* Blog
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Blog",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Options",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Layout",
					"desc" => "Choose your Default Blog Layout",
					"id" => "select_bloglayout",
					"std" => "Blog Fullwidth",
					"type" => "select",
					"options" => array('Blog Fullwidth', 'Blog Medium'));	
					
$of_options[] = array( "name" => "Blog Sidebar Position",
					"desc" => "Blog Listing Sidebar Position",
					"id" => "select_blogsidebar",
					"std" => "sidebar-right",
					"type" => "select",
					"options" => array('sidebar-left', 'sidebar-right'));	
					
$of_options[] = array( "name" => "Enable Share-Box on Single Post Page",
					"desc" => "Check to enable Share-Box",
					"id" => "check_sharebox",
					"std" => 0,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable Author Info on Post Detail",
					"desc" => "Check to enable Author Info",
					"id" => "check_authorinfo",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable Related Posts on Post Detail",
					"desc" => "Check to enable Related Posts",
					"id" => "check_relatedposts",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Blog Excerpt Length",
					"desc" => "Default: 30. Used for blog page, archives & search results.",
					"id" => "text_excerptlength",
					"std" => "30",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Enable 'Read More' Button",
					"desc" => "Check to enable 'Read More' button on blog entries.",
					"id" => "check_readmore",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Title Settings",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Title",
					"desc" => "",
					"id" => "text_blogtitle",
					"std" => "Blog Title Here",
					"type" => "text");

$of_options[] = array( "name" => "Blog Subtitle",
					"desc" => "",
					"id" => "text_blogsubtitle",
					"std" => "Your Blog Subtitle Here",
					"type" => "text"); 
					

$of_options[] = array( "name" => "Blog Breadcrumb Name",
					"desc" => "",
					"id" => "text_blogbreadcrumb",
					"std" => "Blog",
					"type" => "text"); 	
					
$of_options[] = array( "name" => "Blog Titlebar",
					"desc" => "Choose your Blog Titlebar Layout",
					"id" => "select_blogtitlebar",
					"std" => "Default",
					"type" => "select",
					"options" => array('Default', 'Image', 'No Titlebar'));

$of_options[] = array( "name" => "Disable Breadcrumbs for Blog",
					"desc" => "Check to disable Breadcrumbs for Blog & Blog Posts.",
					"id" => "check_blogbreadcrumbs",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Blog Titlebar Image (If Blog Titlebar Layout is set to Image)",
					"desc" => "Upload a Blog Titlebar Image.",
					"id" => "media_blogtitlebar",
					"std" => "",
					"mod" => "min",
					"type" => "media");			

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Social Sharing Box Icons",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Enable Facebook in Social Sharing Box",
					"desc" => "Check to enable Facebook in Social Sharing Box",
					"id" => "check_sharingboxfacebook",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Twitter in Social Sharing Box",
					"desc" => "Check to enable Twitter in Social Sharing Box",
					"id" => "check_sharingboxtwitter",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable LinkedIn in Social Sharing Box",
					"desc" => "Check to enable LinkedIn in Social Sharing Box",
					"id" => "check_sharingboxlinkedin",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Reddit in Social Sharing Box",
					"desc" => "Check to enable Reddit in Social Sharing Box",
					"id" => "check_sharingboxreddit",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Digg in Social Sharing Box",
					"desc" => "Check to enable Digg in Social Sharing Box",
					"id" => "check_sharingboxdigg",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Delicious in Social Sharing Box",
					"desc" => "Check to enable Delicious in Social Sharing Box",
					"id" => "check_sharingboxdelicious",
					"std" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "Enable Google in Social Sharing Box",
					"desc" => "Check to enable Google in Social Sharing Box",
					"id" => "check_sharingboxgoogle",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable E-Mail in Social Sharing Box",
					"desc" => "Check to enable Google in E-Mail Sharing Box",
					"id" => "check_sharingboxemail",
					"std" => 1,
					"type" => "checkbox"); 
					
/* ------------------------------------------------------------------------ */
/* Portfolio
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Portfolio",
					"type" => "heading");
					
$of_options[] = array( "name" => "Portfolio Slug",
					"desc" => "Enter the URL Slug for your Portfolio (Default: portfolio-item) <br /><strong>Go save your permalinks after changing this.</strong>",
					"id" => "text_portfolioslug",
					"std" => "portfolio-item",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Items on Portfolio One Column",
					"desc" => "Enter how many items you want to show on Portfolio One Column before Pagination shows up (Default: 5)",
					"id" => "text_portfolioitems_1",
					"std" => "5",
					"type" => "text"); 
$of_options[] = array( "name" => "Items on Portfolio Two Column",
					"desc" => "Enter how many items you want to show on Portfolio Two Column before Pagination shows up (Default: 8)",
					"id" => "text_portfolioitems_2",
					"std" => "8",
					"type" => "text"); 
$of_options[] = array( "name" => "Items on Portfolio Three Column",
					"desc" => "Enter how many items you want to show on Portfolio Three Column before Pagination shows up (Default: 9)",
					"id" => "text_portfolioitems_3",
					"std" => "9",
					"type" => "text"); 
$of_options[] = array( "name" => "Items on Portfolio Four Column",
					"desc" => "Enter how many items you want to show on Portfolio Four Column before Pagination shows up (Default: 12)",
					"id" => "text_portfolioitems_4",
					"std" => "12",
					"type" => "text"); 
/* ------------------------------------------------------------------------ */
/* Contact page
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Contact page",
					"type" => "heading");

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Contact page",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Contact Map",
					"desc" => "Enter the link for embed google map.</strong>",
					"id" => "contact_map",
					"std" => "https://maps.google.com/maps?q=1601+North+Congress+Avenue+Boynton+Beach,+FL+33426&hl=en&ll=26.539164,-80.091019&spn=0.033748,0.066047&sll=47.696472,13.345735&sspn=6.500151,16.907959&hnear=1601+N+Congress+Ave,+Boynton+Beach,+Palm+Beach,+Florida+33426&t=m&z=15",
					"type" => "text"); 

$of_options[] = array( "name" => "Map Layout",
					"desc" => "Choose your contact map Layout",
					"id" => "select_map_layout",
					"std" => "Wide",
					"type" => "select",
					"options" => array('Wide', 'Boxed'));
/* ------------------------------------------------------------------------ */
/* Lightbox Settings
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Lightbox",
					"type" => "heading");

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Lightbox settings",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Lightbox Theme",
					"desc" => "",
					"id" => "lightbox_theme",
					"std" => "pp_default",
					"type" => "select",
					"options" => array(
						'pp_default' => 'pp_default',
						'light_rounded' => 'light_rounded',
						'dark_rounded' => 'dark_rounded',
						'light_square' => 'light_square',
						'dark_square' => 'dark_square',
						'facebook' => 'facebook'
					));
					
$of_options[] = array( "name" => "Animation Speed",
					"desc" => "",
					"id" => "lightbox_animation_speed",
					"std" => "fast",
					"type" => "select",
					"options" => array('fast' => 'Fast', 'slow' => 'Slow', 'normal' => 'Normal'));

$of_options[] = array( "name" => "Background Opacity",
					"desc" => "",
					"id" => "lightbox_opacity",
					"std" => "0.8",
					"type" => "text");

$of_options[] = array( "name" => "Show title",
					"desc" => "Check to show the title",
					"id" => "lightbox_title",
					"std" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "Show Gallery Thumbnails",
					"desc" => "Check to show gallery thumbnails",
					"id" => "lightbox_gallery",
					"std" => 1,
					"type" => "checkbox");

$of_options[] = array( "name" => "Autoplay Gallery",
					"desc" => "Check to autoplay the lightbox gallery",
					"id" => "lightbox_autoplay",
					"std" => 0,
					"type" => "checkbox");

$of_options[] = array( "name" => "Autoplay Gallery Speed",
					"desc" => "If autoplay is set to true, select the slideshow speed in ms. (Default: 5000, 1000 ms = 1 second)",
					"id" => "lightbox_slideshow_speed",
					"std" => "5000",
					"type" => "text");

$of_options[] = array( "name" => "Social Icons",
					"desc" => "Check to show social sharing icons",
					"id" => "lightbox_social",
					"std" => 0,
					"type" => "checkbox");		
					
$of_options[] = array( "name" => "Disable Lightbox on Smartphone",
					"desc" => "Check to disable Lightbox on Smartphones. This will link directly to the image",
					"id" => "lightbox_smartphones",
					"std" => 0,
					"type" => "checkbox");		
/* ------------------------------------------------------------------------ */
/* Social
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Social Media",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Enter your username / URL, leave blank to hide Social Icons",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Twitter Username",
					"desc" => "Enter your Twitter username",
					"id" => "social_twitter",
					"std" => "wordpress",
					"type" => "text"); 

$of_options[] = array( "name" => "Forrst URL",
					"desc" => "Enter URL to your Forrst Account",
					"id" => "social_forrst",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Dribbble URL",
					"desc" => "Enter URL to your Dribbble Account",
					"id" => "social_dribbble",
					"std" => "#",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Flickr URL",
					"desc" => "Enter URL to your Flickr Account",
					"id" => "social_flickr",
					"std" => "#",
					"type" => "text"); 

$of_options[] = array( "name" => "Facebook URL",
					"desc" => "Enter URL to your Facebook Account",
					"id" => "social_facebook",
					"std" => "#",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Skype URL",
					"desc" => "Enter URL to your Skype Account",
					"id" => "social_skype",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Digg URL",
					"desc" => "Enter URL to your Digg Account",
					"id" => "social_digg",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Google+ URL",
					"desc" => "Enter URL to your Google+ Account",
					"id" => "social_google",
					"std" => "#",
					"type" => "text"); 
					
$of_options[] = array( "name" => "LinkedIn URL",
					"desc" => "Enter URL to your LinkedIn Account",
					"id" => "social_linkedin",
					"std" => "#",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Vimeo URL",
					"desc" => "Enter URL to your Vimeo Account",
					"id" => "social_vimeo",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Yahoo URL",
					"desc" => "Enter URL to your Yahoo Account",
					"id" => "social_yahoo",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Tumblr URL",
					"desc" => "Enter URL to your Tumblr Account",
					"id" => "social_tumblr",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "YouTube URL",
					"desc" => "Enter URL to your YouTube Account",
					"id" => "social_youtube",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Picasa URL",
					"desc" => "Enter URL to your Picasa Account",
					"id" => "social_picasa",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "DeviantArt URL",
					"desc" => "Enter URL to your DeviantArt Account",
					"id" => "social_deviantart",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Behance URL",
					"desc" => "Enter URL to your Behance Account",
					"id" => "social_behance",
					"std" => "",
					"type" => "text");
					
$of_options[] = array( "name" => "Pinterest URL",
					"desc" => "Enter URL to your Pinterest Account",
					"id" => "social_pinterest",
					"std" => "#",
					"type" => "text");  
					
$of_options[] = array( "name" => "PayPal URL",
					"desc" => "Enter URL to your PayPal Account",
					"id" => "social_paypal",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Delicious URL",
					"desc" => "Enter URL to your Delicious Account",
					"id" => "social_delicious",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Show RSS",
					"desc" => "Check to Show RSS Icon",
					"id" => "social_rss",
					"std" => 1,
					"type" => "checkbox"); 
														
/* ------------------------------------------------------------------------ */
/* Custom CSS
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Custom CSS",
					"type" => "heading");
					
$of_options[] = array( "name" => "Custom CSS",
					"desc" => "Advanced CSS Options. Paste your CSS Code.",
					"id" => "textarea_csscode",
					"std" => "",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
/* Backup
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Backup Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Backup and Restore Options",
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => 'You can backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
					);
					
$of_options[] = array( "name" => "Transfer Theme Options Data",
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						',
					);
					
	}
}
?>
