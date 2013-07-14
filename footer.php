	<div class="clear"></div>
	
	<?php global $options_data; ?>
	
	<?php if($options_data['check_footerwidgets'] == true) { ?>
	<footer id="footer">
		<div class="container">
			<div class="clearfix">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')); ?>		
			</div>
		</div>
	</footer>
	<?php } ?>
		
	<div id="copyright" class="clearfix">
		<div class="container">
			
			<div class="copyright-text nine columns">
				<?php if($options_data['textarea_copyright'] != "") { ?>
					<?php echo $options_data['textarea_copyright']; ?>
				<?php } else { ?>
					&copy; Copyright <?php echo date("Y"); echo " "; bloginfo('name'); ?>
				<?php } ?>
			</div>
			
			<?php if($options_data['check_socialfooter'] == true) { ?>
			<div class="seven columns">
				<div class="social-icons clearfix">
					<ul>
						<?php if($options_data['social_twitter'] != "") { ?>
							<li class="social-twitter"><a href="http://www.twitter.com/<?php echo $options_data['social_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', THEME_NAME ) ?>"><?php _e( 'Twitter', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_forrst'] != "") { ?>
							<li class="social-forrst"><a href="<?php echo $options_data['social_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', THEME_NAME ) ?>"><?php _e( 'Forrst', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_dribbble'] != "") { ?>
							<li class="social-dribbble"><a href="<?php echo $options_data['social_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', THEME_NAME ) ?>"><?php _e( 'Dribbble', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_flickr'] != "") { ?>
							<li class="social-flickr"><a href="<?php echo $options_data['social_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', THEME_NAME ) ?>"><?php _e( 'Flickr', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_facebook'] != "") { ?>
							<li class="social-facebook"><a href="<?php echo $options_data['social_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', THEME_NAME ) ?>"><?php _e( 'Facebook', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_skype'] != "") { ?>
							<li class="social-skype"><a href="<?php echo $options_data['social_skype']; ?>" target="_blank" title="<?php _e( 'Skype', THEME_NAME ) ?>"><?php _e( 'Skype', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_digg'] != "") { ?>
							<li class="social-digg"><a href="<?php echo $options_data['social_digg']; ?>" target="_blank" title="<?php _e( 'Digg', THEME_NAME ) ?>"><?php _e( 'Digg', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_google'] != "") { ?>
							<li class="social-googleplus"><a href="<?php echo $options_data['social_google']; ?>" target="_blank" title="<?php _e( 'Google', THEME_NAME ) ?>"><?php _e( 'Google+', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_linkedin'] != "") { ?>
							<li class="social-linkedin"><a href="<?php echo $options_data['social_linkedin']; ?>" target="_blank" title="<?php _e( 'LinkedIn', THEME_NAME ) ?>"><?php _e( 'LinkedIn', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_vimeo'] != "") { ?>
							<li class="social-vimeo"><a href="<?php echo $options_data['social_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', THEME_NAME ) ?>"><?php _e( 'Vimeo', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_yahoo'] != "") { ?>
							<li class="social-yahoo"><a href="<?php echo $options_data['social_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', THEME_NAME ) ?>"><?php _e( 'Yahoo', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_tumblr'] != "") { ?>
							<li class="social-tumblr"><a href="<?php echo $options_data['social_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', THEME_NAME ) ?>"><?php _e( 'Tumblr', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_youtube'] != "") { ?>
							<li class="social-youtube"><a href="<?php echo $options_data['social_youtube']; ?>" target="_blank" title="<?php _e( 'YouTube', THEME_NAME ) ?>"><?php _e( 'YouTube', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_picasa'] != "") { ?>
							<li class="social-picasa"><a href="<?php echo $options_data['social_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', THEME_NAME ) ?>"><?php _e( 'Picasa', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_deviantart'] != "") { ?>
							<li class="social-deviantart"><a href="<?php echo $options_data['social_deviantart']; ?>" target="_blank" title="<?php _e( 'DeviantArt', THEME_NAME ) ?>"><?php _e( 'DeviantArt', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_behance'] != "") { ?>
							<li class="social-behance"><a href="<?php echo $options_data['social_behance']; ?>" target="_blank" title="<?php _e( 'Behance', THEME_NAME ) ?>"><?php _e( 'Behance', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_pinterest'] != "") { ?>
							<li class="social-pinterest"><a href="<?php echo $options_data['social_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', THEME_NAME ) ?>"><?php _e( 'Pinterest', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_paypal'] != "") { ?>
							<li class="social-paypal"><a href="<?php echo $options_data['social_paypal']; ?>" target="_blank" title="<?php _e( 'PayPal', THEME_NAME ) ?>"><?php _e( 'PayPal', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_delicious'] != "") { ?>
							<li class="social-delicious"><a href="<?php echo $options_data['social_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', THEME_NAME ) ?>"><?php _e( 'Delicious', THEME_NAME ) ?></a></li>
						<?php } ?>
						<?php if($options_data['social_rss'] == true) { ?>
							<li class="social-rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php _e( 'RSS', THEME_NAME ) ?>"><?php _e( 'RSS', THEME_NAME ) ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div><!-- end copyright -->
		
	<div class="clear"></div>
	</div> <!-- end main -->

	<div id="back-to-top"><a href="#"><?php _e( 'Back to Top', THEME_NAME ) ?></a></div>
	
	<?php if($options_data['textarea_trackingcode'] != '') { echo $options_data['textarea_trackingcode']; } ?>
	</div>
	<?php wp_footer(); ?>
</body>

</html>
