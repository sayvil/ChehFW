<?php get_header(); ?>
<div id="title">
		<div class="inner">
			<div class="container">
				<div class="nine columns">
					<h1><?php _e('Search Results for', THEME_NAME) ?><?php echo ' "'.$s.'"'; ?><h1>
					<?php if($options_data['check_blogbreadcrumbs'] != 0) { ?>
					<div id="breadcrumbs">
						<?php  energy_breadcrumbs(); ?>
					</div>
					<?php } else {?>
						<h2><?php if(is_single()) { echo the_title();} else {_e('You try to search', THEME_NAME);} ?><?php echo ' "'.$s.'"'; ?></h2>
					<?php }?>
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
	
	<div id="content" class="<?php echo get_post_meta( get_option('page_for_posts'), 'energy_sidebar', true ); ?> twelve columns search">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<!--<?php $blogtype = 'large'; ?>
			
			<?php get_template_part( 'framework/inc/post-format/content', get_post_format() ); ?>-->
			
			<div class="search-result clearfix">
				<h3 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', THEME_NAME), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h3>
				<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
				<div class="search-content">
					<div class="search-excerpt"><?php the_excerpt(); ?></div>
				</div>
				<div class="clear"></div>
				<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
			</div>
			
			
	
		<?php endwhile; ?>
		
	
		<?php get_template_part( 'framework/inc/nav' ); ?>
	
		<?php else : ?>
	
			<h2><?php _e('Not Found', THEME_NAME) ?></h2>
	
		<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
