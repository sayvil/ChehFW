<?php get_header(); ?>
	<div id="title">
			<div class="inner">
				<div class="container">
					<div class="nine columns">
						<h1><?php _e('Error 404', THEME_NAME) ?></h1>
						<h2><?php _e('Search for what you are looking for.', THEME_NAME)?></h2>
					</div>
					<?php if($options_data['check_social_titlebar'] == true) { ?>
					<div class="seven columns">
						<div class="social-icons top-icons clearfix">
							<ul class="alignright no-margin">
								<?php if($options_data['social_twitter'] != "") { ?>
									<li class="social-twitter light"><a href="http://www.twitter.com/<?php echo $options_data['social_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', THEME_NAME ) ?>"><?php _e( 'Twitter', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_forrst'] != "") { ?>
									<li class="social-forrst light"><a href="<?php echo $options_data['social_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', THEME_NAME ) ?>"><?php _e( 'Forrst', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_dribbble'] != "") { ?>
									<li class="social-dribbble light"><a href="<?php echo $options_data['social_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', THEME_NAME ) ?>"><?php _e( 'Dribbble', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_flickr'] != "") { ?>
									<li class="social-flickr light"><a href="<?php echo $options_data['social_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', THEME_NAME ) ?>"><?php _e( 'Flickr', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_facebook'] != "") { ?>
									<li class="social-facebook light"><a href="<?php echo $options_data['social_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', THEME_NAME ) ?>"><?php _e( 'Facebook', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_skype'] != "") { ?>
									<li class="social-skype light"><a href="<?php echo $options_data['social_skype']; ?>" target="_blank" title="<?php _e( 'Skype', THEME_NAME ) ?>"><?php _e( 'Skype', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_digg'] != "") { ?>
									<li class="social-digg light"><a href="<?php echo $options_data['social_digg']; ?>" target="_blank" title="<?php _e( 'Digg', THEME_NAME ) ?>"><?php _e( 'Digg', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_google'] != "") { ?>
									<li class="social-googleplus light"><a href="<?php echo $options_data['social_google']; ?>" target="_blank" title="<?php _e( 'Google', THEME_NAME ) ?>"><?php _e( 'Google+', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_linkedin'] != "") { ?>
									<li class="social-linkedin light"><a href="<?php echo $options_data['social_linkedin']; ?>" target="_blank" title="<?php _e( 'LinkedIn', THEME_NAME ) ?>"><?php _e( 'LinkedIn', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_vimeo'] != "") { ?>
									<li class="social-vimeo light"><a href="<?php echo $options_data['social_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', THEME_NAME ) ?>"><?php _e( 'Vimeo', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_yahoo'] != "") { ?>
									<li class="social-yahoo light"><a href="<?php echo $options_data['social_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', THEME_NAME ) ?>"><?php _e( 'Yahoo', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_tumblr'] != "") { ?>
									<li class="social-tumblr light"><a href="<?php echo $options_data['social_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', THEME_NAME ) ?>"><?php _e( 'Tumblr', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_youtube'] != "") { ?>
									<li class="social-youtube light"><a href="<?php echo $options_data['social_youtube']; ?>" target="_blank" title="<?php _e( 'YouTube', THEME_NAME ) ?>"><?php _e( 'YouTube', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_picasa'] != "") { ?>
									<li class="social-picasa light"><a href="<?php echo $options_data['social_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', THEME_NAME ) ?>"><?php _e( 'Picasa', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_deviantart'] != "") { ?>
									<li class="social-deviantart light"><a href="<?php echo $options_data['social_deviantart']; ?>" target="_blank" title="<?php _e( 'DeviantArt', THEME_NAME ) ?>"><?php _e( 'DeviantArt', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_behance'] != "") { ?>
									<li class="social-behance light"><a href="<?php echo $options_data['social_behance']; ?>" target="_blank" title="<?php _e( 'Behance', THEME_NAME ) ?>"><?php _e( 'Behance', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_pinterest'] != "") { ?>
									<li class="social-pinterest light"><a href="<?php echo $options_data['social_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', THEME_NAME ) ?>"><?php _e( 'Pinterest', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_paypal'] != "") { ?>
									<li class="social-paypal light"><a href="<?php echo $options_data['social_paypal']; ?>" target="_blank" title="<?php _e( 'PayPal', THEME_NAME ) ?>"><?php _e( 'PayPal', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_delicious'] != "") { ?>
									<li class="social-delicious light"><a href="<?php echo $options_data['social_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', THEME_NAME ) ?>"><?php _e( 'Delicious', THEME_NAME ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_rss'] == true) { ?>
									<li class="social-rss light"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php _e( 'RSS', THEME_NAME ) ?>"><?php _e( 'RSS', THEME_NAME ) ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		

	<div id="page-wrap" class="container">
	
		<div id="content" class="sixteen columns">
				
			<article class="post">
	
				<div class="entry" id="error-404">
					
					<h2 class="error-404">404</h2>
					<?php _e("Sorry, but we couldn't find the page you were looking for. Please check to make sure you've typed URL correctly. You may also want to search for what you are looking for.", THEME_NAME) ?>
					<br /><br />
					<?php get_template_part('searchform');?>
					<span align="center"><a href="<?php echo home_url(); ?>" target="_self" class="button"><?php _e("Go To Home Page", THEME_NAME) ?></a></span>
	
				</div>
	
			</article>
			
		</div> <!-- end content -->
	
	</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>
