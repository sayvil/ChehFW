<?php
/* ------------------------------------------------------------------------ */
/* Definition of the constants
/* ------------------------------------------------------------------------ */

	/* ------------------------------------------------------------------------ */
	/* Set Proper Parent/Child theme paths for inclusion */
	@define( 'THEME_DIR', get_template_directory() );
	@define( 'THEME_URL', get_template_directory_uri() );
	@define( 'THEME_NAME', get_current_theme_name() );

	function get_current_theme_name() {
		if ( function_exists('wp_get_theme') ) {
			$theme = wp_get_theme();
			if ( $theme->exists() ) {
				$theme_name = $theme->Name;
			}
		} else {
			$theme_name = get_current_theme();
		}
		return $theme_name;
	}
/* ------------------------------------------------------------------------ */
/* Translation
/* ------------------------------------------------------------------------ */

	/* ------------------------------------------------------------------------ */
	/* Translations can be filed in the framework/languages/ directory */
	// load_theme_textdomain( 'energy', THEME_DIR . '/framework/languages' );
	// load_theme_textdomain( 'energy-framework', THEME_DIR . '/framework/languages' );
	load_theme_textdomain( THEME_NAME, THEME_DIR . '/framework/languages' );
	
	$locale = get_locale();
	$locale_file = THEME_DIR . "/framework/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
	
