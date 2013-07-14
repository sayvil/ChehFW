<?php
function energy_js_custom() {
global $options_data; 
?>

<script type="text/javascript">
	jQuery(document).ready(function($){
    
	    /* ------------------------------------------------------------------------ */
		/* Add PrettyPhoto */
		/* ------------------------------------------------------------------------ */
		
		var lightboxArgs = {			
			<?php if($options_data["lightbox_animation_speed"]): ?>
			animation_speed: '<?php echo strtolower($options_data["lightbox_animation_speed"]); ?>',
			<?php endif; ?>
			overlay_gallery: <?php if($options_data["lightbox_gallery"]) { echo 'true'; } else { echo 'false'; } ?>,
			autoplay_slideshow: <?php if($options_data["lightbox_autoplay"]) { echo 'true'; } else { echo 'false'; } ?>,
			<?php if($options_data["lightbox_slideshow_speed"]): ?>
			slideshow: <?php echo $options_data['lightbox_slideshow_speed']; ?>, /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			<?php endif; ?>
			<?php if($options_data["lightbox_theme"]): ?>
			theme: '<?php echo $options_data['lightbox_theme']; ?>', 
			<?php endif; ?>
			<?php if($options_data["lightbox_opacity"]): ?>
			opacity: <?php echo $options_data['lightbox_opacity']; ?>,
			<?php endif; ?>
			show_title: <?php if($options_data["lightbox_title"]) { echo 'true'; } else { echo 'false'; } ?>,
			<?php if(!$options_data["lightbox_social"]) { echo 'social_tools: "",'; } ?>
			deeplinking: false,
			allow_resize: true, 			/* Resize the photos bigger than viewport. true/false */
			counter_separator_label: '/', 	/* The separator for the gallery counter 1 "of" 2 */
			default_width: 940,
			default_height: 529
		};

		$('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').prettyPhoto(lightboxArgs);
		
		
		<?php if($options_data["lightbox_smartphones"] == 1): ?>
		var windowWidth = 	window.screen.width < window.outerWidth ?
                  			window.screen.width : window.outerWidth;
        var mobile = windowWidth < 500;
        
        if(mobile){
	        $('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').unbind('click.prettyphoto');
        }
        <?php endif; ?>
		
	});
</script>
	
<?php }
add_action( 'wp_footer', 'energy_js_custom', 100 );
?>