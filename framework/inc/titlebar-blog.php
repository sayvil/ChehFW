<?php
global $options_data;
global $wp_query;
if(isset($wp_query->queried_object->ID)) {$postid=$wp_query->queried_object->ID;} else {$postid='';}
 

if (get_post_meta( $postid, 'energy_revolutionslider', true ) != '' && get_post_meta( $postid, 'energy_revolutionslider', true ) != '0' && get_post_meta( $postid, 'energy_revolutionslider', true ) != 'No Slider') { 
		if(class_exists('RevSlider')){ putRevSlider(get_post_meta( $postid, 'energy_revolutionslider', true )); }
	
 } else { 
 if ( $options_data['select_blogtitlebar'] == 'Image' ) { ?>

	<div id="alt-title" class="post-thumbnail" style="background-image:url( <?php echo $options_data['media_blogtitlebar']; ?> );">
				<div class="grid">
					<div class="container">
						<div class="nine columns">
							<?php /* If this is a category archive */ if (is_category()) { ?>
								<h1><?php _e('Category Archive for', 'energy') ?> &#8216;<?php single_cat_title(); ?>&#8217; </h1>

							<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
								<h1><?php _e('Posts Tagged', 'energy') ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>

							<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								<h1><?php _e('Archive for', 'energy') ?> <?php the_time('F jS, Y'); ?></h1>

							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
								<h1><?php _e('Archive for', 'energy') ?> <?php the_time('F, Y'); ?></h1>

							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								<h1><?php _e('Archive for', 'energy') ?> <?php the_time('Y'); ?></h1>

							<?php /* If this is an author archive */ } elseif (is_author()) { ?>
								<h1><?php _e('Author Archive', 'energy') ?></h1>

							<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
								<h1><?php _e('Blog Archives', 'energy') ?></h1>
							<?php } else {?>
							<h1><?php echo $options_data['text_blogtitle']; ?></h1>
							<?php }?>
							<?php if($options_data['check_blogbreadcrumbs'] != 0 || is_category() || is_tag() || is_day() || is_month() || is_year() || is_author() || (isset($_GET['paged']) && !empty($_GET['paged']))) { ?>
							<div id="breadcrumbs">
								<?php  energy_breadcrumbs(); ?>
							</div>
							<?php } else {?>
								<h2><?php if(is_single()) { echo the_title();} else {echo $options_data['text_blogsubtitle'];} ?></h2>
							<?php }?>
						</div>
						<?php if($options_data['check_social_titlebar'] == true) { ?>
						<div class="seven columns">
							<div class="social-icons top-icons clearfix">
								<ul class="alignright no-margin">
									<?php if($options_data['social_twitter'] != "") { ?>
										<li class="social-twitter light"><a href="http://www.twitter.com/<?php echo $options_data['social_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', 'energy' ) ?>"><?php _e( 'Twitter', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_forrst'] != "") { ?>
										<li class="social-forrst light"><a href="<?php echo $options_data['social_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', 'energy' ) ?>"><?php _e( 'Forrst', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_dribbble'] != "") { ?>
										<li class="social-dribbble light"><a href="<?php echo $options_data['social_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', 'energy' ) ?>"><?php _e( 'Dribbble', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_flickr'] != "") { ?>
										<li class="social-flickr light"><a href="<?php echo $options_data['social_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', 'energy' ) ?>"><?php _e( 'Flickr', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_facebook'] != "") { ?>
										<li class="social-facebook light"><a href="<?php echo $options_data['social_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', 'energy' ) ?>"><?php _e( 'Facebook', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_skype'] != "") { ?>
										<li class="social-skype light"><a href="<?php echo $options_data['social_skype']; ?>" target="_blank" title="<?php _e( 'Skype', 'energy' ) ?>"><?php _e( 'Skype', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_digg'] != "") { ?>
										<li class="social-digg light"><a href="<?php echo $options_data['social_digg']; ?>" target="_blank" title="<?php _e( 'Digg', 'energy' ) ?>"><?php _e( 'Digg', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_google'] != "") { ?>
										<li class="social-googleplus light"><a href="<?php echo $options_data['social_google']; ?>" target="_blank" title="<?php _e( 'Google', 'energy' ) ?>"><?php _e( 'Google+', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_linkedin'] != "") { ?>
										<li class="social-linkedin light"><a href="<?php echo $options_data['social_linkedin']; ?>" target="_blank" title="<?php _e( 'LinkedIn', 'energy' ) ?>"><?php _e( 'LinkedIn', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_vimeo'] != "") { ?>
										<li class="social-vimeo light"><a href="<?php echo $options_data['social_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', 'energy' ) ?>"><?php _e( 'Vimeo', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_yahoo'] != "") { ?>
										<li class="social-yahoo light"><a href="<?php echo $options_data['social_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', 'energy' ) ?>"><?php _e( 'Yahoo', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_tumblr'] != "") { ?>
										<li class="social-tumblr light"><a href="<?php echo $options_data['social_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', 'energy' ) ?>"><?php _e( 'Tumblr', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_youtube'] != "") { ?>
										<li class="social-youtube light"><a href="<?php echo $options_data['social_youtube']; ?>" target="_blank" title="<?php _e( 'YouTube', 'energy' ) ?>"><?php _e( 'YouTube', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_picasa'] != "") { ?>
										<li class="social-picasa light"><a href="<?php echo $options_data['social_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', 'energy' ) ?>"><?php _e( 'Picasa', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_deviantart'] != "") { ?>
										<li class="social-deviantart light"><a href="<?php echo $options_data['social_deviantart']; ?>" target="_blank" title="<?php _e( 'DeviantArt', 'energy' ) ?>"><?php _e( 'DeviantArt', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_behance'] != "") { ?>
										<li class="social-behance light"><a href="<?php echo $options_data['social_behance']; ?>" target="_blank" title="<?php _e( 'Behance', 'energy' ) ?>"><?php _e( 'Behance', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_pinterest'] != "") { ?>
										<li class="social-pinterest light"><a href="<?php echo $options_data['social_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', 'energy' ) ?>"><?php _e( 'Pinterest', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_paypal'] != "") { ?>
										<li class="social-paypal light"><a href="<?php echo $options_data['social_paypal']; ?>" target="_blank" title="<?php _e( 'PayPal', 'energy' ) ?>"><?php _e( 'PayPal', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_delicious'] != "") { ?>
										<li class="social-delicious light"><a href="<?php echo $options_data['social_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', 'energy' ) ?>"><?php _e( 'Delicious', 'energy' ) ?></a></li>
									<?php } ?>
									<?php if($options_data['social_rss'] == true) { ?>
										<li class="social-rss light"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php _e( 'RSS', 'energy' ) ?>"><?php _e( 'RSS', 'energy' ) ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
<?php } elseif ($options_data['select_blogtitlebar'] == 'No Titlebar') { ?>
		
			<div id="no-title"></div>
	
<?php } else { ?>

	<div id="title">
		<div class="inner">
			<div class="container">
				<div class="nine columns">
					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1><?php _e('Category Archive for', 'energy') ?> &#8216;<?php single_cat_title(); ?>&#8217; </h1>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1><?php _e('Posts Tagged', 'energy') ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h1><?php _e('Archive for', 'energy') ?> <?php the_time('F jS, Y'); ?></h1>

					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1><?php _e('Archive for', 'energy') ?> <?php the_time('F, Y'); ?></h1>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h1><?php _e('Archive for', 'energy') ?> <?php the_time('Y'); ?></h1>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1><?php _e('Author Archive', 'energy') ?></h1>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1><?php _e('Blog Archives', 'energy') ?></h1>
					<?php } else {?>
					<h1><?php echo $options_data['text_blogtitle']; ?></h1>
					<?php }?>
					<?php if($options_data['check_blogbreadcrumbs'] != 0 || is_category() || is_tag() || is_day() || is_month() || is_year() || is_author() || (isset($_GET['paged']) && !empty($_GET['paged']))) { ?>
					<div id="breadcrumbs">
						<?php  energy_breadcrumbs(); ?>
					</div>
					<?php } else {?>
						<h2><?php if(is_single()) { echo the_title();} else {echo $options_data['text_blogsubtitle'];} ?></h2>
					<?php }?>
				</div>
				<?php if($options_data['check_social_titlebar'] == true) { ?>
						<div class="seven columns">
						<div class="social-icons top-icons clearfix">
							<ul class="alignright no-margin">
								<?php if($options_data['social_twitter'] != "") { ?>
									<li class="social-twitter light"><a href="http://www.twitter.com/<?php echo $options_data['social_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', 'energy' ) ?>"><?php _e( 'Twitter', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_forrst'] != "") { ?>
									<li class="social-forrst light"><a href="<?php echo $options_data['social_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', 'energy' ) ?>"><?php _e( 'Forrst', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_dribbble'] != "") { ?>
									<li class="social-dribbble light"><a href="<?php echo $options_data['social_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', 'energy' ) ?>"><?php _e( 'Dribbble', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_flickr'] != "") { ?>
									<li class="social-flickr light"><a href="<?php echo $options_data['social_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', 'energy' ) ?>"><?php _e( 'Flickr', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_facebook'] != "") { ?>
									<li class="social-facebook light"><a href="<?php echo $options_data['social_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', 'energy' ) ?>"><?php _e( 'Facebook', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_skype'] != "") { ?>
									<li class="social-skype light"><a href="<?php echo $options_data['social_skype']; ?>" target="_blank" title="<?php _e( 'Skype', 'energy' ) ?>"><?php _e( 'Skype', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_digg'] != "") { ?>
									<li class="social-digg light"><a href="<?php echo $options_data['social_digg']; ?>" target="_blank" title="<?php _e( 'Digg', 'energy' ) ?>"><?php _e( 'Digg', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_google'] != "") { ?>
									<li class="social-googleplus light"><a href="<?php echo $options_data['social_google']; ?>" target="_blank" title="<?php _e( 'Google', 'energy' ) ?>"><?php _e( 'Google+', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_linkedin'] != "") { ?>
									<li class="social-linkedin light"><a href="<?php echo $options_data['social_linkedin']; ?>" target="_blank" title="<?php _e( 'LinkedIn', 'energy' ) ?>"><?php _e( 'LinkedIn', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_vimeo'] != "") { ?>
									<li class="social-vimeo light"><a href="<?php echo $options_data['social_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', 'energy' ) ?>"><?php _e( 'Vimeo', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_yahoo'] != "") { ?>
									<li class="social-yahoo light"><a href="<?php echo $options_data['social_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', 'energy' ) ?>"><?php _e( 'Yahoo', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_tumblr'] != "") { ?>
									<li class="social-tumblr light"><a href="<?php echo $options_data['social_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', 'energy' ) ?>"><?php _e( 'Tumblr', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_youtube'] != "") { ?>
									<li class="social-youtube light"><a href="<?php echo $options_data['social_youtube']; ?>" target="_blank" title="<?php _e( 'YouTube', 'energy' ) ?>"><?php _e( 'YouTube', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_picasa'] != "") { ?>
									<li class="social-picasa light"><a href="<?php echo $options_data['social_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', 'energy' ) ?>"><?php _e( 'Picasa', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_deviantart'] != "") { ?>
									<li class="social-deviantart light"><a href="<?php echo $options_data['social_deviantart']; ?>" target="_blank" title="<?php _e( 'DeviantArt', 'energy' ) ?>"><?php _e( 'DeviantArt', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_behance'] != "") { ?>
									<li class="social-behance light"><a href="<?php echo $options_data['social_behance']; ?>" target="_blank" title="<?php _e( 'Behance', 'energy' ) ?>"><?php _e( 'Behance', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_pinterest'] != "") { ?>
									<li class="social-pinterest light"><a href="<?php echo $options_data['social_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', 'energy' ) ?>"><?php _e( 'Pinterest', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_paypal'] != "") { ?>
									<li class="social-paypal light"><a href="<?php echo $options_data['social_paypal']; ?>" target="_blank" title="<?php _e( 'PayPal', 'energy' ) ?>"><?php _e( 'PayPal', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_delicious'] != "") { ?>
									<li class="social-delicious light"><a href="<?php echo $options_data['social_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', 'energy' ) ?>"><?php _e( 'Delicious', 'energy' ) ?></a></li>
								<?php } ?>
								<?php if($options_data['social_rss'] == true) { ?>
									<li class="social-rss light"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php _e( 'RSS', 'energy' ) ?>"><?php _e( 'RSS', 'energy' ) ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<?php } ?>
			</div>
		</div>
	</div>
	
<?php } 
}?>