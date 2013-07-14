<div class="portfolio-wide clearfix">
	<div class="sixteen columns">
		<h3 class="title"><span><?php _e('Portfolio item page', THEME_NAME); ?></span></h3>
	</div>
	<?php if( get_post_meta( get_the_ID(), 'energy_embed', true ) == "" ){ ?>
		
			<?php global $wpdb, $post;
		    $meta = get_post_meta( get_the_ID( ), 'energy_screenshot', false );
		    if ( !is_array( $meta ) )
		    	$meta = ( array ) $meta;
		    if ( !empty( $meta ) ) {
		    	$meta = implode( ',', $meta );
		    	$images = $wpdb->get_col( "
		    	SELECT ID FROM $wpdb->posts
		    	WHERE post_type = 'attachment'
		    	AND ID IN ( $meta )
		    	ORDER BY menu_order ASC
		    	" );
		    	if(!empty($images)){?>
		    		<script>
						jQuery(document).ready(function($){
							$('#portfolio-slider').flexslider({
									animation: "slide",
									controlNav: "thumbnails",
									directionNav: false
								});
						});
					</script>		
					<div id="portfolio-slider" class="flexslider sixteen columns">
						<ul class="slides">
			   <?php	
			   foreach ( $images as $att ) {
			    		// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
			    		$src = wp_get_attachment_image_src( $att, 'sixteen-columns' );
			    		$src2= wp_get_attachment_image_src( $att, '');
			    		$src = $src[0];
			    		$src2 = $src2[0];
			    		$thumb = aq_resize( $src, 100, 65, true ); //resize & crop img
			    		// Show image
			    		echo "<li data-thumb='".$thumb."'><a href='". $src2 . "' rel='prettyPhoto[slides]' class='prettyPhoto'><img src='". $src . "' /></a></li>";
			    	}?>
					   </ul>
			    </div> 
	    <?php } else {
			    	if(has_post_thumbnail()) {
			    		echo '<div class="portfolio-pic">'.the_post_thumbnail('sixteen-columns').'</div>';
			    	} else {
			    		$no_img = wp_get_attachment_image_src( 1300, 'sixteen-columns', true );
			    		echo '<div class="portfolio-pic"><img src="'.$no_img[0].'" alt="" /></div>';
			    	}
			    }
		    } ?>
	    	
			    
	<?php } else { ?>
			    
	    <?php  
	    if (get_post_meta( get_the_ID(), 'energy_source', true ) == 'vimeo') {  
	        echo '<div id="portfolio-video" class="sixteen columns"><iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'energy_embed', true ).'?title=0&amp;byline=0&amp;portrait=0" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';  
	    }  
	    else if (get_post_meta( get_the_ID(), 'energy_source', true ) == 'youtube') {  
	        echo '<div id="portfolio-video" class="sixteen columns"><iframe width="960" height="540" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'energy_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1" frameborder="0" allowfullscreen></iframe></div>';  
	    }  
	    else {  
	        echo '<div id="portfolio-video" class="sixteen columns">'.get_post_meta( get_the_ID(), 'energy_embed', true ).'</div>'; 
	    }  
	    ?>
	    
	<?php } ?>
	<div class="sixteen columns">
		<h4 class="title"><span><?php _e('Project Details', THEME_NAME); ?></span></h4>
	</div>
	<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-details', true ) == 1 ) { ?>
		<div class="portfolio-detail-attributes five columns">
				<ul>
					<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-designer', true ) != "") { ?>
					<li><strong><?php _e('Designer', THEME_NAME); ?>:</strong> <em><?php echo get_post_meta( get_the_ID(), 'energy_portfolio-designer', true ); ?></em></li>
					<?php } ?>
					<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-manager', true ) != "") { ?>
					<li><strong><?php _e('Project manager', THEME_NAME); ?>:</strong> <em><?php echo get_post_meta( get_the_ID(), 'energy_portfolio-manager', true ); ?></em></li>
					<?php } ?>
					<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-coder', true ) != "") { ?>
					<li><strong><?php _e('Coder', THEME_NAME); ?>:</strong> <em><?php echo get_post_meta( get_the_ID(), 'energy_portfolio-coder', true ); ?></em></li>
					<?php } ?>
					<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-director', true ) != "") { ?>
					<li><strong><?php _e('Art director', THEME_NAME); ?>:</strong> <em><?php echo get_post_meta( get_the_ID(), 'energy_portfolio-director', true ); ?></em></li>
					<?php } ?>
					<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-client', true ) != "") { ?>
					<li><strong><?php _e('Client', THEME_NAME); ?>:</strong> <em><?php echo get_post_meta( get_the_ID(), 'energy_portfolio-client', true ); ?></em></li>
					<?php } ?>	
					<li><strong><?php _e('Date', THEME_NAME); ?>:</strong> <em><?php the_date() ?></em></li>
					<li><strong><?php _e('Tags', THEME_NAME); ?>:</strong> <em><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo $taxonomy; ?></em></li>
				</ul>
				<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-link', true ) != "") { ?>
					<a href="<?php echo get_post_meta( get_the_ID(), 'energy_portfolio-link', true ); ?>" target="_blank" class="button"><?php _e('Launch Project', THEME_NAME); ?></a>
				<?php } ?>
		</div>
	<?php } ?>
	<div class="portfolio-detail-description <?php if( get_post_meta( get_the_ID(), 'energy_portfolio-details', true ) == 1 ) { echo 'eleven'; } else { echo 'sixteen'; } ?> columns">
		<div class="portfolio-detail-description-text"><?php the_content(); ?></div>
	</div>
	<div class="clear"></div>
	
</div> <!-- end of portfolio-wide -->