<?php
/* ----------------------------------------------------- */
/* Testimonial Custom Post Type */
/* ----------------------------------------------------- */
// Adds columns in the admin view for thumbnail and taxonomies
add_filter( 'manage_edit-testi_columns', 'testimonial_edit_columns' );

// Add Icons
add_action( 'admin_head', 'testimonial_icon' );
add_action('init', 'energy_post_type_testi');

function energy_post_type_testi() {
	register_post_type( 'testi',
                array( 
				'label' => __('Testimonial', THEME_NAME), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					'slug' => 'testimonial-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'thumbnail',
						'editor')
					) 
				);
}

function testimonial_edit_columns( $testimonial_columns ) {
	$testimonial_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => _x('Title', 'column name'),
		"thumbnail" => __('Thumbnail', 'portfoliposttype'),
		"author" => __('Author', 'portfolioposttype'),
		"date" => __('Date', 'portfolioposttype'),
	);
	return $testimonial_columns;
}
/**
 * Displays the custom post type icon in the dashboard
 */
function testimonial_icon() { ?>
	    <style type="text/css" media="screen">
	        #menu-posts-portfolio .wp-menu-image {
	            background: url(<?php echo get_template_directory_uri() . '/framework/images/admin/portfolio-icon.png'; ?>) no-repeat 6px 6px !important;
	        }
			#menu-posts-portfolio:hover .wp-menu-image, #menu-posts-portfolio.wp-has-current-submenu .wp-menu-image {
	            background-position:6px -16px !important;
	        }
			#icon-edit.icon32-posts-portfolio {background: url(<?php echo get_template_directory_uri() . '/framework/images/admin/portfolio-32x32.png'; ?>) no-repeat;}
	    </style>
	<?php } 


/*-----------------------------------------------------------------------------------*/
/*	Define Metabox Fields
/*-----------------------------------------------------------------------------------*/

$prefix = 'energy_';
 
$meta_box_testi = array(
	'id' => 'my-meta-box-testi',
	'title' =>  __('Testimonial Options', 'Theme'),
	'page' => 'testi',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
    	array(
    	   'name' => __('Name', 'Theme'),
    	   'desc' => __('Input author\'s name. ', 'Theme'),
    	   'id' => $prefix . 'testi_caption',
    	   'type' => 'text',
    	   'std' => ''
    	),
    	array(
    	   'name' => __('URL', 'Theme'),
    	   'desc' => __('Input author\'s URL.', 'Theme'),
    	   'id' => $prefix . 'testi_url',
    	   'type' => 'text',
    	   'std' => ''
    	),
			array(
    	   'name' => __('Info', 'Theme'),
    	   'desc' => __('Input author\'s additional info.', 'Theme'),
    	   'id' => $prefix . 'testi_info',
    	   'type' => 'text',
    	   'std' => ''
    	)
	)
);

add_action('admin_menu', 'energy_add_box_testi');


/*-----------------------------------------------------------------------------------*/
/*	Add metabox to edit page
/*-----------------------------------------------------------------------------------*/
 
function energy_add_box_testi() {
	global $meta_box_testi;
	
	add_meta_box($meta_box_testi['id'], $meta_box_testi['title'], 'energy_show_box_testi', $meta_box_testi['page'], $meta_box_testi['context'], $meta_box_testi['priority']);

}


/*-----------------------------------------------------------------------------------*/
/*	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/

function energy_show_box_testi() {
	global $meta_box_testi, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('Please fill additional fields for testimonial. ', 'Theme').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="energy_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_testi['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>';
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select id="' . $field['id'] . '" name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break; 
			
		}

	}
 
	echo '</table>';
}

 
add_action('save_post', 'energy_save_data_testi');


/*-----------------------------------------------------------------------------------*/
/*	Save data when post is edited
/*-----------------------------------------------------------------------------------*/
 
function energy_save_data_testi($post_id) {
	global $meta_box_testi;
 	
 	if(isset($_POST['energy_meta_box_nonce'])) {$energy_meta_box_nonce = $_POST['energy_meta_box_nonce'];} else { $energy_meta_box_nonce = ''; }
	// verify nonce
	if (!wp_verify_nonce($energy_meta_box_nonce, basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_testi', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	foreach ($meta_box_testi['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
}
/* ----------------------------------------------------- */
/* EOF */
/* ----------------------------------------------------- */

?>