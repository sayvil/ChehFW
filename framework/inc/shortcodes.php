<?php

/*-----------------------------------------------------------------------------------*/
/*	Accordion
/*-----------------------------------------------------------------------------------*/
function energy_accordion($atts, $content=null, $code) {

	extract(shortcode_atts(array(
		'open' => '1'
	), $atts));

	if (!preg_match_all("/(.?)\[(accordion-item)\b(.*?)(?:(\/))?\](?:(.+?)\[\/accordion-item\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} 
	else {
		$output = '';
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
						
			$output .= '<div class="accordion-title"><div class="acc-icon"></div><h4>' . $matches[3][$i]['title'] . '</h4></div><div class="accordion-inner">' . do_shortcode(trim($matches[5][$i])) .'</div>';
		}
		return '<div class="accordion" rel="'.$open.'">' . $output . '</div>';
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/*	Alert
/*-----------------------------------------------------------------------------------*/
function energy_alert( $atts, $content = null) {

extract( shortcode_atts( array(
      'type' 	=> 'warning',
      'close'	=> 'true'
      ), $atts ) );
      
      if($close == 'false') {
		  $var1 = '';
	  }
	  else{
		  $var1 = '<span class="close" href="#">x</span>';
	  }
      
      return '<div class="alert-message ' . $type . '">' . do_shortcode($content) . '' . $var1 . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Br-Tag
/*-----------------------------------------------------------------------------------*/
function energy_br() {
   return '<br />';
}

/*-----------------------------------------------------------------------------------*/
/* Buttons 
/*-----------------------------------------------------------------------------------*/
function energy_buttons( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
        'size'    	=> 'medium',
		'target'    => '_self',
		'lightbox'  => false, 
		'color'     => 'white',
		'icon'		=> '',
		'style'		=> ''
    ), $atts));
    
    if($lightbox == true) {
    	$return = "prettyPhoto ";
    }
    else{
    	$return = " ";
    }
    if($icon == '') {
    	$return2 = "";
    }
    else{
    	$return2 = "<i class='icon-".$icon."'></i>";
    }

	$out = "<a href=\"" .$link. "\" target=\"" .$target. "\" class=\"".$return."button ".$color." ".$size." ".$style."\" rel=\"slides[buttonlightbox]\">". $return2 . "". do_shortcode($content). "</a>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Callouts & Teaser 
/*-----------------------------------------------------------------------------------*/

function energy_teaser( $atts, $content = null) {
extract( shortcode_atts( array(
      'img' => ''
      ), $atts ) );
      
      if($img == '') {
    	$return = "";
      } else{
    	$return = "<div class='teaser-img'><img src='".$img."' /></div>";
      }
      
      return '<div class="teaser">' .$return. '' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/

function energy_teaserbox( $atts, $content = null) {
extract( shortcode_atts( array(
      'title' => '',
      'button' => '',
      'buttonsize' => 'normal',
      'buttoncolor' => 'alternative-1',
      'link' => '',
      'target'  => '_self'
      ), $atts ) );
      return '<div class="teaserbox"><div class="border"><h2 class="highlight">' .$title. '</h2>' . do_shortcode($content) . '<br /><a class="button ' .$buttonsize. ' ' .$buttoncolor. '" href="' .$link. '" target="' .$target. '">' .$button. '</a></div></div>';
}

/*-----------------------------------------------------------------------------------*/

function energy_clients($atts, $content = null) {
extract( shortcode_atts( array(
      'link' => ''
      ), $atts ) );
      return '<div class="clients">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/

function energy_callout( $atts, $content = null) {
extract( shortcode_atts( array(
      'title' => '',
      'button' => '',
      'buttonsize' => 'normal',
      'buttoncolor' => 'alternative-1',
      'link' => '',
      'target'  => '_self',
      'buttonmargin' => '0px'
      ), $atts ) );
      $output = '<div class="callout"><div class="border clearfix"><div class="callout-content">';
      if($title != '')
      	$output .='<div class="callout-title">'.$title.'</div>';
      $output .= do_shortcode($content);
      $output .= '</div>';
      if($button != '')
      	$output .= '<div class="callout-button" style="margin:' .$buttonmargin. ';"><a class="button ' .$buttonsize. ' ' .$buttoncolor. '" href="' .$link. '" target="' .$target. '">'.$button.'</a></div>';
      $output .= '</div></div>';
      return $output;
}

function energy_box( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1'
      ), $atts ) );
      return '<div class="description clearfix style-' .$style. '">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Google Font
/*-----------------------------------------------------------------------------------*/

function energy_googlefont( $atts, $content = null) {
extract( shortcode_atts( array(
      	'font' => 'Swanky and Moo Moo',
      	'size' => '42px',
      	'margin' => '0px'
      ), $atts ) );
      
      $google = preg_replace("/ /","+",$font);
      
      return '<link href="http://fonts.googleapis.com/css?family='.$google.'" rel="stylesheet" type="text/css">
      			<div class="googlefont" style="font-family:\'' .$font. '\', serif !important; font-size:' .$size. ' !important; margin: ' .$margin. ' !important;">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	HR Dividers
/*-----------------------------------------------------------------------------------*/
function energy_hr( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1',
      'margin' => ''
      ), $atts ) );
      
    if($margin == '') {
    	$return = "";
    } else{
    	$return = "style='margin:".$margin." !important;'";
    }
      
    return '<div class="hr hr' .$style. '" ' .$return. '></div>';  
}


