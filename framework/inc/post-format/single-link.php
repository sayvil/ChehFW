<div class="post clearfix">
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-content">
		<div class="post-link"><?php echo esc_attr(get_post_meta($post->ID, '_format_link_url', true)); ?></div>
		<div class="post-excerpt"><?php the_content(); ?></div>		
	</div>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
</div>