/* ------------------------------------------------------------------------ */
/* Inlcudes
/* ------------------------------------------------------------------------ */

	/* ------------------------------------------------------------------------ */
	/* Misc Includes */
	include_once('framework/inc/enqueue.php'); // Enqueue JavaScripts & CSS
	include_once('framework/inc/aq_resizer.php'); // Image resizer
	include_once('framework/inc/customcss.php'); // Load Custom CSS
	include_once('framework/inc/customjs.php'); // Load Custom JS
	include_once('framework/inc/sidebars.php'); // Generated Sidebars
	include_once('framework/inc/sidebar-generator.php'); // Include Sidebar Generator
	include_once('framework/inc/breadcrumbs.php'); // Load Breadcrumbs
	include_once('framework/inc/shortcodes.php'); // Load Shortcodes
	include_once('framework/inc/cpt-portfolio.php'); // Portfolio
	include_once('framework/inc/cpt-testimonial.php'); // Testimonial
	/* ------------------------------------------------------------------------ */
	/* Widget Includes */
	include_once('framework/inc/widgets/embed.php');
	include_once('framework/inc/widgets/facebook.php');
	include_once('framework/inc/widgets/flickr.php');
	include_once('framework/inc/widgets/sponsor.php');
	include_once('framework/inc/widgets/twitter.php');
	include_once('framework/inc/widgets/contact.php');
	include_once('framework/inc/widgets/portfolio.php');
	
	/* ------------------------------------------------------------------------ */
	/* Include SMOF */
	require_once('admin/index.php'); // Slightly Modified Options Framework
	
	/* ------------------------------------------------------------------------ */
	/* Include Meta Box Script */
	define( 'RWMB_URL', trailingslashit( THEME_URL . '/framework/inc/meta-box' ) );
	define( 'RWMB_DIR', trailingslashit( THEME_DIR . '/framework/inc/meta-box' ) );
	require_once RWMB_DIR . 'meta-box.php';
	include 'framework/inc/meta-boxes.php';
	
	/* ------------------------------------------------------------------------ */
	/* Automatic Plugin Activation */
	require_once('framework/inc/plugin-activation.php');
	
	add_action('tgmpa_register', 'energy_register_required_plugins');
	function energy_register_required_plugins() {
		$plugins = array(
			array(
				'name'               => 'Post Types Order', // The plugin name
				'slug'               => 'post-types-order', // The plugin slug (typically the folder name)
				'source'             => THEME_URL . '/framework/recommended-plugins/post-types-order.zip', // The plugin source
				'required'           => false, // If false, the plugin is only 'recommended' instead of required
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => 'CF-Post-Formats', // The plugin name
				'slug'               => 'cf-post-formats', // The plugin slug (typically the folder name)
				'source'             => THEME_URL . '/framework/recommended-plugins/cf-post-formats.zip', // The plugin source
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => 'Contact Form 7',
				'slug'               => 'contact-form-7',
				'source'             => THEME_URL . '/framework/recommended-plugins/contact-form-7.zip', // The plugin source
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => 'Revolution Slider',
				'slug'               => 'revslider',
				'source'             => THEME_URL . '/framework/recommended-plugins/revslider.zip', // The plugin source
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
		);

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'domain'           => THEME_NAME,			// Text domain - likely want to be the same as your theme.
			'default_path'     => '',							// Default absolute path to pre-packaged plugins
			'parent_menu_slug' => 'themes.php', 				// Default parent menu slug
			'parent_url_slug'  => 'themes.php', 				// Default parent URL slug
			'menu'             => 'install-required-plugins',	// Menu slug
			'has_notices'      => true,							// Show admin notices or not
			'is_automatic'     => true,							// Automatically activate plugins after installation or not
			'message'          => '',							// Message to output right before the plugins table
			'strings'          => array(
				'page_title'                      => __( 'Install Required Plugins', THEME_NAME ),
				'menu_title'                      => __( 'Install Plugins', THEME_NAME ),
				'installing'                      => __( 'Installing Plugin: %s', THEME_NAME ), // %1$s = plugin name
				'oops'                            => __( 'Something went wrong with the plugin API.', THEME_NAME ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
				'return'                          => __( 'Return to Required Plugins Installer', THEME_NAME ),
				'plugin_activated'                => __( 'Plugin activated successfully.', THEME_NAME ),
				'complete'                        => __( 'All plugins installed and activated successfully. %s', THEME_NAME ), // %1$s = dashboard link
				'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
			)
		);
		tgmpa($plugins, $config);
	}

/* ------------------------------------------------------------------------ */
/* Basics
/* ------------------------------------------------------------------------ */
	function energy_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; ?>
	
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body clearfix"> 
			
				<div class="avatar"><?php echo get_avatar($comment, $size = '100'); ?></div>
			
				<div class="comment-text">
					<div class="author">
						<h4><?php printf( __( '%s', THEME_NAME), get_comment_author_link() ) ?>-</h4>
						<h6><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></h6>
						<div class="date">
						<?php printf(__('%1$s at %2$s', THEME_NAME), get_comment_date(),  get_comment_time() ) ?></a><?php edit_comment_link( __( '(Edit)', THEME_NAME),'  ','' ) ?></div>  
					</div>
					
					<div class="text"><?php comment_text() ?></div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( 'Your comment is awaiting moderation.', THEME_NAME ) ?></em>
						<br />
					<?php endif; ?>
				</div>
			</div>
		<?php
	}