/*-----------------------------------------------------------------------------------*/
/*	Tagline
/*-----------------------------------------------------------------------------------*/
function energy_tagline( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1',
      'margin' => ''
      ), $atts ) );
      
    return '<div class="tagline">' . do_shortcode($content) . '</div>';  
}

/*-----------------------------------------------------------------------------------*/
/*	Gap Dividers
/*-----------------------------------------------------------------------------------*/

function energy_gap( $atts, $content = null) {

extract( shortcode_atts( array(
      'height' 	=> '10'
      ), $atts ) );
      
      if($height == '') {
		  $return = '';
	  }
	  else{
		  $return = 'style="height: '.$height.'px;"';
	  }
      
      return '<div class="gap" ' . $return . '></div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Clear-Tag
/*-----------------------------------------------------------------------------------*/
function energy_clear() {  
    return '<div class="clear"></div>';  
}

/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/
function energy_columns( $atts, $content = null) {

extract( shortcode_atts( array(
      'count' 	=> 'eight'
      ), $atts ) );
      
      if($count == '') {
		  $return = '<div class="eight columns">'.do_shortcode($content).'</div>';
	  }
	  else{
		  $return = '<div class="'.$count.' columns">'.do_shortcode($content).'</div>';
	  }
      
      return $return;
}
function energy_container( $atts, $content = null ) {
   return '<div class="container">' . do_shortcode($content) . '</div>';
}
function energy_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function energy_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function energy_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function energy_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function energy_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function energy_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function energy_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function energy_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function energy_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function energy_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function energy_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function energy_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function energy_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

/*-----------------------------------------------------------------------------------*/
/* Dropcap */
/*-----------------------------------------------------------------------------------*/
function energy_dropcap($atts, $content = null) {
    extract(shortcode_atts(array(
        'style'      => ''
    ), $atts));
    
    if($style == '') {
    	$return = "";
    }
    else{
    	$return = "dropcap-".$style;
    }
    
	$out = "<span class='dropcap ". $return ."'>" .$content. "</span>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Media */
/*-----------------------------------------------------------------------------------*/

function energy_video($atts) {
	extract(shortcode_atts(array(
		'type' 	=> '',
		'id' 	=> '',
		'width' 	=> false,
		'height' 	=> false,
		'autoplay' 	=> ''
	), $atts));
	
	if ($height && !$width) $width = intval($height * 16 / 9);
	if (!$height && $width) $height = intval($width * 9 / 16);
	if (!$height && !$width){
		$height = 315;
		$width = 560;
	}
	
	$autoplay = ($autoplay == 'yes' ? '1' : false);
		
	if($type == "vimeo") $return = "<div class='video-embed'><iframe src='http://player.vimeo.com/video/$id?autoplay=$autoplay&amp;title=0&amp;byline=0&amp;portrait=0' width='$width' height='$height' class='iframe'></iframe></div>";
	
	else if($type == "youtube") $return = "<div class='video-embed'><iframe src='http://www.youtube.com/embed/$id?HD=1;rel=0;showinfo=0' width='$width' height='$height' class='iframe'></iframe></div>";
	
	else if($type == "dailymotion") $return ="<div class='video-embed'><iframe src='http://www.dailymotion.com/embed/video/$id?width=$width&amp;autoPlay={$autoplay}&foreground=%23FFFFFF&highlight=%23CCCCCC&background=%23000000&logo=0&hideInfos=1' width='$width' height='$height' class='iframe'></iframe></div>";
		
	if (!empty($id)){
		return $return;
	}
}
/*-----------------------------------------------------------------------------------*/
/* Media */
/*-----------------------------------------------------------------------------------*/

function energy_map($atts) {
	extract(shortcode_atts(
        array(
				'src' => '',
				'width' => '100%',
				'height' => '410px'
    ), $atts));
    	$output =  '<div class="google-map">';
			$output .= '<iframe src="'.$src.'&amp;iwloc=0&amp;output=embed" frameborder="0" width="'.$width.'" height="'.$height.'" marginwidth="0" marginheight="0" scrolling="no">';
			$output .= '</iframe>';
		$output .= '</div>';

    return $output;
}
/*-----------------------------------------------------------------------------------*/
/*	Icons & Iconbox
/*-----------------------------------------------------------------------------------*/

function energy_icon( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon' => 'arrows',
       	'size' => '',
        'color' => ''
    ), $atts));
  if($size != '') $size='font-size:'.$size.';';
  if($color != '') $color='color:'.$color.';';

	$out = '<span class="icon-'.$icon.'" style="'.$size.' '.$color.'"></span>'; 
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function energy_iconbox( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      => 'arrows',
       	'icon_size' => 'big',
       	'title'		=> '',
       	'icon_url' 	=> ''
    ), $atts));
    
    $geticon = '';
    switch ($icon_size) {
    	case 'small':
    		$size='small';
    		break;
    	
    	default:
    		$size='big';
    		break;
    }
    
    if($icon_url != ''){
	    $geticon = '<span class="iconbox-none"><img src="'.$iconurl.'" /></span>';
    }
    else{
	    $geticon = '<div class="icon"><span><i class="'.$size.'icon-'. $icon .'"></i></span></div>';
    }
	$out = '<div class="iconbox">'.$geticon.'<h3 class="'.$size.'">'. $title .'</h3><div class="clearfix"></div><div class="gap" style="height: 18px;"></div>'. do_shortcode($content) . '<div class="clearfix"></div></div>';
    return $out;
}


