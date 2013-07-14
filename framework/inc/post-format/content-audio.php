<?php 
	global $options_data;
?>

<div class="post clearfix">
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', THEME_NAME), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-audio">
		<?php echo get_post_meta($post->ID, '_format_audio_embed', true); ?>
	</div>	
	<div class="post-content">
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
		<?php if($options_data['check_readmore'] != "0") { ?>
			<div class="post-more"><a href="<?php the_permalink(); ?>" class="more" title="<?php printf( esc_attr__('Permalink to %s', THEME_NAME), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php printf( esc_attr__('Learn more', THEME_NAME), the_title_attribute('echo=0') ); ?></a></div>
		<?php }?>
	</div>
	<div class="clear"></div>
</div>