/* ------------------------------------------------------------------------ */
/* Pagination */
function pagination($pages = '', $range = 4) {
		$showitems = ($range * 2)+1;
		
		global $paged;
		if(empty($paged)) $paged = 1;
		
		if($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}
		
		if ( 1 != $pages ) {
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; " . __('First', THEME_NAME) . "</a>";
			if($paged > 1) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; " . __('Previous', THEME_NAME) . "</a>";
			
			for ($i=1; $i <= $pages; $i++) {
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
				}
			}
			if ($paged < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">" . __('Next', THEME_NAME) . " &rsaquo;</a>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>" . __('Last', THEME_NAME) . " &raquo;</a>";
		}
	}
	
	/* ------------------------------------------------------------------------ */
	
	// Word Limiter
	function limit_words($string, $word_limit) {
		$words = explode(' ', $string);
		remove_filter ('the_content', 'wpautop');
		return implode(' ', array_slice($words, 0, $word_limit));
	}
	// The excerpt based on words
	function my_string_limit_words($string, $word_limit) {
		$words = explode(' ', $string, ($word_limit + 1));
		if ( count($words) > $word_limit )
			array_pop($words);
		return implode(' ', $words);
	}

	function my_custom_excerpt($text) {
		global $post;
		if ( '' == $text ) {
			$text = get_the_content('');
			$text = apply_filters('the_content', $text);
			$text = str_replace('\]\]\>', ']]>', $text);
			$fulltext = str_replace('\]\]\>', ']]>', $text);
			$text = strip_tags($text, '<p>');
			$excerpt_length = 40;
			$words = explode(' ', $text, $excerpt_length + 1);
			if (count($words) > $excerpt_length) {
				array_pop($words);
				
				$text = implode(' ', $words);
			}
			else {
				$text = $fulltext;
			}
		}
		return $text;
	}
	remove_filter('get_the_excerpt', 'wp_trim_excerpt');
	add_filter('get_the_excerpt', 'my_custom_excerpt');
	/* ------------------------------------------------------------------------ */
	/* Post Thumbnails */
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
	
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'standard', 700, 300, true );			// Standard Blog Image
		add_image_size( 'blog-medium', 320, 210, true );		// Medium Blog Image
		add_image_size( 'sixteen-columns', 940, 475, true ); 	// for portfolio wide
		add_image_size( 'ten-columns', 640, 500, true );		// for portfolio side-by-side
		add_image_size( 'eight-columns', 460, 300, true ); 		// perfect for responsive - adjust height in CSS
		add_image_size( 'eight-columns-thin', 460, 250, true ); // Portfolio 1 Col / perfect for responsive - adjust height in CSS
		add_image_size( 'mini', 60, 60, true ); 				// used for widget thumbnail
	}
	/* ------------------------------------------------------------------------ */

	/* builder */
	if (!class_exists('WPBakeryVisualComposerAbstract')) {
		$dir = dirname(__FILE__) . '/framework/';
		$composer_settings = Array(
			'APP_ROOT'       => $dir . '/builder',
			'WP_ROOT'        => dirname( dirname( dirname( dirname($dir ) ) ) ). '/',
			'APP_DIR'        => basename( $dir ) . '/builder/',
			'CONFIG'         => $dir . '/builder/config/',
			'ASSETS_DIR'     => 'assets/',
			'COMPOSER'       => $dir . '/builder/composer/',
			'COMPOSER_LIB'   => $dir . '/builder/composer/lib/',
			'SHORTCODES_LIB' => $dir . '/builder/composer/lib/shortcodes/',

			//for which content types Visual Composer should be enabled by default
			'default_post_types' => Array('page')
		);
		require_once locate_template('/framework/builder/js_composer.php');
		$wpVC_setup->init($composer_settings);
	}
	/* Define Content Width */
	if ( ! isset( $content_width ) )
		$content_width = 700;

	function mytheme_adjust_content_width() {
		global $content_width;
	
		if ( is_page_template( 'page-fullwidth.php' ) )
			$content_width = 960;
	}
	add_action( 'template_redirect', 'mytheme_adjust_content_width' );
	
	/* ------------------------------------------------------------------------ */
	/* Add RSS Links to head section */
	add_theme_support( 'automatic-feed-links' );
	
	/* ------------------------------------------------------------------------ */
	/* WP 3.1 Post Formats */
	add_theme_support( 'post-formats', array(
		'gallery',
		'link', 
		'quote',
		'audio',
		'video')
	);
	
	/* ------------------------------------------------------------------------ */
	/* Remove Admin Bar */
	//add_filter('show_admin_bar', '__return_false');
	
	/* ------------------------------------------------------------------------ */
	/* Add Custom Primary Navigation */
	add_action('init', 'register_custom_menu');

	function register_custom_menu() {
		register_nav_menu('main_navigation', 'Main Navigation');
	}
	
	/* ------------------------------------------------------------------------ */
	/* Add prettyPhoto rel= Tag to slide through photos */
	add_filter( 'wp_get_attachment_link', 'sant_prettyadd');

	function sant_prettyadd ($content) {
		$content = preg_replace("/<a/","<a rel=\"prettyPhoto[slides]\"", $content, 1);
		return $content;
	}
/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */
?>