/*-----------------------------------------------------------------------------------*/
/*	Lists
/*-----------------------------------------------------------------------------------*/

function energy_list( $atts, $content = null ) {
    extract(shortcode_atts(array(), $atts));
	$out = '<ul class="styled-list">'. do_shortcode($content) . '</ul>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function energy_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      => 'ok'
    ), $atts));
	$out = '<li><i class="icon-'.$icon.'"></i>'. do_shortcode($content) . '</li>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Member
/*-----------------------------------------------------------------------------------*/

function energy_member( $atts, $content = null) {
extract( shortcode_atts( array(
      'img' 	=> '',
      'name' 	=> '',
      'role'	=> '',
      'twitter' => '',
      'facebook' => '',
      'pinterest' => ''
      ), $atts ) );
      
      if($img == '') {
    	$return = "";
      } else{
    	$return_o = "<div class='member-img'><img src='".$img."' alt='' />";
    	$return_c = "</div>";
      }
      
      if( $twitter != '' || $facebook != '' || $pinterest != ''){
	      $return5 = '<div class="member-social social-icons light "><ul>';
	      $return6 = '</ul></div>';
	      
	      if($twitter != '') {
	    	$return2 = '<li class="social-twitter"><a href="' .$twitter. '" target="_blank" title="Twitter">Twitter</a></li>';
	      } else{
		     $return2 = ''; 
	      }
	      
	      if($facebook != '') {
	    	$return3 = '<li class="social-facebook">facebook: <a href="' .$facebook. '" target="_blank" title="Facebook">Facebook</a></li>';
	      } else{
		      $return3 = ''; 
	      }
	      
	      if($pinterest != '') {
	    	$return4 = '<li class="social-pinterest">Pinterest <a href="' .$pinterest. '" target="_blank" title="Pinterest">Pinterest</a></li>';
	      } else{
		      $return4 = ''; 
	      }
	      
	      
      }  else {
	      $return2 = '';
	      $return3 = ''; 
	      $return4 = ''; 
	      $return5 = ''; 
	      $return6 = '';  
      }   
      return '<div class="member">' .$return_o.$return5.$return3.$return2.$return4.$return6.$return_c.' 
      	<div class="inner"><h4>' .$name. '</h4>
      	<div class="member-role">' .$role. '</div>' . do_shortcode($content) . '</div></div>';
}

/*-----------------------------------------------------------------------------------*/

function energy_skill( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'percentage' => '0',
       	'title'      => ''
    ), $atts));
	$out = '<div class="skill-title">' .$title. '</div><div class="skillbar" data-perc="' .$percentage. '"><div class="skill-percentage"></div></div>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Pricing Table */
/*-----------------------------------------------------------------------------------*/

