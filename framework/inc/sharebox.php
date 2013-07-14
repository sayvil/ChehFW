<?php global $options_data; ?>

<div class="sharebox clearfix">
	<h3 class="title"><?php _e('Share this post', THEME_NAME); ?></h3>
	<div class="social-icons clearfix">
		<ul>
			<?php if($options_data['check_sharingboxfacebook'] == true) { ?>	
			<li class="social-facebook light">
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="<?php _e( 'Facebook', THEME_NAME ) ?>" target="_blank"><?php _e( 'Facebook', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxtwitter'] == true) { ?>	
			<li class="social-twitter light">
				<a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" title="<?php _e( 'Twitter', THEME_NAME ) ?>" target="_blank"><?php _e( 'Twitter', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxlinkedin'] == true) { ?>	
			<li class="social-linkedin light">
				<a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&amp;title=<?php the_title();?>" title="<?php _e( 'LinkedIn', THEME_NAME ) ?>" target="_blank"><?php _e( 'LinkedIn', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxreddit'] == true) { ?>	
			<li class="social-reddit light">
				<a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>&amp;title=<?php echo urlencode(the_title('', '', false)) ?>" title="<?php _e( 'Reddit', THEME_NAME ) ?>" target="_blank"><?php _e( 'Reddit', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxdigg'] == true) { ?>	
			<li class="social-digg light">
				<a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink() ?>&amp;bodytext=&amp;tags=&amp;title=<?php echo urlencode(the_title('', '', false)) ?>" target="_blank" title="<?php _e( 'Digg', THEME_NAME ) ?>"><?php _e( 'Digg', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxdelicious'] == true) { ?>	
			<li class="social-delicious light">
				<a href="http://www.delicious.com/post?v=2&amp;url=<?php the_permalink() ?>&amp;notes=&amp;tags=&amp;title=<?php echo urlencode(the_title('', '', false)) ?>" title="<?php _e( 'Delicious', THEME_NAME ) ?>" target="_blank"><?php _e( 'Delicious', THEME_NAME ) ?></a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxgoogle'] == true) { ?>	
			<li class="social-googleplus light">
				<a href="http://google.com/bookmarks/mark?op=edit&amp;bkmk=<?php the_permalink() ?>&amp;title=<?php echo urlencode(the_title('', '', false)) ?>" title="<?php _e( 'Google+', THEME_NAME ) ?>" target="_blank"><?php _e( 'Google+', THEME_NAME ) ?>+</a>
			</li>
			<?php } ?>
			<?php if($options_data['check_sharingboxemail'] == true) { ?>	
			<li class="social-email light">
				<a href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink() ?>" title="<?php _e( 'E-Mail', THEME_NAME ) ?>" target="_blank"><?php _e( 'E-Mail', THEME_NAME ) ?>+</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>