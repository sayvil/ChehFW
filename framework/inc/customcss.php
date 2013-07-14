<?php
function energy_styles_custom() {
global $options_data; 
function HexToRGB($hex) {
		$hex = ereg_replace("#", "", $hex);
		$color = array();
 
		if(strlen($hex) == 3) {
			$color['r'] = hexdec(substr($hex, 0, 1) . $r);
			$color['g'] = hexdec(substr($hex, 1, 1) . $g);
			$color['b'] = hexdec(substr($hex, 2, 1) . $b);
		}
		else if(strlen($hex) == 6) {
			$color['r'] = hexdec(substr($hex, 0, 2));
			$color['g'] = hexdec(substr($hex, 2, 2));
			$color['b'] = hexdec(substr($hex, 4, 2));
		}
 
		return implode(",", $color);
	}
?>

<!-- Custom CSS Codes
========================================================= -->
	
<style>
	body{ font-family: <?php echo $options_data['font_body']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_body']['size']; ?>; font-weight: <?php echo $options_data['font_body']['style']; ?>; color: <?php echo $options_data['font_body']['color']; ?>;
	<?php if($options_data['select_layoutstyle'] == 'boxed' || $options_data['select_layoutstyle'] == 'framed' || $options_data['select_layoutstyle'] == 'rounded' ) { ?>
		
		<?php // Specific Page Background defined 
		if( get_post_meta( get_the_ID(), 'energy_bgurl', true ) != '' ) {
	
			if(get_post_meta( get_the_ID(), 'energy_bgcolor', true )) { echo 'background-color: '.get_post_meta( get_the_ID(), 'energy_bgcolor', true ).';';}
			if(get_post_meta( get_the_ID(), 'energy_bgurl', true )) { echo 'background-image: url('.get_post_meta( get_the_ID(), 'energy_bgurl', true ).');';}
			if(get_post_meta( get_the_ID(), 'energy_bgstyle', true ) != 'stretch') { 
				echo 'background-repeat: '.get_post_meta( get_the_ID(), 'energy_bgstyle', true ).';'; 
			} else { 
				echo '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;'; 
			}
			
		} // EOF Specific BG
		
		// If No Specific Page Background take Defaults
		else {
			if($options_data['color_bg'] != "") { echo 'background-color: '. $options_data['color_bg'] .';'; }
			if($options_data['media_bg'] != "") { echo 'background-image: url('.$options_data['media_bg'].');'; } 
			if($options_data['select_bg'] != 'Stretch Image') { 
				echo 'background-repeat: '.$options_data['select_bg'].';'; 
			} else { 
				echo '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;'; 
			}
		} // EOF Default BG ?>
		background-attachment: fixed;
		
	<?php } ?>
	}
	h1{ font-family: <?php echo $options_data['font_h1']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h1']['size']; ?>; font-weight: <?php echo $options_data['font_h1']['style']; ?>; color: <?php echo $options_data['font_h1']['color']; ?>; }
	h2{ font-family: <?php echo $options_data['font_h2']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h2']['size']; ?>; font-weight: <?php echo $options_data['font_h2']['style']; ?>; color: <?php echo $options_data['font_h2']['color']; ?>; }
	h3{ font-family: <?php echo $options_data['font_h3']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h3']['size']; ?>; font-weight: <?php echo $options_data['font_h3']['style']; ?>; color: <?php echo $options_data['font_h3']['color']; ?>; }
	h4{ font-family: <?php echo $options_data['font_h4']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h4']['size']; ?>; font-weight: <?php echo $options_data['font_h4']['style']; ?>; color: <?php echo $options_data['font_h4']['color']; ?>; }
	h5{ font-family: <?php echo $options_data['font_h5']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h5']['size']; ?>; font-weight: <?php echo $options_data['font_h5']['style']; ?>; color: <?php echo $options_data['font_h5']['color']; ?>; }
	h6{ font-family: <?php echo $options_data['font_h6']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_h6']['size']; ?>; font-weight: <?php echo $options_data['font_h6']['style']; ?>; color: <?php echo $options_data['font_h6']['color']; ?>; }
	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited  { font-weight: inherit; color: inherit; }
	h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, 
	a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6 { color: <?php echo $options_data['color_hover']; ?>; }
	
	#header .logo{ margin-top: <?php echo $options_data['style_logotopmargin']; ?>; margin-bottom: <?php echo $options_data['style_logobottommargin']; ?>; }
	a, a:visited{ color: <?php echo $options_data['color_link']; ?>; }
	a:hover,  a:focus{ color: <?php echo $options_data['color_hover']; ?>;}
	
	/* Header ------------------------------------------------------------------------ */  
	
	#header { background: <?php echo $options_data['color_headerbg']; ?>; border-bottom: <?php echo $options_data['border_header']['width']; ?>px <?php echo $options_data['border_header']['style']; ?> <?php echo $options_data['border_header']['color']; ?>;}
	#header #top-bar{ background: <?php echo $options_data['color_topbar']; ?>; color: <?php echo $options_data['textcolor_topbar']; ?>;}	
	#header .select-menu{ background: <?php echo $options_data['color_headerbg']; ?>; }
	#navigation ul li { height: <?php echo $options_data['style_headerheight']; ?>px; }
	#navigation ul li a { height: <?php echo $options_data['style_headerheight']; ?>px; line-height: <?php echo $options_data['style_headerheight']; ?>px; }
	#navigation .sub-menu{ top:<?php echo $options_data['style_headerheight']; ?>px; }
	#header-searchform{ margin-top: <?php echo $options_data['style_headerheight']/2-17; ?>px; }
	#header.header4 #header-searchform2 {margin-top: <?php echo $options_data['style_logotopmargin']; ?>;}
	/* Navigation ------------------------------------------------------------------------ */ 
	
	#navigation ul li a { font-family: <?php echo $options_data['font_nav']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_nav']['size']; ?>; font-weight: <?php echo $options_data['font_nav']['style']; ?>; color: <?php echo $options_data['font_nav']['color']; ?>; }
	#navigation ul li a:hover { color: <?php echo $options_data['color_navlinkhover']; ?>; }
	#header.header3 #navigation .menu > li.current-menu-item > a,
	#header.header3 #navigation .menu > li.current-menu-item > a:hover,
	#header.header3 #navigation .menu > li.current-page-ancestor > a,
	#header.header3 #navigation .menu > li.current-page-ancestor > a:hover,
	#header.header3 #navigation .menu > li.current-menu-ancestor > a,
	#header.header3 #navigation .menu > li.current-menu-ancestor > a:hover,
	#header.header3 #navigation .menu > li.current-menu-parent > a,
	#header.header3 #navigation .menu > li.current-menu-parent > a:hover,
	#header.header3 #navigation .menu > li.current_page_ancestor > a,
	#header.header3 #navigation .menu > li.current_page_ancestor > a:hover,
	#header.header3 #navigation .menu > li.sfHover > a,
	#header.header3 #navigation .menu > li.sfHover > a:hover,
	#header.header3 #navigation .menu > li > a:hover {
	    background-color: <?php echo $options_data['bgcolor_navlinkhover']; ?>;
	    color: #fff !important;
	}
	#navigation li.current-menu-item a,
	#navigation li.current-menu-item a:hover,
	#navigation li.current-page-ancestor a,
	#navigation li.current-page-ancestor a:hover,
	#navigation li.current-menu-ancestor a,
	#navigation li.current-menu-ancestor a:hover,
	#navigation li.current-menu-parent a,
	#navigation li.current-menu-parent a:hover,
	#navigation li.current_page_ancestor a,
	#navigation li.current_page_ancestor a:hover { color: <?php echo $options_data['color_navlinkactive']; ?>; }
	#navigation .sub-menu{ background: <?php echo $options_data['color_submenubg']; ?> !important; border-color: <?php echo $options_data['color_submenuborder']; ?>; }
	#navigation .sub-menu:before {border-bottom-color: <?php echo $options_data['color_submenuborder']; ?>;}
	#navigation .sub-menu li a,
	html body #navigation .sub-menu li .sub-menu li a,
	html body #navigation .sub-menu li .sub-menu li .sub-menu li a { font-family: <?php echo $options_data['font_body']['face']; ?>, Arial, Helvetica, sans-serif; /* normal Body font for Dropdowns */ font-size: <?php echo $options_data['font_body']['size']; ?>; font-weight: <?php echo $options_data['font_body']['style']; ?>; color: <?php echo $options_data['color_submenulink']; ?>; }
	#navigation .sub-menu li{ border-color: <?php echo $options_data['color_submenulinkborder']; ?>; }
	#navigation .sub-menu li a:hover,
	#navigation .sub-menu li.sfHover > a,
	#navigation .sub-menu li.current-menu-parent > a,
	#navigation .sub-menu li .sub-menu li a:hover,
	#navigation .sub-menu li.current-menu-item a,
	#navigation .sub-menu li.current-menu-item a:hover,
	#navigation .sub-menu li.current_page_item a,
	#navigation .sub-menu li.current_page_item a:hover { color: <?php echo $options_data['color_submenulinkhover']; ?> !important; }
	#title {
		background: <?php echo $options_data['color_titlebgtop']; ?>;
	    background-image: linear-gradient(bottom, <?php echo $options_data['color_titlebgbottom']; ?> 0%, <?php echo $options_data['color_titlebgtop']; ?> 100%);
	    background-image: -o-linear-gradient(bottom, <?php echo $options_data['color_titlebgbottom']; ?> 0%, <?php echo $options_data['color_titlebgtop']; ?> 100%);
	    background-image: -moz-linear-gradient(bottom, <?php echo $options_data['color_titlebgbottom']; ?> 0%, <?php echo $options_data['color_titlebgtop']; ?> 100%);
	    background-image: -webkit-linear-gradient(bottom, <?php echo $options_data['color_titlebgbottom']; ?> 0%, <?php echo $options_data['color_titlebgtop']; ?> 100%);
	    background-image: -ms-linear-gradient(bottom, <?php echo $options_data['color_titlebgbottom']; ?> 0%, <?php echo $options_data['color_titlebgtop']; ?> 100%);
	    border-bottom: <?php echo $options_data['border_titlebottom']['width']; ?>px <?php echo $options_data['border_titlebottom']['style']; ?> <?php echo $options_data['border_titlebottom']['color']; ?>;
	    border-top: <?php echo $options_data['border_titletop']['width']; ?>px <?php echo $options_data['border_titletop']['style']; ?> <?php echo $options_data['border_titletop']['color']; ?>;
	}
	#title h1, #alt-title h1 { font-family: <?php echo $options_data['font_titleh1']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_titleh1']['size']; ?>; font-weight: <?php echo $options_data['font_titleh1']['style']; ?>; color: <?php echo $options_data['font_titleh1']['color']; ?>; }
	#title h2, #alt-title h2, 
	#title #breadcrumbs, #no-title #breadcrumbs, 
	#alt-title #breadcrumbs, #no-title { font-family: <?php echo $options_data['font_titleh2']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_titleh2']['size']; ?>; font-weight: <?php echo $options_data['font_titleh2']['style']; ?>; color: <?php echo $options_data['font_titleh2']['color']; ?>; }
	#title #breadcrumbs, 
	#alt-title #breadcrumbs { color: <?php echo $options_data['color_titlebreadcrumb']; ?>; }
	#title #breadcrumbs a, 
	#alt-title #breadcrumbs a, 
	#no-title #breadcrumbs a { color: <?php echo $options_data['color_titlebreadcrumb']; ?>; }
	#title #breadcrumbs a:hover, 
	#alt-title #breadcrumbs a:hover, 
	#no-title #breadcrumbs a:hover { color: <?php echo $options_data['color_titlebreadcrumbhover']; ?>; }
	
	#sidebar .widget h3 { font: <?php echo $options_data['font_sidebarwidget']['style']; ?> <?php echo $options_data['font_sidebarwidget']['size']; ?> <?php echo $options_data['font_sidebarwidget']['face']; ?>, Arial, Helvetica, sans-serif; color: <?php echo $options_data['font_sidebarwidget']['color']; ?>; }
		    
	/* Footer ------------------------------------------------------------------------ */  
	
	#footer{ border-top: <?php echo $options_data['border_footertop']['width']; ?>px <?php echo $options_data['border_footertop']['style']; ?> <?php echo $options_data['border_footertop']['color']; ?>; }  
	#footer{ border-top-color: <?php echo $options_data['border_footertop']['color']; ?>; background: <?php echo $options_data['color_footerbg']; ?>; color:<?php echo $options_data['color_footertext']; ?>; }
	#footer a{ color:<?php echo $options_data['color_footerlink']; ?>; }
	#footer a:hover{ color:<?php echo $options_data['color_footerlinkhover']; ?>; }
	#footer .twitter-list a {color:<?php echo $options_data['color_footerlinkhover']; ?>;}
	#footer .widget h3 { font-family: <?php echo $options_data['font_footerheadline']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_footerheadline']['size']; ?>; font-weight: <?php echo $options_data['font_footerheadline']['style']; ?> !important; color: <?php echo $options_data['font_footerheadline']['color']; ?> !important; border-bottom:<?php echo $options_data['border_footerheadline']['width']; ?>px <?php echo $options_data['border_footerheadline']['style']; ?> <?php echo $options_data['border_footerheadline']['color']; ?>; }
	
	
	/* Copyright ------------------------------------------------------------------------ */  
	        
	#copyright { background: <?php echo $options_data['color_copyrightbg']; ?>; color: <?php echo $options_data['color_copyrighttext']; ?>; }
	#copyright a { color: <?php echo $options_data['color_copyrightlink']; ?>; }
	#copyright a:hover { color: <?php echo $options_data['color_copyrightlinkhover']; ?>; }
	    
	/* Forms ------------------------------------------------------------------------ */  
	    
	input[type="text"], input[type="password"], input[type="email"], textarea, select, button, input[type="submit"], input[type="reset"], input[type="button"] { font-family: <?php echo $options_data['font_body']['face']; ?>, Arial, Helvetica, sans-serif; font-size: <?php echo $options_data['font_body']['size']; ?>; }
	    
	/* Accent Color ------------------------------------------------------------------------ */ 
	.social-icon a:hover, .social-icons a:hover{background-color: <?php echo $options_data['color_accent']; ?> !important;}
	::selection, .big_button_green a  { background: <?php echo $options_data['color_accent']; ?> !important; }
	::-moz-selection { background: <?php echo $options_data['color_accent']; ?> }
	.tab a.selected h5, .tab a:hover h5 {border-color: <?php echo $options_data['color_accent']; ?>; }
	.highlight, .title a:hover, .post-meta span a:hover { color: <?php echo $options_data['color_accent']; ?> }
	#filters ul li a.active, #filters ul li a:hover {border-top:2px solid <?php echo $options_data['color_accent']; ?>;}
	.portfolio-item:hover .portfolio-title a h4, .big_green{ color: <?php echo $options_data['color_accent']; ?> !important;}
	.projects-nav a:hover { background-color: <?php echo $options_data['color_accent']; ?> }
	.sidenav li a:hover, .post-navigation a:hover { color: <?php echo $options_data['color_accent']; ?> }
	#back-to-top a:hover, .button, input[type=submit] { background-color: <?php echo $options_data['color_accent']; ?> }
	.widget_tag_cloud a:hover { background: <?php echo $options_data['color_accent']; ?>; border-color: <?php echo $options_data['color_accent']; ?>; }
	.widget_flickr #flickr_tab a:hover { background: <?php echo $options_data['color_accent']; ?>; border-color: <?php echo $options_data['color_accent']; ?>; }
	.widget_portfolio .portfolio-widget-item .portfolio-pic:hover { background: <?php echo $options_data['color_accent']; ?>; border-color: <?php echo $options_data['color_accent']; ?>; }
	#footer .widget_tag_cloud a:hover,
	#footer .widget_flickr #flickr_tab a:hover,
	#footer .widget_portfolio .portfolio-widget-item .portfolio-pic:hover,
	.flex-direction-nav a:hover { background-color: <?php echo $options_data['color_accent']; ?> }
	.flex-control-nav li a:hover, .flex-control-nav li a.flex-active{ background: <?php echo $options_data['color_accent']; ?> }
	a.button.alternative-1 { background: <?php echo $options_data['color_accent']; ?>; border-color: <?php echo $options_data['color_accent']; ?>; }
	.gallery img:hover { background: <?php echo $options_data['color_accent']; ?>; border-color: <?php echo $options_data['color_accent']; ?> !important; }
	.skillbar .skill-percentage { background: <?php echo $options_data['color_accent']; ?> }
	.latest-blog .blog-item:hover h4 { color: <?php echo $options_data['color_accent']; ?> }
	.tp-caption.big_colorbg{ background: <?php echo $options_data['color_accent']; ?>; }
	.tp-caption.medium_colorbg{ background: <?php echo $options_data['color_accent']; ?>; }
	.tp-caption.small_colorbg{ background: <?php echo $options_data['color_accent']; ?>; }
	.tp-caption.customfont_color{ color: <?php echo $options_data['color_accent']; ?>; }
	.tp-caption a { color: <?php echo $options_data['color_accent']; ?>; }
	.widget_categories ul li a:hover, #related-posts ul li h5 a:hover { color: <?php echo $options_data['color_accent']; ?>; }
	.tp-leftarrow:hover,
	.tp-rightarrow:hover { background-color: <?php echo $options_data['color_accent']; ?>; }
	.member .member-social{ background-color: rgba(<?php echo HexToRGB($options_data['color_accent']); ?>,0.7); }
	.portfolio-item .portfolio-pic .portfolio-overlay,
	.portfolio-item-one .portfolio-pic .portfolio-overlay, .overlay {background-color: rgba(<?php echo HexToRGB($options_data['color_accent']); ?>,0.7);}
	.portfolio-item .portfolio-page-item .portfolio-title a:hover { color: <?php echo $options_data['color_accent']; ?>;}
	.post a.more::after,
	.iconbox a:hover::after, 
	a.more:hover::after {background-color: <?php echo $options_data['color_accent']; ?>;}
	.post a.more:hover {color: <?php echo $options_data['color_accent']; ?>;}
	<?php if($options_data['select_layoutstyle'] == 'Boxed Layout with margin' ) { ?>
		#boxed-layout{
			margin: 40px auto;
			overflow: hidden;
			border-radius: 6px;
		}
	<?php } ?>
	
	<?php echo $options_data['textarea_csscode']; ?>
	
</style>

<?php }
add_action( 'wp_head', 'energy_styles_custom', 100 );
?>