function energy_plan( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'name'      => '',
		'link'      => '',
		'linkname'      => 'Sign Up',
		'price'      => '',
		'per'      => '',
		'color'    => '' // grey, green, red, blue
    ), $atts));

    $pr = preg_split('/\.|,/',$price, 2, PREG_SPLIT_NO_EMPTY);
    if(count($pr)>=2){
      $price1=$pr[0];
      $price2=$pr[1];
    } else {
      if($pr = preg_split('/\$|€/',$price, 2, PREG_SPLIT_NO_EMPTY)) {
        $price1= $pr[0]; 
      } else {
        $price1='';
      }
      $price2='';
      if(strpos($price, '€'))$price2='00€';
      if(strpos($price, '$'))$price2='00$';
    }
    if($per != '') {
    	$return3 = "".$per."";
    }
    else{
    	$return3 = "";
    }
    $return5 = "";
    if($color != '') {
    	$return4 = "style='color:".$color.";' ";
      $return5 = "style='background-color:".$color.";' ";
    }
    else{
    	$return4 = "";
      $return5 = "";
    }
	
	$out = "
		<div class='plan'>	
			<div class='border'>";
      if($name != '') $out .="<div class='plan-head'>".$name."</div>";
      $out .="<div class='price'><h1 ".$return4.">".$price1."<sup>".$price2."</sup><sub>".$return3."</sub></h1></div>
        <ul>" .do_shortcode($content). "</ul><div class='signup'>";
      if($link != '')  $out .="<a class='button' ".$return5." href='".$link."'>".$linkname."<span></span></a>";
      $out .="</div></div>
		</div>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function energy_pricing( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'col'      => '',
        'style' => 'style1'
    ), $atts));
	
	$out = "<div class='pricing-table  ".$style." col-".$col."'><div class='border-m'>" .do_shortcode($content). "</div></div><div class='clear'></div>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Block & Pullquotes
/*-----------------------------------------------------------------------------------*/
function energy_blockquote( $atts, $content = null) {
extract( shortcode_atts( array(), $atts ) );
      
	return '<blockquote><p>' . do_shortcode($content) . '</p></blockquote>';
}

/*-----------------------------------------------------------------------------------*/

function energy_pullquote( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'align'      => 'left'
    ), $atts));
	
    return '<span class="pullquote align-'.$align.'">' . do_shortcode($content) . '</span>';
}

/*-----------------------------------------------------------------------------------*/
/* Responsive Images 
/*-----------------------------------------------------------------------------------*/

function energy_responsive( $atts, $content = null ) {
    extract(shortcode_atts(array(), $atts));
	
	return '<span class="responsive">' . do_shortcode($content) . '</span>';
}

/*-----------------------------------------------------------------------------------*/
/* Responsive Visibility 
/*-----------------------------------------------------------------------------------*/

