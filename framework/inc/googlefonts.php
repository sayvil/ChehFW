<?php
global $options_data;
$customfont = '';

$default = array(
	'arial',
	'verdana',
	'trebuchet',
	'georgia',
	'times',
	'tahoma',
	'helvetica');

$googlefonts = array(
	$options_data['font_body']['face'],
	$options_data['font_h1']['face'],
	$options_data['font_h2']['face'],
	$options_data['font_h3']['face'],
	$options_data['font_h4']['face'],
	$options_data['font_h5']['face'],
	$options_data['font_h6']['face'],
	$options_data['font_titleh1']['face'],
	$options_data['font_titleh2']['face'],
	$options_data['font_nav']['face'],
	$options_data['font_footerheadline']['face'],
	$options_data['font_sidebarwidget']['face']);

foreach ( $googlefonts as $getfonts ) {
	if ( !in_array($getfonts, $default) ) {
		$customfont = str_replace(' ', '+', $getfonts). ':400,400italic,700,700italic|' . $customfont;
	}
}

if ( !empty($customfont) ){
	echo "<link href='http://fonts.googleapis.com/css?family=" . substr_replace($customfont ,"",-1) . "&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese' rel='stylesheet' type='text/css'>";
}?>