<?php 
	global $blogtype;
	global $options_data;
?>

<div class="post clearfix">
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-content">
		<div class="post-quote">
			<div class="quote-text">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
				<?php the_content(); ?>
			</a>
			<span class="quote-source"><a href="<?php echo get_post_meta($post->ID, '_format_quote_source_url', true); ?>" target="_blank">- <?php echo get_post_meta($post->ID, '_format_quote_source_name', true); ?></a></span>
			</div>
		</div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
		<?php if($options_data['check_readmore'] != "0") { ?>
			<div class="post-more"><a href="<?php the_permalink(); ?>" class="more" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php printf( esc_attr__('Learn more', 'energy'), the_title_attribute('echo=0') ); ?></a></div>
		<?php }?>
	</div>
	<div class="clear"></div>
</div>