function energy_responsivevisibility( $atts, $content = null) {

extract( shortcode_atts( array(
      'show' => 'desktop'
      ), $atts ) );
      return '<div class="visibility-' . $show . '">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Social Icons 
/*-----------------------------------------------------------------------------------*/

function energy_social( $atts, $content = null) {

extract( shortcode_atts( array(
      'icon' 	=> 'twitter',
      'style'	=> 'dark',
      'rounded'	=> 'no',
      'url'		=> '#',
      'target' 	=> '_blank'
      ), $atts ) );
      switch ($rounded) {
      	case 'yes':
      		$rounded = 'rounded';
      		break;
      	default:
      		$rounded = '';
      		break;
      }
      $capital = ucfirst($icon);
      
      return '<div class="social-icon '.$style.' '.$rounded.' social-' . $icon . '"><a href="' . $url . '" title="' . $capital . '" target="' . $target . '">' . $capital . '</a></div>';
}

/*-----------------------------------------------------------------------------------*/
/* Styled Tables
/*-----------------------------------------------------------------------------------*/

function energy_table( $atts, $content = null) {

extract( shortcode_atts( array(
      'style' 	=> '1'
      ), $atts ) );
      
      return '<div class="custom-table-' . $style . '">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Testimonial
/*-----------------------------------------------------------------------------------*/

function energy_testimonial( $atts, $content = null) {
extract( shortcode_atts( array(
      'author' => ''
      ), $atts ) );
      return '<div class="testimonial">' . do_shortcode($content) . '</div><div class="testimonial-author">' .$author. '</div>';
}
/**
 * Carousel
 *
 */
function energy_testimonial_carousel($atts, $content = null) {
extract(shortcode_atts(array(
				'num' => '3',
				'thumb_width' => '47',
				'thumb_height' => '47',				
				'excerpt_count' => '34'
		), $atts));	
		$output = '<script type="text/javascript">
						jQuery(window).load(function() {
							jQuery("#flexslider-testimonial").flexslider({
								animation: "slide",
								smoothHeight : true,
								directionNav: true,
								controlNav: false,
								itemMargin: 20
							});
						});
					</script>';
		$output .= '<div id="flexslider-testimonial" class="flexslider">';
			$output .= '<ul class="slides">';
			global $post;
			global $my_string_limit_words;
			$args = array(
				'post_type' => 'testi',
				'numberposts' => $num,
				'orderby' => 'post_date',
				'order' => 'DESC'
			);
			query_posts( $args );
			if(have_posts()) {
				while(have_posts()) {

				the_post();
				$custom = get_post_custom($post->ID);
				$testiname = $custom["energy_testi_caption"][0];
				$testiurl = $custom["energy_testi_url"][0];
				$testiinfo = $custom["energy_testi_info"][0];

				$excerpt = get_the_excerpt();
				$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$url = $attachment_url['0'];
				$image = aq_resize($url, $thumb_width, $thumb_height, true);

				$output .= '<li>';
					$output .= '<div class="testimonial">'.my_string_limit_words($excerpt,$excerpt_count).'</div>';				 
					$output .= '<div class="testimonial-author">';
						if ( has_post_thumbnail($post->ID) ){
							$output .= '<figure class="featured-thumbnail">';
							$output .= '<img  src="'.$image.'" alt="'.get_the_title($post->ID).'" />';
							$output .= '</figure>';
						}
						else {
							$output .= '<figure class="featured-thumbnail">';
							$output .= '<img  src="http://placehold.it/'.$thumb_width.'x'.$thumb_height.'/avatar" alt="'.get_the_title($post->ID).'" />';
							$output .= '</figure>';
						}
						$output .= '<span class="user">'.$testiname.'</span>';
						$output .= '<span class="testiinfo">'.$testiinfo.'</span>';
				$output .= '</li>';
				}
			}
			$output .= '</ul>';
		$output .= '</div>';
		wp_reset_query();
		return $output;
}
/*-----------------------------------------------------------------------------------*/
/*	Latest Projects
/*-----------------------------------------------------------------------------------*/

function energy_portfolio($atts){
	extract(shortcode_atts(array(
       	'projects'      => '4',
       	'title' => 'Portfolio',
       	'show_title' => 'yes',
       	'columns' => '4',
       	'filters' => 'all'
    ), $atts));
    
    global $post;
	$args = array(
		'post_type' => 'portfolio',
		'posts_per_page' => $projects,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );

	if($columns == '3'){
		$return = 'one-third';
		$item_width = '300';
	}
	elseif($columns == '2'){
		$return = 'eight';
		$item_width = '460';
	}
	else{
		$return = 'four';
		$item_width = '220';
	}
    if($filters != 'all'){
    	
    	// string to array
    	$str = $filters;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'portfolio_filter',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}
    
    $randomid = rand();

    query_posts( $args );

	if( have_posts() ) :

		$out = '<script type="text/javascript">
					jQuery(window).load(function() {
						jQuery("#flexslider-portfolio").flexslider({
							animation: "slide",
							slideshow: false,
							smoothHeight : true,
							directionNav: true,
							controlNav: false,
							itemWidth:'.$item_width.',
							itemMargin: 20,
							minItems: 1,
    						maxItems: '.$columns.'
						});
					});
				</script>';
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}
		$out .= '<div id="flexslider-portfolio">'; 
		$out .= '<div class="latest-portfolio container-inner negative-wrap wrapper">';	
		$out .= '<ul class="slides">';
		while ( have_posts() ) : the_post();
			
			$out .= '<li><div class="portfolio-item no-margin">';			
			
			if ( has_post_thumbnail()) {
			
					$portfolio_thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'eight-columns' );
					
					$terms = wp_get_object_terms($post->ID, 'portfolio_filter');
					
					$out .= '<div class="portfolio-pic">';
					$out .= '<img src="'.$portfolio_thumbnail[0].'" /></div>';
				  	$out .= '<div class="portfolio-title">';
				  	$out .= '<a href="'. get_permalink() .'" title="'. get_the_title() .'"><h4>'. get_the_title() .'</h4></a>';	
				  		if ( $terms && !is_wp_error( $terms ) ) {
				  			$out .= '<span>';
	                        $out1 = array();
	                        foreach ( $terms as $term )
	                            $out1[] = ' '.$term->name;
	                        $out .= join( ' / ', $out1 );
	                        $out .= '</span>';
	                    }
				  		$out .= '</div>';
			} else {
          $portfolio_thumbnail= wp_get_attachment_image_src( 1300, 'eight-columns' );
          $terms = wp_get_object_terms($post->ID, 'portfolio_filter');
          
          $out .= '<div class="portfolio-pic">';
          $out .= '<img src="'.$portfolio_thumbnail[0].'" /></div>';
            $out .= '<div class="portfolio-title">';
            $out .= '<a href="'. get_permalink() .'" title="'. get_the_title() .'"><h4>'. get_the_title() .'</h4></a>'; 
              if ( $terms && !is_wp_error( $terms ) ) {
                $out .= '<span>';
                          $out1 = array();
                          foreach ( $terms as $term )
                              $out1[] = ' '.$term->name;
                          $out .= join( ' / ', $out1 );
                          $out .= '</span>';
                      }
              $out .= '</div>';
      }
			
		    $out .='</div></li>';
			
		endwhile;
		
		$out .='</ul></div></div><div class="clear"></div>';
		
		 wp_reset_query();
	
	endif;

	return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/

function energy_tabgroup( $atts, $content = null, $code ) {
	$GLOBALS['tab_count'] = 0;
	$i = 1;
	$randomid = rand();
	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
	
		foreach( $GLOBALS['tabs'] as $tab ){	
			if( $tab['icon'] != '' ){
				$icon = '<i class="icon-'.$tab['icon'].'"></i>';
			}
			else{
				$icon = '';
			}
			$tabs[] = '<li class="tab"><a href="#panel'.$randomid.$i.'"><h5>'.$icon.''.$tab['title'].'</h5></a></li>';
			$panes[] = '<div class="panel" id="panel'.$randomid.$i.'"><div class="wrapper">'.do_shortcode($tab['content']).'</div></div>';
			$i++;
			$icon = '';
		}
		$return = '<div class="tabset"><ul class="tabs">'.implode( "\n", $tabs ).'</ul>'.implode( "\n", $panes ).'</div>';
	}
	return $return;
}

function energy_tab( $atts, $content = null, $code) {
	extract(shortcode_atts(array(
			'title' => '',
			'icon'  => ''
	), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'icon' => $icon, 'content' =>  $content );
	$GLOBALS['tab_count']++;
}



/*-----------------------------------------------------------------------------------*/
/* Toggle */
/*-----------------------------------------------------------------------------------*/

function energy_toggle( $atts, $content = null){
	extract(shortcode_atts(array(
        'title' => '',
        'icon' => '',
        'open' => "false"
    ), $atts));

	if($icon != '') {
    	$return = "<i class='icon-".$icon."'></i>";
    }
    else{
    	$return = "";
    }
    
    if($open == "true") {
	    $return2 = "active";
    }
    else{
	    $return2 = '';
    }
   return '<div class="toggle"><div class="toggle-title '.$return2.'"><div class="status-icon"></div><h3>'.$return.' '.$title.'</h3></div><div class="toggle-inner"><p>'. do_shortcode($content) . '</p></div></div>';
}


/*-----------------------------------------------------------------------------------*/
/* Tooltip */
/*-----------------------------------------------------------------------------------*/

function energy_tooltip( $atts, $content = null)
{
	extract(shortcode_atts(array(
        'text' => ''
    ), $atts));
   
   return '<span class="tooltips"><a href="#" rel="tooltip" title="'.$text.'">'. do_shortcode($content) . '</a></span>';
}

/*-----------------------------------------------------------------------------------*/
/* Separator */
/*-----------------------------------------------------------------------------------*/

function energy_separator( $atts, $content = null){
	extract(shortcode_atts(array(
       	'headline'      => 'h3',
       	'title' => 'Title'
    ), $atts));
   
	return '<'.$headline.' class="title"><span>'.$title.'</span></'.$headline.'>';
}

// Recent Comments

function energy_recent_comments($atts, $content = null) {

    extract(shortcode_atts(array(
        'count' => '5'
    ), $atts));

    $args = array(
	'status' => 'approve',
	'number' => $count,
	'post_type' => 'post',
	'orderby' => 'date',
	);
	$comments = get_comments($args);

    $output = '<ul class="recent-comments">';

    foreach ($comments as $comment) {

        $output .= '<li>';
            $output .= '<span class="author">'.strip_tags($comment->comment_author).'</span> : '.limit_words(strip_tags($comment->comment_content), 8).'';
                 $output .= '</br><span class="date">'.get_the_time('F j, Y').'</span> | <a href="'.get_permalink($comment->ID).'#comment-'.$comment->comment_ID.'" title="on '.$comment->post_title.'">Reply </a>';
            $output .= '';
        $output .= '</li>';

    }

    $output .= '</ul>';

    return $output;

}

/*-----------------------------------------------------------------------------------*/
/*	Latest Blog
/*-----------------------------------------------------------------------------------*/

function energy_bloglist($atts){
	extract(shortcode_atts(array(
       	'posts'      => '4',
       	'title' => 'Latest Blog Entries',
       	'style' => '1',
       	'excerpt_count' => '14',
       	'orderby' => 'date',
       	'show_title' => 'yes',
       	'categories' => 'all'
    ), $atts));
    
    global $post;
    switch ($orderby) {
    	case 'popular':
    		$orderby = 'comment_count';
    		break;
    	case 'date':
    		$orderby = 'date';
    		break;
    	default:
    		$orderby = 'date';
    		break;
    }
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts,
		'order'          => 'DESC',
		'orderby'        => $orderby,
		'post_status'    => 'publish'
    );
    
    if($categories != 'all'){
    	
    	// string to array
    	$str = $categories;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'category',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}

    query_posts( $args );
    $out = '';
    
   

	if( have_posts() ) :
		
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}
		switch($style) {
			case '1':
				while ( have_posts() ) : the_post();
					
				$out .= '<div class="latest-blog-list clearfix"><div class="blog-list-item-date"><h3>'.get_the_time('d').'</h3><span>'.get_the_time('F').'</span></div>
						<div class="blog-list-item-description">
							<h4><a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
							<div class="blog-list-item-excerpt">'.limit_words(get_the_excerpt(), $excerpt_count).'</div>
              <a class="more" href="'. get_permalink() . '">' . 'Read More' . '</a>
						</div>
						</div>';
				endwhile;
				$out .='<div class="clear"></div>';
			break;
			case '2':
				while ( have_posts() ) : the_post();
				$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'eight-columns' );
				$url = $attachment_url['0'];
				$image = aq_resize($url, 70, 50, true);
				$out .= '<div class="latest-blog-list clearfix">';
				if(has_post_thumbnail()){
					$out .= '<div class="blog-list-item-img"><a href="'. get_permalink() . '"><img src="'.$image.'" alt="'.get_the_title().'" /></a></div>';
				}
				$out .= '<div class="blog-list-item-description">
							<div class="blog-list-item-excerpt">'.limit_words(get_the_excerpt(), $excerpt_count).'</div>
							<span class="date">'.get_the_time('F j, Y').'</span>
						</div>
						</div>';
				
				endwhile;
			break;
		}
		
		 wp_reset_query();
	
	endif;

	return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Latest Blog
/*-----------------------------------------------------------------------------------*/

function energy_blog($atts){
	extract(shortcode_atts(array(
       	'posts'      => '4',
       	'title' => 'Latest From the Blog',
       	'show_title' => 'yes',
       	'categories' => 'all'
    ), $atts));
    
    global $post;

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );
    
    if($categories != 'all'){
    	
    	// string to array
    	$str = $categories;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'category',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}

    query_posts( $args );
    $out = '';
    
   

	if( have_posts() ) :
		
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}
		
		$out .= '<div class="latest-blog negative-wrap">';	
		
		while ( have_posts() ) : the_post();
		
			 //$text = strip_tags(energy_excerpt(20));
			
			$out .= '<div class="blog-item four columns">';
			
			if ( has_post_thumbnail()) {
				$blog_thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'eight-columns' );
				$out .= '<a href="'.get_permalink().'" title="' . get_the_title() . '" class="blog-pic"><img src="'.$blog_thumbnail[0].'" /><div class="blog-overlay">';
				$out .= '</div></a>';
			}
			
			$out .= '<div class="blog-item-description">
						<h4><a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
						<span>'.get_the_date().' / '.get_comments_number().' '.__( 'Comments', 'energy' ) .'</span>
					</div>';
		
		    $out .='<div class="blog-border"></div></div>';
			
		endwhile;
		
		$out .='</div><div class="clear"></div>';
		
		 wp_reset_query();
	
	endif;

	return $out;
}

/* ----------------------------------------------------- */
/* Pre Process Shortcodes */
/* ----------------------------------------------------- */

function pre_process_shortcode($content) {
    global $shortcode_tags;
 
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    remove_all_shortcodes();

    add_shortcode('blog', 'energy_blog');
	 add_shortcode('bloglist', 'energy_bloglist');
	
    add_shortcode('accordion', 'energy_accordion');
    add_shortcode('alert', 'energy_alert');
    add_shortcode('button', 'energy_buttons');
    
    add_shortcode('map', 'energy_map');

    add_shortcode('teaserbox', 'energy_teaserbox');
    add_shortcode('teaser', 'energy_teaser');
    add_shortcode('callout', 'energy_callout');
    add_shortcode('box', 'energy_box');

    add_shortcode('clients', 'energy_clients');
    
    add_shortcode('googlefont', 'energy_googlefont');
    
    add_shortcode('br', 'energy_br');
    add_shortcode('clear', 'energy_clear');
    add_shortcode('gap', 'energy_gap');
    add_shortcode('hr', 'energy_hr');

    add_shortcode('container', 'energy_container');
    add_shortcode('columns', 'energy_columns');

    add_shortcode('one_third', 'energy_one_third');
	add_shortcode('one_third_last', 'energy_one_third_last');
	add_shortcode('two_third', 'energy_two_third');
	add_shortcode('two_third_last', 'energy_two_third_last');
	add_shortcode('one_half', 'energy_one_half');
	add_shortcode('one_half_last', 'energy_one_half_last');
	add_shortcode('one_fourth', 'energy_one_fourth');
	add_shortcode('one_fourth_last', 'energy_one_fourth_last');
	add_shortcode('three_fourth', 'energy_three_fourth');
	add_shortcode('three_fourth_last', 'energy_three_fourth_last');
	add_shortcode('one_fifth', 'energy_one_fifth');
	add_shortcode('one_fifth_last', 'energy_one_fifth_last');
	add_shortcode('two_fifth', 'energy_two_fifth');
	add_shortcode('two_fifth_last', 'energy_two_fifth_last');
	add_shortcode('three_fifth', 'energy_three_fifth');
	add_shortcode('three_fifth_last', 'energy_three_fifth_last');
	add_shortcode('four_fifth', 'energy_four_fifth');
	add_shortcode('four_fifth_last', 'energy_four_fifth_last');
	add_shortcode('one_sixth', 'energy_one_sixth');
	add_shortcode('one_sixth_last', 'energy_one_sixth_last');
	add_shortcode('five_sixth', 'energy_five_sixth');
	add_shortcode('five_sixth_last', 'energy_five_sixth_last');
	
	add_shortcode('dropcap', 'energy_dropcap');
	
	add_shortcode('video', 'energy_video');
	
	add_shortcode('iconbox', 'energy_iconbox');
	add_shortcode('icon', 'energy_icon');

	add_shortcode( 'gal', 'energy_gallery' );
	
	add_shortcode('list', 'energy_list');
	add_shortcode('list_item', 'energy_item');
	
	add_shortcode('member', 'energy_member');
	add_shortcode('skill', 'energy_skill');
	
	add_shortcode('plan', 'energy_plan');
	add_shortcode('pricing-table', 'energy_pricing');
	
	add_shortcode('blockquote', 'energy_blockquote');
	add_shortcode('pullquote', 'energy_pullquote');
	
	add_shortcode('responsive', 'energy_responsive');
	add_shortcode('visibility', 'energy_responsivevisibility');
	
	add_shortcode('social', 'energy_social');
	
	add_shortcode('custom_table', 'energy_table');
	
	add_shortcode('testimonial', 'energy_testimonial');
	add_shortcode('testimonial_carousel', 'energy_testimonial_carousel');

	add_shortcode('portfolio', 'energy_portfolio');
	
	add_shortcode('toggle', 'energy_toggle');
	
	add_shortcode('tooltip', 'energy_tooltip');
	add_shortcode('highlight', 'energy_highlight');
	add_shortcode('separator', 'energy_separator');
	
	add_shortcode('tagline', 'energy_tagline');

	add_shortcode( 'tabgroup', 'energy_tabgroup' );
	add_shortcode( 'tab', 'energy_tab' );

 	add_shortcode('recent_comments', 'energy_recent_comments');

  // Do the shortcode (only the one above is registered)
  $content = do_shortcode($content);
  // Put the original shortcodes back
  $shortcode_tags = $orig_shortcode_tags;
 
    return $content;
}

 
add_filter('the_content', 'pre_process_shortcode', 12);

// Allow Shortcodes in Widgets
add_filter('widget_text', 'pre_process_shortcode', 12);

/*-----------------------------------------------------------------------------------*/
/* Add TinyMCE Buttons to Editor */
/*-----------------------------------------------------------------------------------*/
add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons_3', 'register_button_3');
     add_filter('mce_buttons_4', 'register_button_4');  
   }  
}  

// Define Position of TinyMCE Icons
function register_button_3($buttons) {  
   array_push($buttons, "container", "columns", "clear", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "one_fifth", "alert", "button", "divider", "gap", "dropcap", "icon", "iconbox", "member", "skill", "testimonial", "testimonial_carousel", "recent_comments");  
   return $buttons;  
} 
function register_button_4($buttons) {  
   array_push($buttons, "projects", "blog", "bloglist", "separatorheadline", "pullquote", "responsiveimage", "visibility", "socialmedia", "table", "accordion",  "tabs", "toggle", "tooltip", "list", "googlefont", "video", "maps", "pricing", "teaser", "teaserbox", "callout", "clients", "box");  
   return $buttons;  
}  
// Remove Empty Paragraphs
add_filter('the_content', 'shortcode_empty_paragraph_fix');
function shortcode_empty_paragraph_fix($content)
{   
	$array = array (
			'<p>[' => '[',
      '<br />' => '', 
			']</p>' => ']', 
			']<br />' => ']',
      '<p></p>' => ''
	);

	$content = strtr($content, $array);
  return $content;
}
function add_plugin($plugin_array) {  
   $plugin_array['accordion'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['alert'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['button'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['divider'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['video'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['maps'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['gap'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['clear'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js'; 
   $plugin_array['icon'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['iconbox'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['list'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['member'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['skill'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['pricing'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['pullquote'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['responsiveimage'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['socialmedia'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['table'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['toggle'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['tooltip'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['separatorheadline'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['googlefont'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['container'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['columns'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_third'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_fifth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['teaser'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['teaserbox'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['callout'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['clients'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['box'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['projects'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['blog'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['bloglist'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['testimonial'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['testimonial_carousel'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['recent_comments'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   
   
   return $plugin_array;  
}  

?>